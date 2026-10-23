<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * List
     */
    public function index()
    {
        $members = Member::orderBy('position', 'asc')
                    ->latest()
                    ->get();

        return view('admin.member.index', compact('members'));
    }

    /**
     * Store
     */
    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
        ]);

        $photoPath = null;

        if ($request->hasFile('photo')) {

            $photo = $request->file('photo');

            $photoName = time() . '_' . uniqid() . '.' . $photo->getClientOriginalExtension();

            $photo->move(public_path('uploads/members'), $photoName);

            $photoPath = 'uploads/members/' . $photoName;
        }

        $lastPosition = Member::max('position');

        Member::create([
            'photo' => $photoPath,
            'name' => $request->name,
            'designation' => $request->designation,
            'position' => $lastPosition + 1,
            'status' => 1,
        ]);

        return redirect()
            ->back()
            ->with('success', 'Member added successfully.');
    }

    /**
     * Update
     */
    public function update(Request $request, $id)
    {
        $member = Member::findOrFail($id);

        $request->validate([
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'status' => 'required|boolean',
        ]);

        $photoPath = $member->photo;

        if ($request->hasFile('photo')) {

            if ($member->photo && file_exists(public_path($member->photo))) {
                unlink(public_path($member->photo));
            }

            $photo = $request->file('photo');

            $photoName = time() . '_' . uniqid() . '.' . $photo->getClientOriginalExtension();

            $photo->move(public_path('uploads/members'), $photoName);

            $photoPath = 'uploads/members/' . $photoName;
        }

        $member->update([
            'photo' => $photoPath,
            'name' => $request->name,
            'designation' => $request->designation,
            'status' => $request->status,
        ]);

        return redirect()
            ->back()
            ->with('success', 'Member updated successfully.');
    }

    /**
     * Delete
     */
    public function destroy($id)
    {
        $member = Member::findOrFail($id);

        if ($member->photo && file_exists(public_path($member->photo))) {
            unlink(public_path($member->photo));
        }

        $member->delete();

        return redirect()
            ->back()
            ->with('success', 'Member deleted successfully.');
    }

    /**
     * Change status
     */
    public function changeStatus($id)
    {
        $member = Member::findOrFail($id);

        $member->status = !$member->status;

        $member->save();

        return redirect()
            ->back()
            ->with('success', 'Member status updated successfully.');
    }

    /**
     * Update ordering
     */
    public function updateOrder(Request $request)
    {
        foreach ($request->orders as $order) {

            Member::where('id', $order['id'])
                ->update([
                    'position' => $order['position']
                ]);
        }

        return response()->json([
            'status' => true
        ]);
    }
}