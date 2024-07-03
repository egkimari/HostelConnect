<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hostel; // Make sure to import the Hostel model

class HostelController extends Controller
{
    // Method to show a single hostel by ID
    public function show($id)
    {
        // Fetch the hostel details using the ID
        $hostel = Hostel::find($id);

        // Check if the hostel exists
        if (!$hostel) {
            abort(404, 'Hostel not found');
        }

        // Pass the hostel details to the view
        return view('frontend.hostels.show', compact('hostel'));
    }
}
