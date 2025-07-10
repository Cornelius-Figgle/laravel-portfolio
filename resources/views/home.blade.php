<!-- Use blade template for the page layout -->
<x-page-template occurrance="{{ $occurrance }}">
    <!-- First strip -->
    <div class="flex flex-row m-5 p-5 gap-5 justify-start">
        <!-- LHS -->
        <div class="basis-1/2">
            <!-- First paragraph -->
            <p class="mb-5">Hello, I am <span class="text-accent-3">Max Harrison</span>, a Maths and Computer Science student from the UK.</p>

            <!-- Skills cards (dynamically generated) -->
            <div x-data="cardListGenerator(['Python','Linux','Homelab','Laravel','PyQT','Virtualisation','Mathematics'])">
                <div class="flex gap-2 flex-row flex-wrap" x-ref="divider" x-html="generateHtml"></div>
            </div>
        </div>

        <!-- RHS -->
        <div class="basis-1/2">
            <div class="relative">
                <img src="assets/20240718_212709.jpg" alt="Photograph of Sand Bay at dusk.">
                <div class="absolute md:bottom-5 md:left-5 md:text-sm bottom-2 left-2 text-xs">
                    <p>Taken by me</p>
                    <p>Samsung S21 Plus</p>
                    <p>Sand Bay at dusk<p>
                </div>
            </div>
        </div>
    </div>

    <!-- Second strip -->
    <div class="flex flex-row m-5 p-5 gap-5 justify-start">
        <div>
        </div>
    </div>
</x-page-template>
