<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    /**
     * Gallery List Page
     */
    public function index()
    {
        $galleries = Gallery::latest()->get();

        return view('admin.gallery.index', compact('galleries'));
    }

    /**
     * Store Gallery Image
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:4096',
        ]);

        try {

            // create folder if not exists
            $destinationPath = public_path('backend/gallery');

            if (!File::exists($destinationPath)) {
                File::makeDirectory($destinationPath, 0755, true);
            }

            // upload image
            $image = $request->file('image');

            $imageName = time() . '_' . rand(1000,9999) . '.' . $image->getClientOriginalExtension();

            $image->move($destinationPath, $imageName);

            // save database
            Gallery::create([
                'image' => 'backend/gallery/' . $imageName,
            ]);

            return back()->with('success', 'Gallery image uploaded successfully.');

        } catch (\Exception $e) {

            return back()->with('error', 'Something went wrong while uploading image.');

        }
    }

    /**
     * Delete Gallery Image
     */
    public function destroy($id)
    {
        try {

            $gallery = Gallery::findOrFail($id);

            // image full path
            $imagePath = public_path($gallery->image);

            // delete image
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }

            // delete record
            $gallery->delete();

            return back()->with('success', 'Gallery image deleted successfully.');

        } catch (\Exception $e) {

            return back()->with('error', 'Something went wrong while deleting image.');

        }
    }
}