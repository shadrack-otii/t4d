<footer class="bg-green-600 text-white text-sm py-6">
    <div class="max-w-6xl mx-auto px-4 flex flex-col md:flex-row justify-between">
        <!-- Logo Section -->
        <div class="flex items-center justify-center md:justify-start space-x-3 mb-6 md:mb-0 pr-10">
            <img src="{{ asset('front/assets/img/logo/t4d_full.png') }}" alt="Logo" class="h-24 bg-white p-2 shadow-lg rounded-lg">
        </div>

        <!-- Links Section -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 text-center md:text-left">
            <div>
                <h3 class="text-lg font-bold border-b-2 border-white pb-1 mb-3">About T4D</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('about') }}" class="hover:text-green-300 transform hover:scale-105 transition duration-300">About</a></li>
                    <li><a href="{{ route('previousprojects') }}" class="hover:text-green-300 transform hover:scale-105 transition duration-300">Previous Projects</a></li>
                    <li><a href="{{ route('clients') }}" class="hover:text-green-300 transform hover:scale-105 transition duration-300">Our Alumni</a></li>
                    <li><a href="https://blog.indepthresearch.org/" target="_blank" class="hover:text-green-300 transform hover:scale-105 transition duration-300">Our Blog</a></li>
                    <li><a href="{{ route('faqs') }}" class="hover:text-green-300 transform hover:scale-105 transition duration-300">FAQs</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-bold border-b-2 border-white pb-1 mb-3">Important Links</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-green-300 transform hover:scale-105 transition duration-300">Courses</a></li>
                    <li><a href="#" class="hover:text-green-300 transform hover:scale-105 transition duration-300">Sectors</a></li>
                    <li><a href="#" class="hover:text-green-300 transform hover:scale-105 transition duration-300">Tools</a></li>
                    <li><a href="#" class="hover:text-green-300 transform hover:scale-105 transition duration-300">Modes</a></li>
                    <li><a href="#" class="hover:text-green-300 transform hover:scale-105 transition duration-300">Case</a></li>
                    <li><a href="#" class="hover:text-green-300 transform hover:scale-105 transition duration-300">Resources</a></li>
                </ul>
            </div>
            <div class="col-span-1 sm:col-span-2">
                <h3 class="text-lg font-bold border-b-2 border-white pb-1 mb-3">Our Services</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-green-300 transform hover:scale-105 transition duration-300">Training</a></li>
                    <li><a href="#" class="hover:text-green-300 transform hover:scale-105 transition duration-300">Device Hiring</a></li>
                    <li><a href="#" class="hover:text-green-300 transform hover:scale-105 transition duration-300">Advisory</a></li>
                    <li><a href="#" class="hover:text-green-300 transform hover:scale-105 transition duration-300">Integration</a></li>
                    <li><a href="#" class="hover:text-green-300 transform hover:scale-105 transition duration-300">Enumerator Training</a></li>
                    <li><a href="#" class="hover:text-green-300 transform hover:scale-105 transition duration-300">Implementation</a></li>
                    <li><a href="#" class="hover:text-green-300 transform hover:scale-105 transition duration-300">Field Officers’ Management</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-bold border-b-2 border-white pb-1 mb-3">Follow Us</h3>
                <div class="flex justify-center md:justify-start space-x-4 text-lg">
                    <a href="#" class="hover:text-green-300 transform hover:scale-110 transition duration-300"><i class="fab fa-facebook"></i></a>
                    <a href="https://twitter.com/Indepthresearch" class="hover:text-green-300 transform hover:scale-110 transition duration-300"><i class="fab fa-x"></i></a>
                    <a href="https://www.instagram.com/indepthresearchinstitute/" class="hover:text-green-300 transform hover:scale-110 transition duration-300"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/company/indepth-research-services" class="hover:text-green-300 transform hover:scale-110 transition duration-300"><i class="fab fa-linkedin"></i></a>
                    <a href="https://www.tiktok.com/@indepth_research" class="hover:text-green-300 transform hover:scale-110 transition duration-300"><i class="fab fa-tiktok"></i></a>
                    <a href="https://www.youtube.com/@indepthresearchinstitute" class="hover:text-green-300 transform hover:scale-110 transition duration-300"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>

        <!-- Newsletter Section -->
        <div class="mt-6 md:mt-0 w-full md:w-1/3">
            <h3 class="text-lg font-bold border-b-2 border-white pb-1 mb-3">Subscribe to Our Newsletter</h3>
            <p class="text-gray-200 text-xs mb-3">Get the latest updates right in your inbox.</p>
            <form class="flex">
                <input type="email" placeholder="Your email" class="w-full px-3 py-2 text-gray-900 rounded-l-md focus:outline-none">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 px-4 py-2 text-white font-semibold rounded-r-md transition duration-300">
                    Subscribe
                </button>
            </form>
        </div>
    </div>

    <!-- Copyright -->
    <div class="text-center py-4 bg-green-700">
        <p>© 2025 TechForDevelopment. All rights reserved.</p>
    </div>
</footer>
