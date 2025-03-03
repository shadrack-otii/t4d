<footer class="bg-gray-900 text-gray-400 text-sm">
    <div class="max-w-6xl mx-auto px-2 py-6 flex flex-col md:flex-row justify-between items-center md:items-start">
        <!-- Logo Section -->
        <div class="flex items-center space-x-2 mb-4 md:mb-0 pr-5">
            <img src="{{ asset('front/assets/img/logo/t4d_full.png') }}" alt="Logo" class="h-20 object-contain self-start"> 
        </div>

        <!-- Links Section -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-5 text-center md:text-left">
            <div>
                <h3 class="text-white font-semibold mb-2">About T4D</h3>
                <ul>
                    <li><a href="{{ route('about') }}" class="hover:text-white">About</a></li>
                    <li><a href="{{ route('previousprojects') }}" class="hover:text-white">Previous Projects</a></li>
                    <li><a href="{{ route('clients') }}" class="hover:text-white">Our Alumni</a></li>
                    <li><a href="https://blog.indepthresearch.org/" target="_blank" class="hover:text-white">Our Blog</a></li>
                    <li><a href="{{ route('faqs') }}" class="hover:text-white">FAQs</a></li>


                </ul>
            </div>
            <div>
                <h3 class="text-white font-semibold mb-2">Important links</h3>
                <ul>
                    <li><a href="#" class="hover:text-white">Courses</a></li>
                    <li><a href="#" class="hover:text-white">Sectors</a></li>
                    <li><a href="#" class="hover:text-white">Tools</a></li>
                    <li><a href="#" class="hover:text-white">Modes</a></li>
                    <li><a href="#" class="hover:text-white">Case</a></li>
                    <li><a href="#" class="hover:text-white">Resources</a></li>



                </ul>
            </div>
            <div class="col-span-2">
                <h3 class="text-white font-semibold mb-2">Our services</h3>
                <ul style="list-style-type: disc;">
                    <li><a href="#" class="hover:text-white">Training</a></li>
                    <li><a href="#" class="hover:text-white">Device hiring</a></li>
                    <li><a href="#" class="hover:text-white">Advisory</a></li>
                    <li><a href="#" class="hover:text-white">Integration</a></li>
                    <li><a href="#" class="hover:text-white">Enumerator training</a></li>
                    <li><a href="#" class="hover:text-white">Implementation (Authoring, Server, Mobile)</a></li>
                    <li><a href="#" class="hover:text-white">Field officers’ management/Research assistants/Enumerators</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-white font-semibold mb-2">Follow Us</h3>
                <div class="flex justify-center md:justify-start space-x-4">
                    <a href="#" class="hover:text-white"><i class="fab fa-facebook"></i></a>
                    <a href="https://twitter.com/Indepthresearch" class="hover:text-white"><i class="fab fa-x"></i></a>
                    <a href="https://www.instagram.com/indepthresearchinstitute/" class="hover:text-white"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/company/indepth-research-services" class="hover:text-white"><i class="fab fa-linkedin"></i></a>
                    <a href="https://www.tiktok.com/@indepth_research" class="hover:text-white"><i class="fab fa-tiktok"></i></a>
                    <a href="https://www.youtube.com/@indepthresearchinstitute" class="hover:text-white"><i class="fab fa-youtube"></i></a>

                </div>
            </div>
        </div>

        <!-- Newsletter Section -->
        <div class="mt-6 md:mt-0 w-full md:w-1/4">
            <h3 class="text-white font-semibold mb-2">Subscribe to Our Newsletter</h3>
            <p class="text-gray-400 text-xs mb-2">Get the latest updates right in your inbox.</p>
            <form class="flex">
                <input type="email" placeholder="Your email" class="w-full px-3 py-2 text-gray-900 rounded-l-md focus:outline-none">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 px-4 py-2 text-white font-semibold rounded-r-md">
                    Subscribe
                </button>
            </form>
        </div>
    </div>

    <!-- Copyright -->
    <div class="text-center py-4 border-t border-blue-700">
        <p>© 2025 TechForDevelopment. All rights reserved.</p>
    </div>
</footer>
