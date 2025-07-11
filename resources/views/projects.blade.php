<!-- Use blade template for the page layout -->
<x-page-template occurrance="{{ $occurrance }}">
    <!-- First strip -->
    <div class="flex flex-col-reverse sm:flex-row m-5 p-5 gap-5 justify-start">
        <!-- LHS -->
        <div class="basis-1/2 flex flex-col gap-5">
            <!-- Title -->
            <div class="text-lg">Laravel Portfolio Website (this one)</div>

            <!-- Skills cards (dynamically generated) -->
            <div x-data="cardListGenerator([
                'Laravel', 'TailwindCSS', 'Alpine.JS'
            ])">
            
                <div class="flex gap-2 flex-row flex-wrap" x-html="generateHtml"></div>
            </div>

            <!-- Main description -->
            <p>I built this website in <a class="underline underline-offset-4" href="https://laravel.com/">Laravel</a> during my time at <a class="underline underline-offset-4" href="https://evo.agency/">Evo Agency</a> and it was my first proper web development project.</p>

            <p>I made use of Blade files to modularise and template the pages, as well as <a class="underline underline-offset-4" href="https://alpinejs.dev/">Alpine.JS</a> to dynamically generate components consistently across pages.</p>

            <!-- Source link -->
            <a href="https://github.com/Cornelius-Figgle/laravel-portfolio" class="place-self-end mr-5 border border-solid p-2 border-text hover:text-text transition duration-200 ease-in-out hover:-translate-y-1">Source</a>
        </div>

        <!-- RHS -->
        <div class="basis-1/2  flex flex-col gap-5 border border-solid p-2 border-text">
            <img src="assets/laravel-portfolio-image.png" alt="Screenshot of the website's home page">
        </div>
    </div>

    <hr class="m-5">
</x-page-template>
