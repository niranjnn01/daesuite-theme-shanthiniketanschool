<nav
    x-show="mobileMenuOpen"
    x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="opacity-0 transform -translate-y-2"
    x-transition:enter-end="opacity-100 transform translate-y-0"
    x-transition:leave="transition ease-in duration-150"
    x-transition:leave-start="opacity-100 transform translate-y-0"
    x-transition:leave-end="opacity-0 transform -translate-y-2"
    @click.away="mobileMenuOpen = false"
    class="md:hidden mt-4 pb-4 border-t pt-4 bg-background absolute top-full left-0 w-full z-40 shadow-lg"
>
    <ul class="flex flex-col space-y-4">

        <li class="mx-3"><a href="/" @click="mobileMenuOpen = false" class="block text-lg text secondary/80 hover:text-secondary transition-colors py-2">Home</a></li>

        <li class="mx-3" x-data="{ open: false }">

            <button
                type="button"
                @click="open = !open"
                class="flex items-center justify-between w-full text-lg text-secondary/80 hover:text-secondary py-2"
                :aria-expanded="open"
            >
                About

                <svg
                    class="w-5 h-5 transition-transform"
                    :class="{ 'rotate-180': open }"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" d="m19 9-7 7-7-7"/>
                </svg>
            </button>

            <ul
                x-cloak
                x-show="open"
                x-transition
                class="pl-4 border-l border-border ml-2 space-y-2"
            >
                <li class="mx-3">
                    <a href="/about"
                    @click="open = false; mobileMenuOpen = false"
                    class="block py-2 text-base text-secondary/70 hover:text-secondary">
                        Overview
                    </a>
                </li>

                <li class="mx-3">
                    <a href="/about/vision-mission"
                    @click="open = false; mobileMenuOpen = false"
                    class="block py-2 text-base text-secondary/70 hover:text-secondary">
                        Vision & Mission
                    </a>
                </li>

                <li class="mx-3">
                    <a href="/about/management"
                    @click="open = false; mobileMenuOpen = false"
                    class="block py-2 text-base text-secondary/70 hover:text-secondary">
                        Management
                    </a>
                </li>

                <li class="mx-3">
                    <a href="/about/facilities"
                    @click="open = false; mobileMenuOpen = false"
                    class="block py-2 text-base text-secondary/70 hover:text-secondary">
                        Facilities
                    </a>
                </li>
            </ul>

        </li>

        
        <li class="mx-3"><a href="/gallery" @click="mobileMenuOpen = false" class="block text-lg text secondary/80 hover:text-secondary transition-colors py-2">Gallery</a></li>
        <li class="mx-3"><a href="/contact" @click="mobileMenuOpen = false" class="block text-lg text secondary/80 hover:text-secondary transition-colors py-2">Contact</a></li>
    </ul>
</nav>