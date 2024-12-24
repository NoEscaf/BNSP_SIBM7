<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function kontak()
    {
        return view('kontak');
    }

    public function submitContact(Request $request)
    {
        // Validate the request data (important for security)
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Process the form data (e.g., send an email, store in a database)
        // ... your logic here ...  Example using mail:

        Mail::to('your_email@example.com')->send(new ContactMail($request->all()));

        return redirect()->route('kontak')->with('success', 'Your message has been sent!');
    }
}
