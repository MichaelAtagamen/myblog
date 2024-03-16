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
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae enim nec urna bibendum ultrices.
                </p>
                <p class="text-gray-500 mb-4">
                    Nullam euismod urna eu ligula euismod, vel maximus metus tincidunt. Sed ut erat eget velit viverra euismod.
                </p>
                <p class="text-gray-500">
                    Proin aliquam arcu vel justo efficitur, at euismod quam ultrices. Duis vitae ante at justo aliquam auctor.
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
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae enim nec urna bibendum ultrices.
                </p>
                <p class="text-gray-500 mb-4">
                    Nullam euismod urna eu ligula euismod, vel maximus metus tincidunt. Sed ut erat eget velit viverra euismod.
                </p>
                <p class="text-gray-500">
                    Proin aliquam arcu vel justo efficitur, at euismod quam ultrices. Duis vitae ante at justo aliquam auctor.
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
            <img src="https://wallpapercave.com/wp/wp9303880.jpg" alt="Gallery Image 3" class="w-32 h-32 rounded m-2">
            <img src="https://wallpapercave.com/wp/wp9303880.jpg" alt="Gallery Image 3" class="w-32 h-32 rounded m-2">
            <img src="https://wallpapercave.com/wp/wp9303880.jpg" alt="Gallery Image 3" class="w-32 h-32 rounded m-2">
            <img src="https://wallpapercave.com/wp/wp9303880.jpg" alt="Gallery Image 3" class="w-32 h-32 rounded m-2">
            <img src="https://wallpapercave.com/wp/wp9303880.jpg" alt="Gallery Image 3" class="w-32 h-32 rounded m-2">
            <img src="https://wallpapercave.com/wp/wp9303880.jpg" alt="Gallery Image 3" class="w-32 h-32 rounded m-2">
            <img src="https://wallpapercave.com/wp/wp9303880.jpg" alt="Gallery Image 3" class="w-32 h-32 rounded m-2">
            <img src="https://wallpapercave.com/wp/wp9303880.jpg" alt="Gallery Image 3" class="w-32 h-32 rounded m-2">
            <img src="https://wallpapercave.com/wp/wp9303880.jpg" alt="Gallery Image 3" class="w-32 h-32 rounded m-2">
            <img src="https://wallpapercave.com/wp/wp9303880.jpg" alt="Gallery Image 3" class="w-32 h-32 rounded m-2">
            <img src="https://wallpapercave.com/wp/wp9303880.jpg" alt="Gallery Image 3" class="w-32 h-32 rounded m-2">
            <img src="https://wallpapercave.com/wp/wp9303880.jpg" alt="Gallery Image 3" class="w-32 h-32 rounded m-2">
            <img src="https://wallpapercave.com/wp/wp9303880.jpg" alt="Gallery Image 3" class="w-32 h-32 rounded m-2">
            <img src="https://wallpapercave.com/wp/wp9303880.jpg" alt="Gallery Image 3" class="w-32 h-32 rounded m-2">
            <img src="https://wallpapercave.com/wp/wp9303880.jpg" alt="Gallery Image 3" class="w-32 h-32 rounded m-2">
            <img src="https://wallpapercave.com/wp/wp9303880.jpg" alt="Gallery Image 3" class="w-32 h-32 rounded m-2">
            <img src="https://wallpapercave.com/wp/wp9303880.jpg" alt="Gallery Image 3" class="w-32 h-32 rounded m-2">
            <img src="https://wallpapercave.com/wp/wp9303880.jpg" alt="Gallery Image 3" class="w-32 h-32 rounded m-2">
            <img src="https://wallpapercave.com/wp/wp9303880.jpg" alt="Gallery Image 3" class="w-32 h-32 rounded m-2">
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
                    <img src="history_image.jpg" alt="History Image" class="rounded-lg mb-4">
                    <div>
                        <h3 class="text-xl font-semibold mb-4">Our Founding Story</h3>
                        <p class="text-gray-600 leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tristique libero a elit fringilla, vitae ultricies urna fermentum.</p>
                    </div>
                </div>
                <div class="border border-gray-300 p-6 rounded-lg flex flex-col">
                    <img src="milestones_image.jpg" alt="Milestones Image" class="rounded-lg mb-4">
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
                    <p class="text-gray-600 leading-relaxed">Follow us on Twitter for the latest news and updates: <a href="https://twitter.com/your_twitter_handle" class="text-blue-500" target="_blank">@your_twitter_handle</a></p>
                </div>
                <div class="border border-gray-300 p-6 rounded-lg">
                    <h3 class="text-xl font-semibold mb-4">Facebook</h3>
                    <p class="text-gray-600 leading-relaxed">Like our Facebook page and join our community: <a href="https://www.facebook.com/your_facebook_page" class="text-blue-500" target="_blank">Your Facebook Page</a></p>
                </div>
                <div class="border border-gray-300 p-6 rounded-lg">
                    <h3 class="text-xl font-semibold mb-4">Instagram</h3>
                    <p class="text-gray-600 leading-relaxed">Follow us on Instagram for behind-the-scenes photos and more: <a href="https://www.instagram.com/your_instagram_handle" class="text-blue-500" target="_blank">@your_instagram_handle</a></p>
                </div>
                <div class="border border-gray-300 p-6 rounded-lg">
                    <h3 class="text-xl font-semibold mb-4">LinkedIn</h3>
                    <p class="text-gray-600 leading-relaxed">Connect with us on LinkedIn for professional updates: <a href="https://www.linkedin.com/company/your_linkedin_page" class="text-blue-500" target="_blank">Your LinkedIn Page</a></p>
                </div>
            </div>
        </div>
        
        
    </div>
@endsection


