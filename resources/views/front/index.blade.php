@extends('front.Projects.master')
@section('content')
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

  <style>
    /* Glassmorphism Effect */
    .glass {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(8px);
        border-radius: 10px;
        border: 1px solid rgba(255, 255, 255, 0.2);
        box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.2);
    }
    /* Neon Glow Effect */
    .neon {
        text-shadow: 0 0 5px rgba(255, 255, 255, 0.6);
    }
</style>

<div class="w-full py-16 flex justify-center">
  <div class="flex justify-around items-center gap-4 w-[90%] overflow-x-auto">
      <div class="glass p-4 w-28 text-center transition-all duration-500 counter-box opacity-0 transform scale-95">
          <h2 class="text-xl lg:text-2xl font-bold neon counter" data-target="999">0</h2>
          <p class="text-sm text-gray-900 mt-1">Consultancy Areas</p>
      </div>

      <div class="glass p-4 w-28 text-center transition-all duration-500 counter-box opacity-0 transform scale-95">
          <h2 class="text-xl lg:text-2xl font-bold neon counter" data-target="85">0</h2>
          <p class="text-sm text-gray-900 mt-1">Clients</p>
      </div>

      <div class="glass p-4 w-28 text-center transition-all duration-500 counter-box opacity-0 transform scale-95">
          <h2 class="text-xl lg:text-2xl font-bold neon counter" data-target="10">0</h2>
          <p class="text-sm text-gray-900 mt-1">Awards</p>
      </div>

      <div class="glass p-4 w-28 text-center transition-all duration-500 counter-box opacity-0 transform scale-95">
          <h2 class="text-xl lg:text-2xl font-bold neon counter" data-target="50">0</h2>
          <p class="text-sm text-gray-900 mt-1">Employees</p>
      </div>

      <div class="glass p-4 w-28 text-center transition-all duration-500 counter-box opacity-0 transform scale-95">
          <h2 class="text-xl lg:text-2xl font-bold neon counter" data-target="15">0</h2>
          <p class="text-sm text-gray-900 mt-1">Countries</p>
      </div>

      <div class="glass p-4 w-28 text-center transition-all duration-500 counter-box opacity-0 transform scale-95">
          <h2 class="text-xl lg:text-2xl font-bold neon counter" data-target="5">0</h2>
          <p class="text-sm text-gray-900 mt-1">Offices</p>
      </div>
  </div>
</div>

<script>
  function startCounting() {
      const counters = document.querySelectorAll(".counter");
      counters.forEach(counter => {
          let target = +counter.getAttribute("data-target");
          let count = 0;
          let increment = Math.ceil(target / 80);

          function updateCounter() {
              if (count < target) {
                  count += increment;
                  counter.textContent = count;
                  setTimeout(updateCounter, 12);
              } else {
                  counter.textContent = target + "+";
              }
          }
          updateCounter();
      });
  }

  function resetAnimation() {
      const counterBoxes = document.querySelectorAll(".counter-box");
      counterBoxes.forEach(box => {
          box.style.transition = "opacity 0.3s ease-in-out, transform 0.3s ease-in-out";
          box.classList.remove("opacity-100", "scale-100");
          box.classList.add("opacity-0", "scale-95");
      });
      setTimeout(() => {
          counterBoxes.forEach(box => {
              box.style.transition = "opacity 0.5s ease-out, transform 0.5s ease-out";
              box.classList.remove("opacity-0", "scale-95");
              box.classList.add("opacity-100", "scale-100");
          });
          startCounting();
      }, 300);
  }

  // Trigger animation on page load
  window.addEventListener('load', () => {
      resetAnimation();
  });
</script>

<section class="bg-gray-100 py-16">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl font-semibold text-gray-800 mb-6 text-center">Courses</h2>
    <p class="text-gray-600 text-center mb-8">
      Discover a wide range of courses crafted to enhance your skills and accelerate your career.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      <a
        href="/software-tech-courses"
        class="block bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2 hover:bg-blue-500"
      >
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Software and Tech</h3>
        <p class="text-gray-600">
          Explore courses in programming, web development, cybersecurity, and more.
        </p>
      </a>

      <a
        href="/ecommerce-courses"
        class="block bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2 hover:bg-blue-500"
      >
        <h3 class="text-xl font-semibold text-gray-800 mb-4">E-Commerce</h3>
        <p class="text-gray-600">
          Learn how to build and manage successful online stores and businesses.
        </p>
      </a>

      <a
        href="/elearning-courses"
        class="block bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2 hover:bg-blue-500"
      >
        <h3 class="text-xl font-semibold text-gray-800 mb-4">E-Learning</h3>
        <p class="text-gray-600">
          Discover how to create and deliver engaging online educational content.
        </p>
      </a>

      <a
        href="/data-services-courses"
        class="block bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2 hover:bg-blue-500"
      >
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Data Services</h3>
        <p class="text-gray-600">
          Gain expertise in data analytics, data science, and database management.
        </p>
      </a>
    </div>
  </div>
</section>


<section class="bg-gray-100 py-10">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl font-semibold text-gray-800 mb-8 text-center">Our Services</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
        <img src="images/0x0.webp" alt="Service 1" class="w-full h-36 object-cover object-center">
        <div class="p-4">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">Web Development</h3>
          <p class="text-gray-600 text-sm">
            We build responsive and scalable websites tailored to your business needs.
          </p>
          <a href="/web-development" class="mt-2 inline-block bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg transition-colors duration-300 text-sm">Learn More</a>
        </div>
      </div>

      <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
        <img src="images/0x0.webp" alt="Service 2" class="w-full h-36 object-cover object-center">
        <div class="p-4">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">Digital Marketing</h3>
          <p class="text-gray-600 text-sm">
            Boost your online presence and reach your target audience with our digital marketing strategies.
          </p>
          <a href="/digital-marketing" class="mt-2 inline-block bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg transition-colors duration-300 text-sm">Learn More</a>
        </div>
      </div>

      <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
        <img src="images/0x0.webp" alt="Service 3" class="w-full h-36 object-cover object-center">
        <div class="p-4">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">Data Analytics</h3>
          <p class="text-gray-600 text-sm">
            Gain valuable insights from your data to make informed business decisions.
          </p>
          <a href="/data-analytics" class="mt-2 inline-block bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg transition-colors duration-300 text-sm">Learn More</a>
        </div>
      </div>
      <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
        <img src="images/0x0.webp" alt="Service 4" class="w-full h-36 object-cover object-center">
        <div class="p-4">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">Cloud Solutions</h3>
          <p class="text-gray-600 text-sm">
            Scalable cloud solutions that will help your business grow.
          </p>
          <a href="/cloud-solutions" class="mt-2 inline-block bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg transition-colors duration-300 text-sm">Learn More</a>
        </div>
      </div>
      <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
        <img src="images/0x0.webp" alt="Service 5" class="w-full h-36 object-cover object-center">
        <div class="p-4">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">Mobile App Development</h3>
          <p class="text-gray-600 text-sm">
            Mobile apps for IOS and Android.
          </p>
          <a href="/mobile-app-development" class="mt-2 inline-block bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg transition-colors duration-300 text-sm">Learn More</a>
        </div>
      </div>
      <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
        <img src="images/0x0.webp" alt="Service 6" class="w-full h-36 object-cover object-center">
        <div class="p-4">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">SEO</h3>
          <p class="text-gray-600 text-sm">
            Increase your search engine ranking.
          </p>
          <a href="/seo" class="mt-2 inline-block bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg transition-colors duration-300 text-sm">Learn More</a>
        </div>
      </div>
    </div>
  </div>
</section>







  
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


<section class="py-16 bg-gray-100">
  <div class="container mx-auto text-center">
      <h2 class="text-3xl font-semibold mb-8">Our Previous Clients</h2>

      <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6 justify-items-center">

          <div class="p-4 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
              <img src="logos/kpalogo.jpg" alt="Client 1 Logo" class="max-h-16 max-w-full object-contain">
          </div>

          <div class="p-4 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
              <img src="logos/enplogo.jpg" alt="Client 2 Logo" class="max-h-16 max-w-full object-contain">
          </div>

          <div class="p-4 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
              <img src="client-logo-3.png" alt="Client 3 Logo" class="max-h-16 max-w-full object-contain">
          </div>

          <div class="p-4 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
              <img src="client-logo-4.png" alt="Client 4 Logo" class="max-h-16 max-w-full object-contain">
          </div>

          <div class="p-4 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
              <img src="client-logo-5.png" alt="Client 5 Logo" class="max-h-16 max-w-full object-contain">
          </div>

          <div class="p-4 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
              <img src="client-logo-6.png" alt="Client 6 Logo" class="max-h-16 max-w-full object-contain">
          </div>

          <div class="p-4 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
            <img src="client-logo-5.png" alt="Client 5 Logo" class="max-h-16 max-w-full object-contain">
        </div>

        <div class="p-4 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
            <img src="client-logo-6.png" alt="Client 6 Logo" class="max-h-16 max-w-full object-contain">
        </div>
        

          </div>
  </div>
</section>

@endsection

