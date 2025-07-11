<!-- Use blade template for the page layout -->
<x-page-template occurrance="{{ $occurrance }}">
    <!-- First strip -->
    <div class="flex flex-col sm:flex-row m-5 p-5 gap-5 justify-start">
        <!-- LHS -->
        <div class="basis-1/2 flex flex-col gap-5">
            <div class="relative">
                <img src="assets/allotment_apple_blossoms.jpg" alt="Photograph of Sand Bay at dusk.">
                <div class="absolute text-fg text-right md:top-5 md:right-5 md:text-sm top-2 right-2 text-xs">
                    <p>Taken by me</p>
                    <p>Samsung S21 Plus</p>
                    <p>Apple Blossoms<p>
                </div>
            </div>
        </div>

        <!-- RHS -->
        <div class="basis-1/2 flex flex-col gap-5">
            <!-- Link cards (dynamically generated) -->
            <div x-data="cardListGenerator([
                '<a href=&quot;https://github.com/Cornelius-Figgle&quot;>GitHub</a>',
                '<a href=&quot;mailto:max@fullimage.net&quot;>Email</a>',
                '<a href=&quot;www.linkedin.com/in/maxharrison08&quot;>LinkedIn</a>',
                '<a href=&quot;https://instagram.com/Cornelius_Figgle&quot;>Instagram</a>'
            ])">

                <div class="flex gap-2 flex-row flex-wrap" x-ref="divider" x-html="generateHtml"></div>
            </div>

            <hr>

            <div>
                <p>Feel free to contact me via the above links or the <span class="text-accent-2">email form</span> below.</p>
            </div>

            <!-- Contact form -->
            <div class="bg-fg p-5">
                @if (request()->get('submitted'))
                <p>Thank you, I will be in touch shortly.</p>
                @else
                <form action="/contact-form" method="POST" class="flex flex-col">
                    @csrf
                    <label for="name">Full name / Company name:</label><br>
                    <input type="text" id="name" name="name" class="border border-solid border-text p-2"><br>
                    <label for="email">Email address:</label><br> 
                    <input type="email" id="email" name="email" class="border border-solid border-text p-2"><br>
                    <label for="message">Message:</label><br>
                    <textarea id="message" name="message" class="border border-solid border-text p-2"></textarea><br>
                    <input type="submit" value="Submit" class="border border-solid p-2 mt-5 place-self-end border-text transition duration-200 ease-in-out hover:-translate-y-1">
                </form>
                @endif
            </div> 
        </div>
    </div>
</x-page-template>
