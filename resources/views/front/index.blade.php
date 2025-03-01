@extends('front.Projects.master')
@section('content')

hello world
<div class="relative w-full h-96 md:h-[500px] overflow-hidden">
    <div class="absolute inset-0 flex transition-transform duration-500 ease-in-out" id="simple-slider">
  
      <div class="min-w-full h-full relative">
        <img src="images/415907_1716558858.webp" alt="Nature" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center p-8">
          <div class="text-center text-white">
            <h2 class="text-3xl md:text-4xl font-semibold mb-4">Explore Nature's Beauty</h2>
            <p class="text-lg md:text-xl mb-6">Discover breathtaking landscapes and serene environments.</p>
            <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Explore More</a>
          </div>
        </div>
      </div>
  
      <div class="min-w-full h-full relative">
        <img src="images/Service_4.webp" alt="City" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center p-8">
          <div class="text-center text-white">
            <h2 class="text-3xl md:text-4xl font-semibold mb-4">Urban Adventures Await</h2>
            <p class="text-lg md:text-xl mb-6">Experience the vibrant life of the city.</p>
            <a href="#" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Explore More</a>
          </div>
        </div>
      </div>
  
      <div class="min-w-full h-full relative">
        <img src="https://source.unsplash.com/1920x1080/?technology" alt="Technology" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center p-8">
          <div class="text-center text-white">
            <h2 class="text-3xl md:text-4xl font-semibold mb-4">Innovate with Technology</h2>
            <p class="text-lg md:text-xl mb-6">Dive into the world of innovation.</p>
            <a href="#" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Explore More</a>
          </div>
        </div>
      </div>
  
    </div>
  
    <div class="absolute top-1/2 transform -translate-y-1/2 w-full flex justify-between px-4">
      <button class="bg-gray-800 bg-opacity-50 text-white p-2 rounded-full" id="prev-btn">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
      </button>
      <button class="bg-gray-800 bg-opacity-50 text-white p-2 rounded-full" id="next-btn">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
      </button>
    </div>
  </div>
  
  <script>
    const slider = document.getElementById('simple-slider');
    const slides = document.querySelectorAll('#simple-slider > div');
    const prevBtn = document.getElementById('prev-btn');
    const nextBtn = document.getElementById('next-btn');
    let currentSlide = 0;
  
    function showSlide(index) {
      if (index < 0) {
        currentSlide = slides.length - 1;
      } else if (index >= slides.length) {
        currentSlide = 0;
      } else {
        currentSlide = index;
      }
      slider.style.transform = `translateX(-${currentSlide * 100}%)`;
    }
  
    prevBtn.addEventListener('click', () => {
      showSlide(currentSlide - 1);
    });
  
    nextBtn.addEventListener('click', () => {
      showSlide(currentSlide + 1);
    });
  
    // Optional: Auto-slide
    setInterval(() => {
      showSlide(currentSlide + 1);
    }, 4000); // Change slide every 4 seconds
  </script>

@endsection