<?php

namespace App\Http\Controllers;

use App\Models\Metadata;
use FFI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    public function index()
    {
        return view('dashboard.profile.index', [
            'title' => 'Profile'
        ]);
    }
    public function update(Request $request)
    {
        $request->validate([
            'image' => 'mimes:jpeg,png,jpg',
            'email' => 'required|email',

        ], [
            'image.mimes' => 'Jenis foto tidak valid!!',
            'email.required' => 'Email wajib diisi!!',
            'email.email' => 'Tolong isi email yang benar!!'
        ]);

        if ($request->hasFile('image')) {
            $file_image = $request->file('image');
            $image_ekst = $file_image->extension();
            $new_image = date('ymdhis') . ".$image_ekst";
            $file_image->move(public_path('profil_images'), $new_image);
            // Hapus Foto Lama saat proses updated
            $old_image = get_meta_value('image');
            File::delete(public_path('profil_images') . "/" . $old_image);

            Metadata::updateOrCreate(['meta_key' => 'image'], ['meta_value' => $new_image]);
        }
        // Profile
        Metadata::updateOrCreate(['meta_key' => 'city'], ['meta_value' => $request->city]);
        Metadata::updateOrCreate(['meta_key' => 'province'], ['meta_value' => $request->province]);
        Metadata::updateOrCreate(['meta_key' => 'phone_number'], ['meta_value' => $request->phone_number]);
        Metadata::updateOrCreate(['meta_key' => 'email'], ['meta_value' => $request->email]);

        // Sosial media
        Metadata::updateOrCreate(['meta_key' => 'facebook'], ['meta_value' => $request->facebook]);
        Metadata::updateOrCreate(['meta_key' => 'instagram'], ['meta_value' => $request->instagram]);
        Metadata::updateOrCreate(['meta_key' => 'twitter'], ['meta_value' => $request->twitter]);
        Metadata::updateOrCreate(['meta_key' => 'linkedin'], ['meta_value' => $request->linkedin]);
        Metadata::updateOrCreate(['meta_key' => 'github'], ['meta_value' => $request->github]);



        return redirect('dashboard/profile')->with('success', 'Your Profile has been updated !');
    }
}
