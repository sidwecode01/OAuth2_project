<!-- <script setup>
    document.querySelector('[aria-controls="mobile-menu"]').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
            }
        });
</script> -->


<template>
    
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center">
                        <i class="fas fa-car text-blue-600 text-2xl mr-2"></i>
                        <span class="text-xl font-bold text-blue-600">AutoTrade</span>
                    </div>
                    <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                        <a href="#" class="border-blue-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Home</a>
                        <RouterLink to="/user"><button  class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">User</button></RouterLink>
                        <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Sell Your Car</a>
                        <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">About Us</a>
                    </div>
                </div>
                <div class="hidden sm:ml-6 sm:flex sm:items-center">
                    <RouterLink to="/login"><button href="#" class="border-blue-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Sign in</button></RouterLink>
                </div>
                <div class="-mr-2 flex items-center sm:hidden">
                    <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div class="sm:hidden hidden" id="mobile-menu">
            <div class="pt-2 pb-3 space-y-1">
                <a href="#" class="bg-blue-50 border-blue-500 text-blue-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Home</a>
                <a href="#" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Browse Cars</a>
                <a href="#" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Sell Your Car</a>
                <a href="#" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">About Us</a>
                <div class="mt-4 pl-3">
                    <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium">Sign In</button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="bg-blue-700 text-white">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8 lg:py-16">
            <div class="lg:grid lg:grid-cols-2 lg:gap-8 lg:items-center">
                <div>
                    <h1 class="text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl mb-4">
                        Find your perfect car
                    </h1>
                    <p class="text-xl text-blue-100 max-w-3xl">
                        Browse thousands of quality used cars from trusted sellers. Great prices and easy financing options available.
                    </p>
                    <div class="mt-8 flex flex-col sm:flex-row gap-4">
                        <button class="bg-white text-blue-700 px-6 py-3 rounded-md text-lg font-semibold hover:bg-blue-50 transition duration-300">Browse Inventory</button>
                        <button class="border-2 border-white text-white px-6 py-3 rounded-md text-lg font-semibold hover:bg-blue-800 transition duration-300">Sell Your Car</button>
                    </div>
                </div>
                <div class="mt-12 lg:mt-0">
                    <img src="https://images.unsplash.com/photo-1605559424843-9e4c228bf1c2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Car showcase" class="rounded-lg shadow-xl">
                </div>
            </div>
        </div>
    </div>

    <!-- Search Filters -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-10">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Make</label>
                    <select class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 p-2 border">
                        <option>All Makes</option>
                        <option>Toyota</option>
                        <option>Honda</option>
                        <option>Ford</option>
                        <option>BMW</option>
                        <option>Mercedes</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Model</label>
                    <select class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 p-2 border">
                        <option>All Models</option>
                        <option>Camry</option>
                        <option>Civic</option>
                        <option>F-150</option>
                        <option>3 Series</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Price Range</label>
                    <select class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 p-2 border">
                        <option>Any Price</option>
                        <option>Under $10,000</option>
                        <option>$10,000 - $20,000</option>
                        <option>$20,000 - $30,000</option>
                        <option>Over $30,000</option>
                    </select>
                </div>
                <div class="flex items-end">
                    <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-md">Search</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Cars -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-2xl font-bold text-gray-900">Featured Cars</h2>
            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">View All</a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Car Card 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1494976388531-d1058494cdd8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Ford Mustang" class="w-full h-48 object-cover">
                    <div class="absolute top-2 right-2 bg-blue-600 text-white text-xs font-bold px-2 py-1 rounded">Featured</div>
                </div>
                <div class="p-4">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-lg font-bold text-gray-900">2020 Ford Mustang GT</h3>
                            <p class="text-gray-600">Coupe • 15,000 mi</p>
                        </div>
                        <span class="text-lg font-bold text-blue-600">$32,999</span>
                    </div>
                    <div class="mt-4 flex justify-between text-sm text-gray-500">
                        <span><i class="fas fa-tachometer-alt mr-1"></i> 5.0L V8</span>
                        <span><i class="fas fa-car mr-1"></i> Automatic</span>
                        <span><i class="fas fa-gas-pump mr-1"></i> 18/25 mpg</span>
                    </div>
                    <button class="mt-4 w-full bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-md transition duration-300">View Details</button>
                </div>
            </div>

            <!-- Car Card 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Porsche 911" class="w-full h-48 object-cover">
                </div>
                <div class="p-4">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-lg font-bold text-gray-900">2019 Porsche 911 Carrera</h3>
                            <p class="text-gray-600">Coupe • 12,500 mi</p>
                        </div>
                        <span class="text-lg font-bold text-blue-600">$89,999</span>
                    </div>
                    <div class="mt-4 flex justify-between text-sm text-gray-500">
                        <span><i class="fas fa-tachometer-alt mr-1"></i> 3.0L Twin-Turbo</span>
                        <span><i class="fas fa-car mr-1"></i> PDK Automatic</span>
                        <span><i class="fas fa-gas-pump mr-1"></i> 20/27 mpg</span>
                    </div>
                    <button class="mt-4 w-full bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-md transition duration-300">View Details</button>
                </div>
            </div>

            <!-- Car Card 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1541899481282-d53bffe3c35d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Toyota RAV4" class="w-full h-48 object-cover">
                    <div class="absolute top-2 right-2 bg-green-600 text-white text-xs font-bold px-2 py-1 rounded">Certified</div>
                </div>
                <div class="p-4">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-lg font-bold text-gray-900">2021 Toyota RAV4 Hybrid</h3>
                            <p class="text-gray-600">SUV • 8,200 mi</p>
                        </div>
                        <span class="text-lg font-bold text-blue-600">$28,750</span>
                    </div>
                    <div class="mt-4 flex justify-between text-sm text-gray-500">
                        <span><i class="fas fa-tachometer-alt mr-1"></i> 2.5L Hybrid</span>
                        <span><i class="fas fa-car mr-1"></i> CVT Automatic</span>
                        <span><i class="fas fa-gas-pump mr-1"></i> 41/38 mpg</span>
                    </div>
                    <button class="mt-4 w-full bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-md transition duration-300">View Details</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Choose Us -->
    <div class="bg-gray-100 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-center text-gray-900 mb-12">Why Choose AutoTrade?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="bg-blue-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-shield-alt text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Verified Listings</h3>
                    <p class="text-gray-600">Every car goes through a 200-point inspection to ensure quality and reliability.</p>
                </div>
                <div class="text-center">
                    <div class="bg-blue-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-hand-holding-usd text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Best Prices</h3>
                    <p class="text-gray-600">We negotiate with dealers so you get the best possible price on your next car.</p>
                </div>
                <div class="text-center">
                    <div class="bg-blue-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-headset text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">24/7 Support</h3>
                    <p class="text-gray-600">Our customer service team is available anytime to answer your questions.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h2 class="text-2xl font-bold text-center text-gray-900 mb-12">What Our Customers Say</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="flex items-center mb-4">
                    <div class="text-yellow-400 mr-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span class="text-gray-600 text-sm">2 weeks ago</span>
                </div>
                <p class="text-gray-700 mb-4">"Found my dream car at a great price. The whole process was smooth and transparent. Highly recommend!"</p>
                <div class="flex items-center">
                    <img src="https://randomuser.me/api/portraits/women/43.jpg" alt="Sarah J." class="w-10 h-10 rounded-full mr-3">
                    <div>
                        <h4 class="font-medium text-gray-900">Sarah J.</h4>
                        <p class="text-sm text-gray-600">Los Angeles, CA</p>
                    </div>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="flex items-center mb-4">
                    <div class="text-yellow-400 mr-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span class="text-gray-600 text-sm">1 month ago</span>
                </div>
                <p class="text-gray-700 mb-4">"Sold my old car in just 3 days for more than I expected. The team was professional and helpful throughout."</p>
                <div class="flex items-center">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Michael T." class="w-10 h-10 rounded-full mr-3">
                    <div>
                        <h4 class="font-medium text-gray-900">Michael T.</h4>
                        <p class="text-sm text-gray-600">Chicago, IL</p>
                    </div>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="flex items-center mb-4">
                    <div class="text-yellow-400 mr-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <span class="text-gray-600 text-sm">3 months ago</span>
                </div>
                <p class="text-gray-700 mb-4">"Great selection of vehicles. Financing was easy to arrange and the delivery was right on time."</p>
                <div class="flex items-center">
                    <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Jennifer L." class="w-10 h-10 rounded-full mr-3">
                    <div>
                        <h4 class="font-medium text-gray-900">Jennifer L.</h4>
                        <p class="text-sm text-gray-600">Miami, FL</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="bg-blue-700 text-white">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-4">Ready to find your next car?</h2>
            <p class="text-xl text-blue-100 mb-8 max-w-3xl mx-auto">Join thousands of happy customers who found their perfect vehicle with AutoTrade.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <button class="bg-white text-blue-700 px-6 py-3 rounded-md text-lg font-semibold hover:bg-blue-50 transition duration-300">Browse Inventory</button>
                <button class="border-2 border-white text-white px-6 py-3 rounded-md text-lg font-semibold hover:bg-blue-800 transition duration-300">Contact Us</button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-lg font-semibold mb-4">AutoTrade</h3>
                    <p class="text-gray-400">The easiest way to buy and sell cars online. Quality vehicles at competitive prices.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Home</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Browse Cars</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Sell Your Car</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Financing</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Customer Service</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Contact Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">FAQs</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Privacy Policy</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Terms of Service</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Connect With Us</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="mt-4">
                        <p class="text-gray-400">Subscribe to our newsletter</p>
                        <div class="mt-2 flex">
                            <input type="email" placeholder="Your email" class="px-3 py-2 text-gray-900 rounded-l-md w-full">
                            <button class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-r-md"><i class="fas fa-paper-plane"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-12 pt-8 border-t border-gray-800 text-center text-gray-400 text-sm">
                <p>© 2023 AutoTrade. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Mobile menu toggle script -->
    
</body>

</template>
