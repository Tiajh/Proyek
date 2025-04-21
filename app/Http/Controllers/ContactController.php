<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('Contact.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email',
            'phone'   => 'required|digits_between:10,15',
            'message' => 'required|string|max:500',
        ]);

        // Simulasi menyimpan atau mengirim data, misal ke email/database
        return redirect()->back()->with('success', 'Pesan Anda telah dikirim!');
    }
}
