<footer class="bg-[#04A753] text-white text-sm pt-6">

    
    <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-8 text-center md:text-left">
        <!-- Logo & Newsletter Section -->
        <div class="flex flex-col items-center md:items-start space-y-6">
            <img src="{{ asset('front/assets/img/logo/t4d_full.png') }}" alt="Logo" class="h-24 bg-white p-2 shadow-lg rounded-lg">
            <div>
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
        
        <!-- About Section -->
        <div>
            <h3 class="text-lg font-bold border-b-2 border-white pb-1 mb-3">About T4D</h3>
            <ul class="space-y-3">
                <li><a href="{{ route('about') }}" class="hover:text-green-300 transform hover:scale-105 transition duration-300">About</a></li>
                <li><a href="{{ route('previousprojects') }}" class="hover:text-green-300 transform hover:scale-105 transition duration-300">Previous Projects</a></li>
                <li><a href="{{ route('clients') }}" class="hover:text-green-300 transform hover:scale-105 transition duration-300">Our Alumni</a></li>
                <li><a href="https://blog.indepthresearch.org/" target="_blank" class="hover:text-green-300 transform hover:scale-105 transition duration-300">Our Blog</a></li>
                <li><a href="{{ route('faqs') }}" class="hover:text-green-300 transform hover:scale-105 transition duration-300">FAQs</a></li>
            </ul>
        </div>
        
        <!-- Services Section -->
        <div>
            <h3 class="text-lg font-bold border-b-2 border-white pb-1 mb-3">Our Services</h3>
            <ul class="space-y-3">
                <li><a href="#" class="hover:text-green-300 transform hover:scale-105 transition duration-300">Training</a></li>
                <li><a href="#" class="hover:text-green-300 transform hover:scale-105 transition duration-300">Device Hiring</a></li>
                <li><a href="#" class="hover:text-green-300 transform hover:scale-105 transition duration-300">Advisory</a></li>
                <li><a href="#" class="hover:text-green-300 transform hover:scale-105 transition duration-300">Integration</a></li>
                <li><a href="#" class="hover:text-green-300 transform hover:scale-105 transition duration-300">Enumerator Training</a></li>
                <li><a href="#" class="hover:text-green-300 transform hover:scale-105 transition duration-300">Implementation</a></li>
                <li><a href="#" class="hover:text-green-300 transform hover:scale-105 transition duration-300">Field Officers’ Management</a></li>
            </ul>
        </div>
        
        <!-- Important Links Section -->
        <div>
            <h3 class="text-lg font-bold border-b-2 border-white pb-1 mb-3">Important Links</h3>
            <ul class="space-y-3">
                <li><a href="#" class="hover:text-green-300 transform hover:scale-105 transition duration-300">Courses</a></li>
                <li><a href="#" class="hover:text-green-300 transform hover:scale-105 transition duration-300">Sectors</a></li>
                <li><a href="#" class="hover:text-green-300 transform hover:scale-105 transition duration-300">Tools</a></li>
                <li><a href="#" class="hover:text-green-300 transform hover:scale-105 transition duration-300">Modes</a></li>
                <li><a href="#" class="hover:text-green-300 transform hover:scale-105 transition duration-300">Case</a></li>
                <li><a href="#" class="hover:text-green-300 transform hover:scale-105 transition duration-300">Resources</a></li>
            </ul>
        </div>
    </div>
    
    <!-- Copyright with Social Media Icons -->
    <div class="bg-green-700 py-4 mt-6">
        <div class="max-w-6xl mx-auto px-4 flex flex-col md:flex-row justify-center items-center space-y-4 md:space-y-0 md:space-x-10">
            <p class="text-center">© 2025 TechForDevelopment. All rights reserved.</p>
            <div class="flex space-x-6 text-lg">
                <a href="https://www.facebook.com/t4dkenya" class="hover:text-green-300 transform hover:scale-110 transition duration-300"><i class="fab fa-facebook"></i></a>
                <a href="https://x.com/TechForDevelop1" class="hover:text-green-300 transform hover:scale-110 transition duration-300"><i class="fab fa-x"></i></a>
                <a href="https://www.instagram.com/techfordevelopment?igsh=MTk3anVocDJrMTV1ZA==" class="hover:text-green-300 transform hover:scale-110 transition duration-300"><i class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/company/tech-for-development-ltd/" class="hover:text-green-300 transform hover:scale-110 transition duration-300"><i class="fab fa-linkedin"></i></a>
                <a href="https://www.tiktok.com/@teefodeeacademy" class="hover:text-green-300 transform hover:scale-110 transition duration-300"><i class="fab fa-tiktok"></i></a>
            </div>
        </div>
    </div>

    {{-- blue line --}}
    <div class="bg-blue-700 p-3">
      </div>
      
  
</footer>
