<!-- Use blade template for the page layout -->
<x-page-template occurrance="{{ $occurrance }}">
    <!-- First strip -->
    <div class="flex flex-col sm:flex-row m-5 p-5 gap-5 justify-start">
        <!-- LHS -->
        <div class="basis-1/2 flex flex-col gap-5">
            <!-- First paragraph -->
            <p>Hello, I am <span class="text-accent-3">Max Harrison</span>, a Maths and Computer Science student from the UK.</p>

            <!-- Skills cards (dynamically generated) -->
            <div x-data="cardListGenerator([
                'Python','Linux','Homelab','Laravel','PyQT','Virtualisation','Mathematics'
            ])">
            
                <div class="flex gap-2 flex-row flex-wrap" x-html="generateHtml"></div>
            </div>

            <!-- Experience timeline (dynamically generated) -->
            <div x-data="timelineGenerator([
                {
                    'date': 'July 2025',
                    'text': 'Work experience with <a href=&quot;https://evo.agency/&quot;>Evo Agency</a> where I learnt modern web development and gained experience in PHP, Laravel, Tailwind, Alpine.JS, and more. I started building this website during this time as well.'
                },
                {
                    'date': 'April 2025',
                    'text': 'Work experience with the Weston College <a href=&quot;https://www.weston.ac.uk/digital-innovation-vacancies&quot;>Digital Innovation and Learning team</a> where I learnt how to build interactive education resources as well as gaining experience with graphic design, 360&deg; photography, and video editing. Myself and other students created <a href=&quot;https://thinglink.com/view/scene/1964658901018214886&quot;>this</a> digital art exhibition over the week.'
                }
            ])">

                <ol class="border-text border-l ml-2 p-5 flex flex-col gap-10" x-html="generateHtml"></ol>
            </div> 
        </div>

        <!-- RHS -->
        <div class="basis-1/2  flex flex-col gap-5">
            <div class="relative">
                <img src="assets/sand_bay_dusk.jpg" alt="Photograph of Sand Bay at dusk.">
                <div class="absolute md:bottom-5 md:left-5 md:text-sm bottom-2 left-2 text-xs">
                    <p>Taken by me</p>
                    <p>Samsung S21 Plus</p>
                    <p>Sand Bay at dusk<p>
                </div>
            </div>
        </div>
    </div>
</x-page-template>
