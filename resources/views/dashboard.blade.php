<!-- dashboard.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h2 class="text-3xl font-bold mb-6">User Dashboard</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Profile Photo Upload -->
        <div class="border border-gray-300 p-6 rounded-lg">
            <h3 class="text-xl font-semibold mb-4">Profile Photo</h3>
            <form action="{{ route('dashboard.update', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="file" id="profile_photo" name="profile_photo" class="border border-gray-300 rounded-md p-2 mb-4">
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition duration-300">Upload Photo</button>
            </form>
        </div>

        <!-- Favorite Team and Description -->
        <div class="border border-gray-300 p-6 rounded-lg">
            <h3 class="text-xl font-semibold mb-4">Favorite Team</h3>
            <form action="{{ route('dashboard.update', Auth::user()->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="favorite_team" class="block text-gray-600 font-semibold mb-2">Select Your Favorite Team</label>
                    <select id="favorite_team" name="favorite_team" class="border border-gray-300 rounded-md p-2">
                        <!-- Populate this dropdown with teams from your database -->
                        <option value="team1">Team 1</option>
                        <option value="team2">Team 2</option>
                        <option value="team3">Team 3</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
                <div class="mb-4">
                    <label for="team_description" class="block text-gray-600 font-semibold mb-2">Why do you love this team?</label>
                    <textarea id="team_description" name="team_description" rows="4" class="w-full border-gray-300 rounded-md p-2" required></textarea>
                </div>
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition duration-300">Save</button>
            </form>
        </div>
    </div>

    <!-- User Information -->
    <div class="border border-gray-300 p-6 rounded-lg mt-8">
        <h3 class="text-xl font-semibold mb-4">User Information</h3>
        <p class="text-gray-600 mb-2"><span class="font-semibold">Name:</span> {{ Auth::user()->name }}</p>
        <p class="text-gray-600 mb-2"><span class="font-semibold">Email:</span> {{ Auth::user()->email }}</p>
        <!-- Add more user information fields as needed -->
    </div>
</div>
@endsection
