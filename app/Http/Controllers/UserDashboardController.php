<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function index()
    {
        // Fetch user-specific data
        $userData = auth()->user();

        // Pass user data to the dashboard view
        return view('dashboard', compact('userData'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'team' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            // Add more validation rules as needed
        ]);
    
        // Update the user profile in the database
        $user = User::findOrFail($id);
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->team = $validatedData['team'];
        $user->description = $validatedData['description'];
        // Update other user fields as needed
        $user->save();
    
        // Redirect the user back to the dashboard with a success message
        return redirect()->route('dashboard')->with('success', 'Profile updated successfully!');
    }
    
}
