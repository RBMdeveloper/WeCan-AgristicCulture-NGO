<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Banner List
     */
    public function index()
    {
        $banners = Banner::orderBy('position', 'asc')
                    ->latest()
                    ->get();

        return view('admin.banner.index', compact('banners'));
    }

    /**
     * Store Banner
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'sub_heading' => 'nullable|string|max:255',
            'heading' => 'required|string|max:255',
            'description' => 'nullable|string',
            'button_text' => 'nullable|string|max:255',
            'button_link' => 'nullable|string|max:255',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {

            $image = $request->file('image');

            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('uploads/banner'), $imageName);

            $imagePath = 'uploads/banner/' . $imageName;
        }

        $lastPosition = Banner::max('position');

        Banner::create([
            'image' => $imagePath,
            'sub_heading' => $request->sub_heading,
            'heading' => $request->heading,
            'description' => $request->description,
            'button_text' => $request->button_text,
            'button_link' => $request->button_link,
            'position' => $lastPosition + 1,
            'status' => 1,
        ]);

        return redirect()
            ->back()
            ->with('success', 'Banner added successfully.');
    }

    /**
     * Edit Banner
     */
    public function edit($id)
    {
        $banner = Banner::findOrFail($id);

        return response()->json($banner);
    }

    /**
     * Update Banner
     */
    public function update(Request $request, $id)
    {
        $banner = Banner::findOrFail($id);

        $request->validate([
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'sub_heading' => 'nullable|string|max:255',
            'heading' => 'required|string|max:255',
            'description' => 'nullable|string',
            'button_text' => 'nullable|string|max:255',
            'button_link' => 'nullable|string|max:255',
            'status' => 'required|boolean',
        ]);

        $imagePath = $banner->image;

        if ($request->hasFile('image')) {

            // delete old image
            if ($banner->image && file_exists(public_path($banner->image))) {
                unlink(public_path($banner->image));
            }

            $image = $request->file('image');

            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('uploads/banner'), $imageName);

            $imagePath = 'uploads/banner/' . $imageName;
        }

        $banner->update([
            'image' => $imagePath,
            'sub_heading' => $request->sub_heading,
            'heading' => $request->heading,
            'description' => $request->description,
            'button_text' => $request->button_text,
            'button_link' => $request->button_link,
            'status' => $request->status,
        ]);

        return redirect()
            ->back()
            ->with('success', 'Banner updated successfully.');
    }

    /**
     * Delete Banner
     */
    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);

        // delete image
        if ($banner->image && file_exists(public_path($banner->image))) {
            unlink(public_path($banner->image));
        }

        $banner->delete();

        return redirect()
            ->back()
            ->with('success', 'Banner deleted successfully.');
    }

    /**
     * Update Ordering
     */
    public function updateOrder(Request $request)
    {
        $request->validate([
            'orders' => 'required|array',
        ]);

        foreach ($request->orders as $order) {

            Banner::where('id', $order['id'])
                ->update([
                    'position' => $order['position']
                ]);
        }

        return response()->json([
            'status' => true,
            'message' => 'Banner order updated successfully.'
        ]);
    }

    /**
     * Status Toggle
     */
    public function changeStatus($id)
    {
        $banner = Banner::findOrFail($id);

        $banner->status = !$banner->status;

        $banner->save();

        return redirect()
            ->back()
            ->with('success', 'Banner status updated successfully.');
    }
}