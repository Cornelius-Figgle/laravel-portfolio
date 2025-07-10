<!-- Navigation Bar (dynamically generated) -->
<div x-data="{ pages: [['Home', '/'], ['Projects', '/projects'], ['Contact', '/contact']] }" class="flex flex-row flex-1 gap-10 m-5 p-5 bg-fg justify-start">
    <template x-for="[title, route] in pages">
        <div x-data="locationIndicator" class="hover:text-accent-2 transition duration-200 ease-in-out hover:-translate-y-1">
            <a :href="route" :class="getUnderline(route)" x-text="title"></a>
        </div>
    </template>
</div>