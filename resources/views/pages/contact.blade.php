@extends('layouts.app')

@section('content')
    <!-- Contact Us Section -->
    <div class="contact-background grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Contact Us
                </h1>
                <a href="/blog" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Read More
                </a>
            </div>
        </div>
    </div>

    <!-- Contact Information Section -->
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://wallpapercave.com/wp/wp6944106.jpg" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Get in Touch with Us
            </h2>
            
            <p class="py-8 text-gray-500 text-s">
                Have questions, suggestions, or just want to say hi? Reach out to us through the contact details below.
            </p>

            <div class="py-4">
                <p class="font-bold text-gray-700">Email: contact@yourwebsite.com</p>
                <p class="font-bold text-gray-700">Phone: +1 (123) 456-7890</p>
                <p class="font-bold text-gray-700">Address: 123 Main Street, Cityville, Country</p>
            </div>

            <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Learn More
            </a>
        </div>
    </div>

    <!-- Expertise Section -->
    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l"> 
            We're Experts in...
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

    <!-- Blog Section -->
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

    <!-- PHP Section -->
    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    PHP
                </span>

                <h3 class="text-xl font-bold py-10">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas necessitatibus dolorum error culpa laboriosam. Enim voluptas earum repudiandae consequuntur ad? Expedita labore aspernatur facilis quasi ex? Nemo hic placeat et?
                </h3>

                <a href="" class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>
        <div>
            <img src="https://wallpapercave.com/wp/wp6944404.jpg" alt="">
        </div>

        <div class="container mx-auto flex flex-col items-center justify-center h-full">
            <h2 class="text-3xl font-bold mb-6">Contact Us</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="border border-gray-300 p-6 rounded-lg">
                    <form action="#" method="POST">
                        <div class="mb-4">
                            <label for="name" class="block text-gray-600 font-semibold mb-2">Name</label>
                            <input type="text" id="name" name="name" class="w-full border-gray-300 rounded-md p-2" required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-gray-600 font-semibold mb-2">Email</label>
                            <input type="email" id="email" name="email" class="w-full border-gray-300 rounded-md p-2" required>
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block text-gray-600 font-semibold mb-2">Message</label>
                            <textarea id="message" name="message" rows="4" class="w-full border-gray-300 rounded-md p-2" required></textarea>
                        </div>
                        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition duration-300">Submit</button>
                    </form>
                </div>
                <div class="border border-gray-300 p-6 rounded-lg">
                    <h3 class="text-xl font-semibold mb-4">Contact Information</h3>
                    <p class="text-gray-600 mb-2"><span class="font-semibold">Address:</span> 123 Street, City, Country</p>
                    <p class="text-gray-600 mb-2"><span class="font-semibold">Phone:</span> +123 456 789</p>
                    <p class="text-gray-600 mb-2"><span class="font-semibold">Email:</span> info@example.com</p>
                </div>
            </div>
        </div>
        
    </div>
@endsection
