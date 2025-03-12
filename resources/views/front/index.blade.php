@extends('front.Projects.master')
@section('content')

<section class="bg-gray-100 px-2 py-2">

    <div class="relative w-full h-72 md:h-[400px] overflow-hidden rounded-lg">
        <div class="absolute inset-0 flex transition-transform duration-500 ease-in-out" id="simple-slider">
    
            <div class="min-w-full flex md:flex-row">
                <div class="md:w-1/2 flex items-center justify-center p-8">
                    <div class="text-center text-black max-w-2xl bg-white p-6 rounded-lg shadow-md">
                        <h2 class="bg-green-500 text-white text-xl md:text-2xl font-semibold mb-4 drop-shadow-lg p-2 rounded-lg">
                            Data Training and Capacity Building
                        </h2>                        
                        <p class="text-lg [font-size:18px] mb-6 drop-shadow-lg">Unlock real-time insights and gain a competitive edge with expert-led, tailored training in data collection, management, analysis, visualization, and mapping.</p>
                        <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow-md">Explore More</a>
                    </div>
                </div>
                <div class="md:w-1/2 h-full relative">
                    <img src="images/dataminingimage1.jpg" alt="Nature" class="absolute inset-0 w-full h-full object-cover rounded-lg">
                </div>
            </div>
    
            <div class="min-w-full flex md:flex-row">
                <div class="md:w-1/2 flex items-center justify-center p-8">
                    <div class="text-center text-black max-w-2xl bg-white p-6 rounded-lg shadow-md">
                        <h2 class="bg-green-500 text-white text-xl md:text-2xl font-semibold mb-4 drop-shadow-lg p-2 rounded-lg">
                            Digital Marketing Training and Capacity Building
                        </h2>
                         <p class="text-lg [font-size:18px] mb-6 drop-shadow-lg">Amplify brand awareness, drive conversions, boost sales, and grow your business with customized, expert-led training in key digital marketing channels.</p>
                        <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow-md">Explore More</a>
                    </div>
                </div>
                <div class="md:w-1/2 h-full relative">
                    <img src="images/dmimage2.webp" alt="City" class="absolute inset-0 w-full h-full object-cover rounded-lg">
                </div>
            </div>
    
            <div class="min-w-full flex md:flex-row">
                <div class="md:w-1/2 flex items-center justify-center p-8">
                    <div class="text-center text-black max-w-2xl bg-white p-6 rounded-lg shadow-md">
                        <h2 class="bg-green-500 text-white text-xl md:text-2xl font-semibold mb-4 drop-shadow-lg p-2 rounded-lg">
                            Mobile Data Collection Consultancy
                        </h2>
                         <p class="text-lg [font-size:18px] mb-6 drop-shadow-lg">Attain peak efficiency and project success through the expert implementation of mobile data collection tools like ODK, KoBoToolBox, and SurveyCTO.</p>
                        <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow-md">Explore More</a>
                    </div>
                </div>
                <div class="md:w-1/2 h-full relative">
                    <img src="images/mdcimage.webp" alt="Technology" class="absolute inset-0 w-full h-full object-cover rounded-lg">
                </div>
            </div>
    
            <div class="min-w-full flex md:flex-row">
                <div class="md:w-1/2 flex items-center justify-center p-8">
                    <div class="text-center text-black max-w-2xl bg-white p-6 rounded-lg shadow-md">
                        <h2 class="bg-green-500 text-white text-xl md:text-2xl font-semibold mb-4 drop-shadow-lg p-2 rounded-lg">
                            E-Learning System Development and Implementation</h2>   
                         <p class="text-lg [font-size:18px] mb-6 drop-shadow-lg">Secure the best training platform with flexible e-learning systems offering diverse training formats and pathways that adapt to learners' evolving needs.</p>
                        <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow-md">Explore More</a>
                    </div>
                </div>
                <div class="md:w-1/2 h-full relative">
                    <img src="images/elearning.webp" alt="Technology" class="absolute inset-0 w-full h-full object-cover rounded-lg">
                </div>
            </div>
    
            <div class="min-w-full flex md:flex-row">
                <div class="md:w-1/2 flex items-center justify-center p-8">
                    <div class="text-center text-black max-w-2xl bg-white p-6 rounded-lg shadow-md">
                        <h2 class="bg-green-500 text-white text-xl md:text-2xl font-semibold mb-4 drop-shadow-lg p-2 rounded-lg">
                            Business Processes Automation Consultancy
                        </h2>
                        <p class="text-lg [font-size:18px] mb-6 drop-shadow-lg">Hit your sales targets through automated workflows and streamlined tasks, maximizing efficiency every step of the way.</p>
                        <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow-md">Explore More</a>
                    </div>
                </div>
                <div class="md:w-1/2 h-full relative">
                    <img src="images/bpa.webp" alt="Nature" class="absolute inset-0 w-full h-full object-cover rounded-lg">
                </div>
            </div>
    
        </div>
    
        <div class="absolute top-1/2 transform -translate-y-1/2 w-full flex justify-between px-4">
            <button class="bg-blue-500 bg-opacity-50 text-white p-2 rounded-full" id="prev-btn">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <button class="bg-blue-500 bg-opacity-50 text-white p-2 rounded-full" id="next-btn">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>
    
    </div>
 </section> 

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

<div class="w-full py-16 flex justify-center bg-gray-100">
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


<section class="bg-gray-100 py-12 px-20">
    <div class="container mx-auto px-4 lg:px-8">
         <h2 class="text-2xl font-semibold text-center mb-6 text-gray-800">Explore Our Courses</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <div class="bg-white rounded-md shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 mx-2"> <img src="https://source.unsplash.com/random/400x250/?coding" alt="Course Image" class="w-full h-32 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold mb-1 text-gray-800">Web Dev</h3>
            <p class="text-sm text-gray-600 mb-2">Build apps.</p>
            <span class="text-sm font-semibold text-blue-600">$199</span>
          </div>
        </div>
  
        <div class="bg-white rounded-md shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 mx-2">
          <img src="https://source.unsplash.com/random/400x250/?design" alt="Course Image" class="w-full h-32 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold mb-1 text-gray-800">UI/UX</h3>
            <p class="text-sm text-gray-600 mb-2">User design.</p>
            <span class="text-sm font-semibold text-blue-600">$149</span>
          </div>
        </div>
  
        <div class="bg-white rounded-md shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 mx-2">
          <img src="https://source.unsplash.com/random/400x250/?marketing" alt="Course Image" class="w-full h-32 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold mb-1 text-gray-800">Marketing</h3>
            <p class="text-sm text-gray-600 mb-2">Digital ads.</p>
            <span class="text-sm font-semibold text-blue-600">$249</span>
          </div>
        </div>
  
        <div class="bg-white rounded-md shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 mx-2">
          <img src="https://source.unsplash.com/random/400x250/?python" alt="Course Image" class="w-full h-32 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold mb-1 text-gray-800">Python</h3>
            <p class="text-sm text-gray-600 mb-2">Programming.</p>
            <span class="text-sm font-semibold text-blue-600">$299</span>
          </div>
        </div>
  
        <div class="bg-white rounded-md shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 mx-2">
          <img src="https://source.unsplash.com/random/400x250/?photography" alt="Course Image" class="w-full h-32 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold mb-1 text-gray-800">Photo</h3>
            <p class="text-sm text-gray-600 mb-2">Capture moments.</p>
            <span class="text-sm font-semibold text-blue-600">$179</span>
          </div>
        </div>
  
        <div class="bg-white rounded-md shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 mx-2">
          <img src="https://source.unsplash.com/random/400x250/?data" alt="Course Image" class="w-full h-32 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold mb-1 text-gray-800">Data</h3>
            <p class="text-sm text-gray-600 mb-2">Analyze data.</p>
            <span class="text-sm font-semibold text-blue-600">$229</span>
          </div>
        </div>
  
        <div class="bg-white rounded-md shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 mx-2">
          <img src="https://source.unsplash.com/random/400x250/?writing" alt="Course Image" class="w-full h-32 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold mb-1 text-gray-800">Writing</h3>
            <p class="text-sm text-gray-600 mb-2">Creative prose.</p>
            <span class="text-sm font-semibold text-blue-600">$169</span>
          </div>
        </div>
  
        <div class="bg-white rounded-md shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 mx-2">
          <img src="https://source.unsplash.com/random/400x250/?music" alt="Course Image" class="w-full h-32 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold mb-1 text-gray-800">Music</h3>
            <p class="text-sm text-gray-600 mb-2">Play an instrument.</p>
            <span class="text-sm font-semibold text-blue-600">$189</span>
          </div>
        </div>
      </div>
    </div>
  </section>

<section class="bg-gray-100 py-16">
  <div class="container mx-auto px-4">
      <h2 class="text-3xl font-semibold text-gray-800 mb-6 text-center">Course Categories</h2>
      <p class="text-gray-600 text-center mb-8">
          Discover a wide range of courses crafted to enhance your skills and accelerate your career.
      </p>

      <div class="flex flex-wrap justify-center gap-6">
          <a
              href="/software-tech-courses"
              class="block bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2 hover:bg-blue-500 w-80"
          >
              <h3 class="text-xl font-semibold text-gray-800 mb-4">Software and Tech</h3>
              <p class="text-gray-600">
                  Explore courses in programming, web development, cybersecurity, and more.
              </p>
          </a>
          <a
          href="/software-tech-courses"
          class="block bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2 hover:bg-blue-500 w-80"
      >
          <h3 class="text-xl font-semibold text-gray-800 mb-4">Software and Tech</h3>
          <p class="text-gray-600">
              Explore courses in programming, web development, cybersecurity, and more.
          </p>
      </a>
      <a
      href="/software-tech-courses"
      class="block bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2 hover:bg-blue-500 w-80"
  >
      <h3 class="text-xl font-semibold text-gray-800 mb-4">Software and Tech</h3>
      <p class="text-gray-600">
          Explore courses in programming, web development, cybersecurity, and more.
      </p>
  </a>

          <a
              href="/ecommerce-courses"
              class="block bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2 hover:bg-blue-500 w-80"
          >
              <h3 class="text-xl font-semibold text-gray-800 mb-4">E-Commerce</h3>
              <p class="text-gray-600">
                  Learn how to build and manage successful online stores and businesses.
              </p>
          </a>

          <a
              href="/elearning-courses"
              class="block bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2 hover:bg-blue-500 w-80"
          >
              <h3 class="text-xl font-semibold text-gray-800 mb-4">E-Learning</h3>
              <p class="text-gray-600">
                  Discover how to create and deliver engaging online educational content.
              </p>
          </a>

          <a
              href="/data-services-courses"
              class="block bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2 hover:bg-blue-500 w-80"
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

      <div class="flex flex-wrap justify-center gap-6">
          <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 w-80">
              <img src="images/0x0.webp" alt="Service 1" class="w-full h-36 object-cover object-center">
              <div class="p-4">
                  <h3 class="text-lg font-semibold text-gray-800 mb-2">Data Training and Capacity Building</h3>
                  <p class="text-gray-600 text-sm">
                    Achieve data excellence and stay ahead of the competition with tailored, expert-led training and capacity building in data collection, management, analysis, visualization, and mapping
                  </p>
                  <a href="/web-development" class="mt-2 inline-block bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg transition-colors duration-300 text-sm">Learn More</a>
              </div>
          </div>

          <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 w-80">
              <img src="images/0x0.webp" alt="Service 2" class="w-full h-36 object-cover object-center">
              <div class="p-4">
                  <h3 class="text-lg font-semibold text-gray-800 mb-2">Digital Marketing Training and Capacity Building</h3>
                  <p class="text-gray-600 text-sm">
                    Amplify brand awareness, drive conversions, boost sales, and accelerate business growth with customized, expert-led training and capacity building in key digital marketing channels.
                  </p>
                  <a href="/digital-marketing" class="mt-2 inline-block bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg transition-colors duration-300 text-sm">Learn More</a>
              </div>
          </div>

          <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 w-80">
              <img src="images/0x0.webp" alt="Service 3" class="w-full h-36 object-cover object-center">
              <div class="p-4">
                  <h3 class="text-lg font-semibold text-gray-800 mb-2">Mobile Data Collection Consultancy.
                </h3>
                  <p class="text-gray-600 text-sm">
                    Attain peak efficiency and project success with the expert implementation of mobile data collection tools like ODK, KoBoToolBox, and SurveyCTO.

                </p>
                  <a href="/data-analytics" class="mt-2 inline-block bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg transition-colors duration-300 text-sm">Learn More</a>
              </div>
          </div>

          <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 w-80">
              <img src="images/0x0.webp" alt="Service 4" class="w-full h-36 object-cover object-center">
              <div class="p-4">
                  <h3 class="text-lg font-semibold text-gray-800 mb-2">E-Learning System Development and Implementation.</h3>
                  <p class="text-gray-600 text-sm">
                    Secure the best training platform with powerful e-learning systems offering diverse training formats and flexible pathways that adapt to learners' evolving needs.
                  </p>
                  <a href="/cloud-solutions" class="mt-2 inline-block bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg transition-colors duration-300 text-sm">Learn More</a>
              </div>
          </div>

          <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 w-80">
              <img src="images/0x0.webp" alt="Service 5" class="w-full h-36 object-cover object-center">
              <div class="p-4">
                  <h3 class="text-lg font-semibold text-gray-800 mb-2">Business Processes Automation Consultancy.</h3>
                  <p class="text-gray-600 text-sm">
                    Hit your sales targets through expertly implemented automated workflows, cutting manual tasks and maximizing efficiency.


                  </p>
                  <a href="/mobile-app-development" class="mt-2 inline-block bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg transition-colors duration-300 text-sm">Learn More</a>
              </div>
          </div>

          <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 w-80">
              <img src="images/0x0.webp" alt="Service 6" class="w-full h-36 object-cover object-center">
              <div class="p-4">
                  <h3 class="text-lg font-semibold text-gray-800 mb-2">E-Commerce System Development, Implementation, and Management
                </h3>
                  <p class="text-gray-600 text-sm">
                    Secure a user-friendly, visually appealing, customized e-commerce platform that maximizes conversions and drives sales.                  </p>
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
    }, 25000); // Change slide every  seconds
  </script>


<section class="py-16 bg-gray-100">
  <div class="container mx-auto text-center">
      <h2 class="text-3xl font-semibold mb-8">Our Previous Clients</h2>

      <div class="flex flex-wrap justify-center gap-4 px-4">
          <div class="p-3 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 w-28 h-28 flex items-center justify-center">
              <img src="logos/kpalogo.jpg" alt="Client 1 Logo" class="max-h-20 max-w-full object-contain">
          </div>

          <div class="p-3 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 w-28 h-28 flex items-center justify-center">
              <img src="logos/enplogo.jpg" alt="Client 2 Logo" class="max-h-20 max-w-full object-contain">
          </div>

          <div class="p-3 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 w-28 h-28 flex items-center justify-center">
              <img src="client-logo-3.png" alt="Client 3 Logo" class="max-h-20 max-w-full object-contain">
          </div>

          <div class="p-3 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 w-28 h-28 flex items-center justify-center">
              <img src="client-logo-4.png" alt="Client 4 Logo" class="max-h-20 max-w-full object-contain">
          </div>

          <div class="p-3 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 w-28 h-28 flex items-center justify-center">
              <img src="client-logo-5.png" alt="Client 5 Logo" class="max-h-20 max-w-full object-contain">
          </div>

          <div class="p-3 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 w-28 h-28 flex items-center justify-center">
              <img src="client-logo-6.png" alt="Client 6 Logo" class="max-h-20 max-w-full object-contain">
          </div>

          <div class="p-3 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 w-28 h-28 flex items-center justify-center">
              <img src="client-logo-5.png" alt="Client 5 Logo" class="max-h-20 max-w-full object-contain">
          </div>

          <div class="p-3 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 w-28 h-28 flex items-center justify-center">
              <img src="client-logo-6.png" alt="Client 6 Logo" class="max-h-20 max-w-full object-contain">
          </div>
      </div>
  </div>
</section>




<section class="mt-16">
  <h2 class="text-3xl font-bold mb-8 text-center">Testimonials</h2>
  <div class="flex flex-wrap justify-center gap-8">
      <div class="bg-white rounded-lg shadow-md p-6 text-center w-80">
          <p class="text-gray-700 mb-4">"This blog has been incredibly helpful. I've learned so much!"</p>
          <p class="font-semibold">- John Doe</p>
      </div>
      <div class="bg-white rounded-lg shadow-md p-6 text-center w-80">
          <p class="text-gray-700 mb-4">"The content is always high-quality and engaging. Highly recommend!"</p>
          <p class="font-semibold">- Jane Smith</p>
      </div>
      <div class="bg-white rounded-lg shadow-md p-6 text-center w-80">
          <p class="text-gray-700 mb-4">"I love the variety of topics covered. Great blog!"</p>
          <p class="font-semibold">- David Lee</p>
      </div>
  </div>

  <div class="flex justify-center mt-8">
      <a href="#" class="px-4 py-2 mx-1 bg-white border rounded hover:bg-gray-100">Previous</a>
      <a href="#" class="px-4 py-2 mx-1 bg-blue-500 text-white rounded hover:bg-blue-600">Next</a>
  </div>
</section>

<section class="py-16 bg-white">
  <div class="container mx-auto text-center">
      <h2 class="text-3xl font-semibold mb-8">Our Affiliations</h2>
      <p class="text-gray-600 mb-10">We are proud to be affiliated with these reputable organizations.</p>

      <div class="flex flex-wrap justify-center gap-8">

          <div class="flex flex-col items-center p-6 bg-gray-100 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 w-64">
              <img src="affiliation-logo-1.png" alt="Affiliation 1 Logo" class="max-h-20 max-w-full object-contain mb-4">
              <h3 class="text-lg font-semibold text-gray-800">Organization A</h3>
              <p class="text-sm text-gray-600 mt-2">Brief description of the affiliation.</p>
          </div>

          <div class="flex flex-col items-center p-6 bg-gray-100 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 w-64">
              <img src="affiliation-logo-2.png" alt="Affiliation 2 Logo" class="max-h-20 max-w-full object-contain mb-4">
              <h3 class="text-lg font-semibold text-gray-800">Organization B</h3>
              <p class="text-sm text-gray-600 mt-2">Brief description of the affiliation.</p>
          </div>

          <div class="flex flex-col items-center p-6 bg-gray-100 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 w-64">
              <img src="affiliation-logo-3.png" alt="Affiliation 3 Logo" class="max-h-20 max-w-full object-contain mb-4">
              <h3 class="text-lg font-semibold text-gray-800">Organization C</h3>
              <p class="text-sm text-gray-600 mt-2">Brief description of the affiliation.</p>
          </div>

          <div class="flex flex-col items-center p-6 bg-gray-100 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 w-64">
              <img src="affiliation-logo-4.png" alt="Affiliation 4 Logo" class="max-h-20 max-w-full object-contain mb-4">
              <h3 class="text-lg font-semibold text-gray-800">Organization D</h3>
              <p class="text-sm text-gray-600 mt-2">Brief description of the affiliation.</p>
          </div>

      </div>
  </div>
</section>

@endsection

