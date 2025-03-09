<div id="scrollToTop" class="fixed bottom-32 right-2 bg-blue-500 text-white p-1 rounded-sm shadow-lg hidden">
    <button onclick="scrollToTop()" class="w-max mx-auto">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
    </button>
</div>

<script>
    function scrollToTop() {
        window.scrollTo({ top: 0, behavior: "smooth" });
    }

    window.addEventListener("scroll", () => {
        const btn = document.getElementById("scrollToTop");
        if (window.scrollY > 200) {
            btn.classList.remove("hidden");
        } else {
            btn.classList.add("hidden");
        }
    });
</script>
