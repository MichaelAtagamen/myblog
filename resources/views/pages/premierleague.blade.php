@extends('layouts.app')

@section('content')
    <div class="premier-league-background grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Premier League 
                </h1>
                <a 
                    href="/blog"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Read More
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://static.independent.co.uk/2023/06/15/08/GettyImages-1489764383.jpg?quality=75&width=990&crop=3%3A2%2Csmart&auto=webp" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                This the league we love ,the best league in the world of football.
            </h2>
            
            <p class="py-8 text-gray-500 text-s">
               We Outline Team Stats and the best performing team in the premier league.
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                Check out more on our new user dashboard where you can outline your personal favourrite team in the league.
            </p>

            <a 
                href="/blog"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l"> 
            I'm an expert in...
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            Ux Design
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Project Management
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Digital Strategy
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Backend Development
        </span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque exercitationem saepe enim veritatis, eos temporibus quaerat facere consectetur qui.
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    PHP
                </span>

                <h3 class="text-xl font-bold py-10">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas necessitatibus dolorum error culpa laboriosam. Enim voluptas earum repudiandae consequuntur ad? Expedita labore aspernatur facilis quasi ex? Nemo hic placeat et?
                </h3>

                <a 
                    href=""
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>
        <div>
            <img src="https://wallpapercave.com/wp/wp1830703.jpg" alt="">
        </div>
    </div>

    <!-- New Section for Premier League Stats and Fixtures -->
<div class="bg-gray-100 py-15 text-center">
    <h2 class="text-4xl font-bold text-gray-800 mb-8">
        Premier League Overview
    </h2>

    <!-- Top Goal Scorer Photo -->
    <div class="mb-8">
        <img src="https://static.independent.co.uk/2023/07/05/08/457ad57edd5afacc9320345a649a8541Y29udGVudHNlYXJjaGFwaSwxNjg4NTc2OTAw-2.71336144.jpg?quality=75&width=400&crop=3%3A2%2Csmart&auto=webp" alt="" class="rounded-full border-4 border-gray-500 mx-auto">
        <p class="text-gray-500 mt-2">Top Goal Scorer: Harry Kane</p>
    </div>

    <!-- Placeholder for Premier League Stats -->
    <div class="grid grid-cols-2 gap-8">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-bold text-gray-700 mb-4">
                Top Team Stats
            </h3>
            <!-- Add your actual stats data here -->
            <p class="text-gray-500">Top team: Manchester City</p>
            <p class="text-gray-500">Goals Scored: 65</p>
            <p class="text-gray-500">Clean Sheets: 15</p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-bold text-gray-700 mb-4">
                Upcoming Fixtures
            </h3>
            <!-- Add your actual fixtures data here -->
            <p class="text-gray-500">Matchday 28: Manchester United vs Liverpool</p>
            <p class="text-gray-500">Matchday 29: Chelsea vs Manchester City</p>
            <p class="text-gray-500">Matchday 30: Arsenal vs Tottenham</p>
        </div>
    </div>

    <!-- Header for Top Teams -->
    <h3 class="text-2xl font-bold text-gray-700 mb-4">Top 6 Teams</h3>

   <!-- Team Photos -->
<div class="mt-10 grid grid-cols-3 gap-4 mx-auto">
    <div>
        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/7/7a/Manchester_United_FC_crest.svg/400px-Manchester_United_FC_crest.svg.png" alt="" class="rounded border-2 border-gray-700 mx-auto">
        <p class="text-gray-500 mt-2">Manchester United</p>
    </div>
    <div>
        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/5/53/Arsenal_FC.svg/400px-Arsenal_FC.svg.png" alt="" class="rounded border-2 border-gray-700 mx-auto">
        <p class="text-gray-500 mt-2">Arsenal</p>
    </div>
    <div>
        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/e/eb/Manchester_City_FC_badge.svg/400px-Manchester_City_FC_badge.svg.png?20180205235525" alt="Manchester City" class="rounded border-2 border-gray-700 mx-auto">
        <p class="text-gray-500 mt-2">Manchester City</p>
    </div>
    <!-- Add three more teams below with the same structure -->
    <div>
        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/0/0c/Liverpool_FC.svg/400px-Liverpool_FC.svg.png" alt="" class="rounded border-2 border-gray-700 mx-auto">
        <p class="text-gray-500 mt-2">Liverpool</p>
    </div>
    <div>
        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/b/b4/Tottenham_Hotspur.svg/400px-Tottenham_Hotspur.svg.png" alt="" class="rounded border-2 border-gray-700 mx-auto">
        <p class="text-gray-500 mt-2">Tottenham</p>
    </div>
    <div>
        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/9/9f/Aston_Villa_logo.svg/400px-Aston_Villa_logo.svg.png" alt="" class="rounded border-2 border-gray-700 mx-auto">
        <p class="text-gray-500 mt-2">Aston Villa</p>
    </div>
</div>

    <!-- Additional Content -->
    <div class="mt-10 text-center">
        <h3 class="text-2xl font-bold text-gray-700 mb-4">Additional Premier League Insights</h3>
        <p class="text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam fringilla gravida enim, sit amet euismod lectus vestibulum et.</p>
        <p class="text-gray-500">Sed tincidunt augue nec urna ullamcorper, in dignissim tortor pellentesque. Vivamus quis arcu sed ligula ullamcorper aliquet.</p>
    </div>

     <!-- League Table -->
     <div class="mt-10">
        <h3 class="text-2xl font-bold text-gray-700 mb-4">Premier League Table</h3>
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

</div>

@endsection