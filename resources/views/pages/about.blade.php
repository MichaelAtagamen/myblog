@extends('layouts.app')

@section('content')
    <!-- About Us Section -->
    <div class="about-background grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    About Us
                </h1>
                <a href="/blog" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Read More
                </a>
            </div>
        </div>
    </div>

    <!-- Introduction Section -->
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://i.imgflip.com/7nfx4g.jpg" width="700" alt="">
        </div>
        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                The Premier League: A Football Legacy
            </h2>
            <p class="py-8 text-gray-500 text-s">
                Explore the rich history and incredible journey of the Premier League, regarded as the best football league globally.
            </p>
            <p class="font-extrabold text-gray-600 text-s pb-9">
                Learn about the legendary players, iconic moments, and why millions of fans consider it the pinnacle of football excellence.
            </p>
            <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Discover More
            </a>
        </div>
    </div>

    <!-- Premier League Overview Section -->
    <div class="mt-10 text-center">
        <h2 class="text-4xl font-bold text-gray-800 mb-8">Premier League Overview</h2>
        <div class="flex flex-col sm:flex-row">
            <div class="sm:w-1/2">
                <img src="https://wallpapercave.com/wp/wp1830667.jpg" alt="Premier League" class="rounded-lg mb-4">
            </div>
            <div class="sm:w-1/2 text-left">
                <p class="text-gray-500 mb-4">
                    The Premier League, often referred to as the English Premier League (EPL), is the top professional football league in England. Established in 1992, the league replaced the Football League First Division as the highest tier of English football. It operates on a system of promotion and relegation with the English Football League (EFL) and has 20 clubs competing in a season.
                </p>
                <p class="text-gray-500 mb-4">
                    The Premier League is one of the most popular and widely watched football leagues globally, with millions of fans following matches both domestically and internationally. Its popularity is attributed to several factors, including the high level of competition, the quality of football played, and the global appeal of its clubs and players.
                </p>
                <p class="text-gray-500">
                    Each season, teams compete in a round-robin format, playing a total of 38 matches – 19 home and 19 away. The league operates on a points system, where teams earn three points for a win, one point for a draw, and no points for a loss. At the end of the season, the team with the most points is crowned the champion, while the bottom three teams are relegated to the EFL Championship.
                </p>
                <p class="text-gray-500">
                    Off the field, the Premier League is also a commercial powerhouse, with lucrative broadcasting deals, sponsorships, and merchandising contributing to its financial success. The league's global appeal has helped it expand its reach to audiences around the world, further solidifying its status as one of the premier football competitions on the planet.
                </p>
                <p class="text-gray-500">
                    Off the field, the Premier League is also a commercial powerhouse, with lucrative broadcasting deals, sponsorships, and merchandising contributing to its financial success. The league's global appeal has helped it expand its reach to audiences around the world, further solidifying its status as one of the premier football competitions on the planet.
                </p>
            </div>
        </div>
    </div>

    <!-- Best League Section -->
    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l">Why the Premier League is the Best</h2>
        <div class="flex flex-col sm:flex-row">
            <div class="sm:w-1/2">
                <img src="https://wallpapercave.com/wp/wp1830665.jpg" alt="Best League" class="rounded-lg mb-4">
            </div>
            <div class="sm:w-1/2 text-left">
                <p class="text-gray-500 mb-4">
                    The Premier League boasts some of the world's most famous and successful football clubs, including Manchester United, Liverpool, Arsenal, Chelsea, and Manchester City, among others. These clubs have a rich history of success both domestically and in European competitions like the UEFA Champions League and the UEFA Europa League.
                </p>
                <p class="text-gray-500 mb-4">
                    The league is known for its intense rivalries, passionate fanbases, and iconic stadiums. Matches between traditional rivals often attract global attention and are eagerly anticipated by football enthusiasts.
                </p>
                <p class="text-gray-500">
                    Off the field, the Premier League is also a commercial powerhouse, with lucrative broadcasting deals, sponsorships, and merchandising contributing to its financial success. The league's global appeal has helped it expand its reach to audiences around the world, further solidifying its status as one of the premier football competitions on the planet.
                </p>
                <p class="text-gray-500">
                    Off the field, the Premier League is also a commercial powerhouse, with lucrative broadcasting deals, sponsorships, and merchandising contributing to its financial success. The league's global appeal has helped it expand its reach to audiences around the world, further solidifying its status as one of the premier football competitions on the planet.
                </p>
                <p class="text-gray-500">
                    Off the field, the Premier League is also a commercial powerhouse, with lucrative broadcasting deals, sponsorships, and merchandising contributing to its financial success. The league's global appeal has helped it expand its reach to audiences around the world, further solidifying its status as one of the premier football competitions on the planet.
                </p>
            </div>
        </div>
    </div>

    <!-- Image Gallery Section -->
    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">Premier League Moments</span>
        <h2 class="text-4xl font-bold py-10">20 Teams In The Premier League</h2>
        <div class="flex flex-wrap justify-center">
            <!-- Add your gallery images with appropriate styling here -->
            <img src="https://wallpapercave.com/wp/wp13562342.jpg" alt="Gallery Image 1" class="w-32 h-32 rounded m-2">
            <img src="https://wallpapercave.com/wp/wp12653095.jpg" alt="Gallery Image 2" class="w-32 h-32 rounded m-2">
            <img src="https://wallpapercave.com/wp/wp9303880.jpg" alt="Gallery Image 3" class="w-32 h-32 rounded m-2">
            <img src="https://wallpapercave.com/wp/wp6014453.png" alt="Gallery Image 4" class="w-32 h-32 rounded m-2">
            <img src="https://wallpapercave.com/wp/wp8063261.jpg" alt="Gallery Image 5" class="w-32 h-32 rounded m-2">
            <img src="https://1000logos.net/wp-content/uploads/2018/06/Tottenham_Hotspur_Logo.png" alt="Gallery Image 6" class="w-32 h-32 rounded m-2">
            <img src="https://www.logo-designer.co/storage/2016/04/someone-2016-logo-design-aston-villa.png" alt="Gallery Image 7" class="w-32 h-32 rounded m-2">
            <img src="https://c4.wallpaperflare.com/wallpaper/799/58/330/soccer-west-ham-united-f-c-emblem-logo-hd-wallpaper-preview.jpg" alt="Gallery Image 8" class="w-32 h-32 rounded m-2">
            <img src="https://w0.peakpx.com/wallpaper/306/538/HD-wallpaper-brighton-hove-albion-football-club-premier-league-brighton-hove-united-kingdom-england-emblem-logo-english-football-club.jpg" alt="Gallery Image 9" class="w-32 h-32 rounded m-2">
            <img src="https://i.pinimg.com/564x/48/4a/7c/484a7c0cf5f7af885ba3f2e15c0a4130.jpg" alt="Gallery Image 10" class="w-32 h-32 rounded m-2">
            <img src="https://static.vecteezy.com/system/resources/previews/026/135/455/original/newcastle-united-club-logo-symbol-premier-league-football-abstract-design-illustration-with-black-background-free-vector.jpg" alt="Gallery Image 11" class="w-32 h-32 rounded m-2">
            <img src="https://images2.alphacoders.com/116/1165531.png" alt="Gallery Image 12" class="w-32 h-32 rounded m-2">
            <img src="https://i.pinimg.com/originals/69/cb/33/69cb33c1ca3d1c493fa39a684f452d33.png" alt="Gallery Image 13" class="w-32 h-32 rounded m-2">
            <img src="https://1000logos.net/wp-content/uploads/2018/06/crystal-palace-new-logo.jpg" alt="Gallery Image 14" class="w-32 h-32 rounded m-2">
            <img src="https://wallpapers.com/images/hd/everton-f-c-emblem-in-blue-0vho3ue1p5qcgt2p.jpg" alt="Gallery Image 15" class="w-32 h-32 rounded m-2">
            <img src="https://www.logodesignlove.com/images/sports/brentford-club-crest-01.jpg" alt="Gallery Image 16" class="w-32 h-32 rounded m-2">
            <img src="https://tristonrobinson.files.wordpress.com/2011/01/forest.jpg" alt="Gallery Image 17" class="w-32 h-32 rounded m-2">
            <img src="https://static.vecteezy.com/system/resources/previews/027/011/214/non_2x/luton-town-club-symbol-logo-premier-league-football-abstract-design-illustration-with-black-background-free-vector.jpg" alt="Gallery Image 18" class="w-32 h-32 rounded m-2">
            <img src="https://www.isportconnect.com/wp-content/uploads/2023/09/ogImage.png" alt="Gallery Image 19" class="w-32 h-32 rounded m-2">
            <img src="https://i.pinimg.com/originals/8f/d2/e4/8fd2e42b9c9d88401379c3d67e0f788c.png" alt="Gallery Image 20" class="w-32 h-32 rounded m-2">
            <!-- Add more images as needed -->
        </div>
    </div>

    <!-- Additional Content -->
    <div class="sm:w-3/4 mx-auto mt-10">
        <h2 class="text-3xl font-bold mb-6 text-center">Popular Blogs</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="border border-gray-300 p-6 rounded-lg flex flex-col">
                <img src="https://wallpapercave.com/wp/wp1830687.jpg" alt="Blog Image" class="rounded-lg mb-4">
                <div>
                    <h3 class="text-xl font-semibold mb-4">Blog Title 1</h3>
                    <p class="text-gray-600 leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tristique libero a elit fringilla, vitae ultricies urna fermentum.</p>
                    <a href="#" class="text-blue-500 mt-4 inline-block">Read More</a>
                </div>
            </div>
            <div class="border border-gray-300 p-6 rounded-lg flex flex-col">
                <img src="https://wallpapercave.com/wp/wp1830688.jpg" alt="Blog Image" class="rounded-lg mb-4">
                <div>
                    <h3 class="text-xl font-semibold mb-4">Blog Title 2</h3>
                    <p class="text-gray-600 leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tristique libero a elit fringilla, vitae ultricies urna fermentum.</p>
                    <a href="#" class="text-blue-500 mt-4 inline-block">Read More</a>
                </div>
            </div>
            <div class="border border-gray-300 p-6 rounded-lg flex flex-col">
                <img src="https://wallpapercave.com/wp/wp1830698.jpg" alt="Blog Image" class="rounded-lg mb-4">
                <div>
                    <h3 class="text-xl font-semibold mb-4">Blog Title 3</h3>
                    <p class="text-gray-600 leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tristique libero a elit fringilla, vitae ultricies urna fermentum.</p>
                    <a href="#" class="text-blue-500 mt-4 inline-block">Read More</a>
                </div>
            </div>
        </div>
        </div>

        <div class="container mx-auto">
            <h2 class="text-3xl font-bold mb-6 text-center">Community Involvement</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="border border-gray-300 p-6 rounded-lg">
                    <h3 class="text-xl font-semibold mb-4">Volunteer Initiatives</h3>
                    <p class="text-gray-600 leading-relaxed">Description of your organization's volunteer initiatives, such as community clean-up events, mentoring programs, or educational workshops.</p>
                </div>
                <div class="border border-gray-300 p-6 rounded-lg">
                    <h3 class="text-xl font-semibold mb-4">Charity Work</h3>
                    <p class="text-gray-600 leading-relaxed">Information about your organization's involvement in charity work, including partnerships with charitable organizations, fundraising campaigns, or donations.</p>
                </div>
                <div class="border border-gray-300 p-6 rounded-lg">
                    <h3 class="text-xl font-semibold mb-4">Sponsorships</h3>
                    <p class="text-gray-600 leading-relaxed">Details about sponsorships your organization has participated in, such as sponsoring local sports teams, community events, or educational programs.</p>
                </div>
                <div class="border border-gray-300 p-6 rounded-lg">
                    <h3 class="text-xl font-semibold mb-4">Community Events</h3>
                    <p class="text-gray-600 leading-relaxed">Highlights of community events your organization has organized or participated in, such as sports tournaments, festivals, or outreach programs.</p>
                </div>
            </div>
        </div>
        





        <div class="container mx-auto">
            <h2 class="text-3xl font-bold mb-6 text-center">History</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="border border-gray-300 p-6 rounded-lg flex flex-col">
                    <img src="https://ichef.bbci.co.uk/onesport/cps/624/cpsprodpb/4B4F/production/_103797291_pl-split.jpg" alt="History Image" class="rounded-lg mb-4">
                    <div>
                        <h3 class="text-xl font-semibold mb-4">Our Founding Story</h3>
                        <p class="text-gray-600 leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tristique libero a elit fringilla, vitae ultricies urna fermentum.</p>
                    </div>
                </div>
                <div class="border border-gray-300 p-6 rounded-lg flex flex-col">
                    <img src="https://d3j2s6hdd6a7rg.cloudfront.net/v2/uploads/media/default/0002/20/thumb_119543_default_news_size_5.jpeg" alt="Milestones Image" class="rounded-lg mb-4">
                    <div>
                        <h3 class="text-xl font-semibold mb-4">Major Milestones</h3>
                        <p class="text-gray-600 leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tristique libero a elit fringilla, vitae ultricies urna fermentum.</p>
                    </div>
                </div>
            </div>
        </div>
        






        <div class="container mx-auto">
            <h2 class="text-3xl font-bold mb-6 text-center">Social Media Links</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="border border-gray-300 p-6 rounded-lg">
                    <h3 class="text-xl font-semibold mb-4">Twitter</h3>
                    <p class="text-gray-600 leading-relaxed">Follow us on Twitter for the latest news and updates: <a href="https://twitter.com/your_twitter_handle" class="text-blue-500" target="_blank">@PremierLeague</a></p>
                </div>
                <div class="border border-gray-300 p-6 rounded-lg">
                    <h3 class="text-xl font-semibold mb-4">Facebook</h3>
                    <p class="text-gray-600 leading-relaxed">Like our Facebook page and join our community: <a href="https://www.facebook.com/your_facebook_page" class="text-blue-500" target="_blank">Premier League</a></p>
                </div>
                <div class="border border-gray-300 p-6 rounded-lg">
                    <h3 class="text-xl font-semibold mb-4">Instagram</h3>
                    <p class="text-gray-600 leading-relaxed">Follow us on Instagram for behind-the-scenes photos and more: <a href="https://www.instagram.com/your_instagram_handle" class="text-blue-500" target="_blank">@premierleague</a></p>
                </div>
                <div class="border border-gray-300 p-6 rounded-lg">
                    <h3 class="text-xl font-semibold mb-4">LinkedIn</h3>
                    <p class="text-gray-600 leading-relaxed">Connect with us on LinkedIn for professional updates: <a href="https://www.linkedin.com/company/your_linkedin_page" class="text-blue-500" target="_blank">PremierLeague</a></p>
                </div>
            </div>
        </div>
        
        
    </div>
@endsection


