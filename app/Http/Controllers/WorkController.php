<?php

namespace App\Http\Controllers;

use App\Models\photo;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function uploadImage(Request $request)
    {
        // $request->validate([
        //     'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        // );

        $imagePath = $request->file('photo')->store('public/images');
        $imagePath = str_replace('public', 'storage', $imagePath);

        $image = new Photo();
        $image->photo = $imagePath;
        $image->save();

        return 'Image uploaded successfully';
    }
}
