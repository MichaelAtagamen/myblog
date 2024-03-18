@extends('layouts.app')

@section('content')
<div class="background-image relative">
    <div class="overlay absolute inset-0 bg-black opacity-50"></div> <!-- Overlay to improve text readability -->
    <div class="content-container">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                
            </div>
        </div>
    </div>
</div>

<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div>
        <img src="https://static.independent.co.uk/2023/04/23/19/GettyImages-1484567255.jpg?quality=75&width=990&crop=3%3A2%2Csmart&auto=webp" width="700" alt="">
    </div>

    <div class="m-auto sm:m-auto text-left w-4/5 block">
        <h2 class="text-3xl font-extrabold text-gray-600">
            This is the league we love, the best league in the world of football.
        </h2>
        
        <p class="py-8 text-gray-500 text-s">
            We outline team stats and the best-performing teams in the Premier League.
        </p>

        <p class="font-extrabold text-gray-600 text-s pb-9">
            Check out more on our new user dashboard where you can outline your personal favorite team in the league.
        </p>

        <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
            Find Out More
        </a>
    </div>
</div>

<div class="border border-gray-300 p-8 mt-8 mx-auto w-4/5">
    <h2 class="text-3xl font-bold mb-4">What is the Premier League?</h2>
    <p class="text-gray-600 leading-relaxed">The Premier League is the top tier of English football, comprising 20 clubs. It is one of the most popular and competitive football leagues globally, known for its fast-paced and exciting matches.</p>
    <p class="text-gray-600 leading-relaxed">Established in 1992, the Premier League has seen legendary players and memorable moments, making it a favorite among football enthusiasts worldwide.</p>
</div>

<div class="grid grid-cols-3 gap-4 mt-8 mx-auto">
    <div>
        <img src="https://wallpapercave.com/wp/wp1830674.jpg" alt="Gallery Image" class="rounded-lg">
    </div>
    <div>
        <img src="https://wallpapercave.com/wp/wp1830670.jpg" alt="Gallery Image" class="rounded-lg">
    </div>
    <div>
        <img src="https://wallpapercave.com/wp/wp1830671.jpg" alt="Gallery Image" class="rounded-lg">
    </div>
    <div>
        <img src="https://wallpapercave.com/wp/wp1830673.jpg" alt="Gallery Image" class="rounded-lg">
    </div>
    <div>
        <img src="https://wallpapercave.com/wp/wp1830678.jpg" alt="Gallery Image" class="rounded-lg">
    </div>
    <div>
        <img src="https://wallpapercave.com/wp/wp1830681.jpg" alt="Gallery Image" class="rounded-lg">
    </div>
</div>

<div class="sm:w-1/4 mx-auto mt-10">
    <h2 class="text-3xl font-bold mb-6 text-center">Premier League Table</h2>
    <table class="w-full border-collapse border border-gray-500">
        <thead>
            <tr class="bg-gray-300">
                <th class="py-2 px-4 border border-gray-500">Position</th>
                <th class="py-2 px-4 border border-gray-500">Team</th>
                <th class="py-2 px-4 border border-gray-500">Points</th>
                <!-- Add more columns as needed (e.g., Played, Won, Drawn, Lost, Goal Difference) -->
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="py-2 px-4 border border-gray-500">1</td>
                <td class="py-2 px-4 border border-gray-500">Manchester City</td>
                <td class="py-2 px-4 border border-gray-500">75</td>
                <!-- Add more rows for each team -->
            </tr>
            <tr>
                <td class="py-2 px-4 border border-gray-500">2</td>
                <td class="py-2 px-4 border border-gray-500">Arsenal</td>
                <td class="py-2 px-4 border border-gray-500">70</td>
                <!-- Add more rows for each team -->
            </tr>
            <tr>
                <td class="py-2 px-4 border border-gray-500">3</td>
                <td class="py-2 px-4 border border-gray-500">Manchester United</td>
                <td class="py-2 px-4 border border-gray-500">67</td>
                <!-- Add more rows for each team -->
            </tr>
            <tr>
                <td class="py-2 px-4 border border-gray-500">4</td>
                <td class="py-2 px-4 border border-gray-500">Liverpool </td>
                <td class="py-2 px-4 border border-gray-500">63</td>
                <!-- Add more rows for each team -->
            </tr>
            <tr>
                <td class="py-2 px-4 border border-gray-500">5</td>
                <td class="py-2 px-4 border border-gray-500">Aston Villa</td>
                <td class="py-2 px-4 border border-gray-500">55</td>
                <!-- Add more rows for each team -->
            </tr>
            <tr>
                <td class="py-2 px-4 border border-gray-500">6</td>
                <td class="py-2 px-4 border border-gray-500">Spurs </td>
                <td class="py-2 px-4 border border-gray-500">47</td>
                <!-- Add more rows for each team -->
            </tr>
            <tr>
                <td class="py-2 px-4 border border-gray-500">7</td>
                <td class="py-2 px-4 border border-gray-500">West Ham</td>
                <td class="py-2 px-4 border border-gray-500">43</td>
                <!-- Add more rows for each team -->
            </tr>
            <tr>
                <td class="py-2 px-4 border border-gray-500">8</td>
                <td class="py-2 px-4 border border-gray-500">Brighton</td>
                <td class="py-2 px-4 border border-gray-500">42</td>
                <!-- Add more rows for each team -->
            </tr>
            <tr>
                <td class="py-2 px-4 border border-gray-500">9</td>
                <td class="py-2 px-4 border border-gray-500">Brentford</td>
                <td class="py-2 px-4 border border-gray-500">41</td>
                <!-- Add more rows for each team -->
            </tr>
            <tr>
                <td class="py-2 px-4 border border-gray-500">10</td>
                <td class="py-2 px-4 border border-gray-500">Newcastle United</td>
                <td class="py-2 px-4 border border-gray-500">40</td>
                <!-- Add more rows for each team -->
            </tr>
            <tr>
                <td class="py-2 px-4 border border-gray-500">11</td>
                <td class="py-2 px-4 border border-gray-500">Chelsea City</td>
                <td class="py-2 px-4 border border-gray-500">39</td>
                <!-- Add more rows for each team -->
            </tr>
            <tr>
                <td class="py-2 px-4 border border-gray-500">12</td>
                <td class="py-2 px-4 border border-gray-500">Fulham </td>
                <td class="py-2 px-4 border border-gray-500">35</td>
                <!-- Add more rows for each team -->
            </tr>
            <tr>
                <td class="py-2 px-4 border border-gray-500">13</td>
                <td class="py-2 px-4 border border-gray-500">Bournmouth</td>
                <td class="py-2 px-4 border border-gray-500">35</td>
                <!-- Add more rows for each team -->
            </tr>
            <tr>
                <td class="py-2 px-4 border border-gray-500">14</td>
                <td class="py-2 px-4 border border-gray-500">Luton Town</td>
                <td class="py-2 px-4 border border-gray-500">29</td>
                <!-- Add more rows for each team -->
            </tr>
            <tr>
                <td class="py-2 px-4 border border-gray-500">15</td>
                <td class="py-2 px-4 border border-gray-500">Wolves</td>
                <td class="py-2 px-4 border border-gray-500">22</td>
                <!-- Add more rows for each team -->
            </tr>
            <tr>
                <td class="py-2 px-4 border border-gray-500">16</td>
                <td class="py-2 px-4 border border-gray-500">Crystal Palace</td>
                <td class="py-2 px-4 border border-gray-500">20</td>
                <!-- Add more rows for each team -->
            </tr>
            <tr>
                <td class="py-2 px-4 border border-gray-500">17</td>
                <td class="py-2 px-4 border border-gray-500">Burnley </td>
                <td class="py-2 px-4 border border-gray-500">20</td>
                <!-- Add more rows for each team -->
            </tr>
            <tr>
                <td class="py-2 px-4 border border-gray-500">18</td>
                <td class="py-2 px-4 border border-gray-500">Nottingham Forest</td>
                <td class="py-2 px-4 border border-gray-500">16</td>
                <!-- Add more rows for each team -->
            </tr>
            <tr>
                <td class="py-2 px-4 border border-gray-500">19</td>
                <td class="py-2 px-4 border border-gray-500">Everton</td>
                <td class="py-2 px-4 border border-gray-500">12</td>
                <!-- Add more rows for each team -->
            </tr>
            <tr>
                <td class="py-2 px-4 border border-gray-500">20</td>
                <td class="py-2 px-4 border border-gray-500">Sheffield United</td>
                <td class="py-2 px-4 border border-gray-500">10</td>
                <!-- Add more rows for each team -->
            </tr>
        </tbody>
    </table>
</div>

<div class="sm:w-3/4 mx-auto mt-10">
    <h2 class="text-3xl font-bold mb-6 text-center">Popular Blogs</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="border border-gray-300 p-6 rounded-lg flex flex-col">
            <img src="https://wallpapercave.com/wp/wp1830687.jpg" alt="Blog Image" class="rounded-lg mb-4">
            <div>
                <h3 class="text-xl font-semibold mb-4">2-1 History Made by The Bulls</h3>
                <p class="text-gray-600 leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tristique libero a elit fringilla, vitae ultricies urna fermentum.</p>
                <a href="#" class="text-blue-500 mt-4 inline-block">Read More</a>
            </div>
        </div>
        <div class="border border-gray-300 p-6 rounded-lg flex flex-col">
            <img src="https://wallpapercave.com/wp/wp1830688.jpg" alt="Blog Image" class="rounded-lg mb-4">
            <div>
                <h3 class="text-xl font-semibold mb-4">Liverpool Steal The FA Cup</h3>
                <p class="text-gray-600 leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tristique libero a elit fringilla, vitae ultricies urna fermentum.</p>
                <a href="#" class="text-blue-500 mt-4 inline-block">Read More</a>
            </div>
        </div>
        <div class="border border-gray-300 p-6 rounded-lg flex flex-col">
            <img src="https://wallpapercave.com/wp/wp1830698.jpg" alt="Blog Image" class="rounded-lg mb-4">
            <div>
                <h3 class="text-xl font-semibold mb-4">Top Goal Scorer Sturridge Soars High</h3>
                <p class="text-gray-600 leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tristique libero a elit fringilla, vitae ultricies urna fermentum.</p>
                <a href="#" class="text-blue-500 mt-4 inline-block">Read More</a>
            </div>
        </div>
    </div>
</div>
@endsection
