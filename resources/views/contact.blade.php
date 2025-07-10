<!-- Use blade template for the page layout -->
<x-page-template occurrance="{{ $occurrance }}">
    <!-- First strip -->
    <div class="flex flex-row m-5 p-5 gap-5 justify-start">
        <!-- LHS -->
        <div class="basis-1/2">
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
        <div class="basis-1/2">
            <!-- Link cards (dynamically generated) -->
            <div x-data="cardListGenerator([
                '<a href=&quot;https://github.com/Cornelius-Figgle&quot;>GitHub</a>',
                '<a href=&quot;mailto:max@fullimage.net&quot;>Email</a>',
                '<a href=&quot;https://instagram.com/Cornelius_Figgle&quot;>Instagram</a>'
            ])">

                <div class="flex gap-2 flex-row flex-wrap" x-ref="divider" x-html="generateHtml"></div>
            </div>
        </div>
    </div>
</x-page-template>
