<!-- Desktop Navigation -->
<nav class="hidden md:block">
    <ul class="flex space-x-8  text-lg">
        
        <li><a href="/" class="hover:bg-secondary hover:text-primary hover:bg-secondary transition-colors">Home</a></li>
        


        <!-- About Dropdown -->
        <li
            class="relative"
            x-data="{ open: false }"
            @mouseenter="if (window.matchMedia('(min-width: 768px)').matches) open = true"
            @mouseleave="if (window.matchMedia('(min-width: 768px)').matches) open = false"
            @keydown.escape="open = false"
        >
            <button
                type="button"
                @click="open = !open"
                class="flex items-center gap-1 hover:bg-secondary hover:text-primary transition-colors"
                :aria-expanded="open"
            >
                About

                <svg
                    class="w-4 h-4 transition-transform"
                    :class="{ 'rotate-180': open }"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" d="m19 9-7 7-7-7"/>
                </svg>
            </button>

            <!-- Dropdown Menu -->
            <div
                x-cloak
                x-show="open"
                x-transition:enter="transition ease-out duration-150"
                x-transition:enter-start="opacity-0 translate-y-2"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-100"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 translate-y-2"
                @click.outside="open = false"
                class="absolute left-0 top-full pt-3 w-56 z-50"
            >
                <ul class="bg-background shadow-lg rounded-md py-2 border border-border">

                    <li>
                        <a href="/history-and-philosophy"
                           @click="open = false"
                           class="block px-4 py-2 hover:bg-secondary hover:text-primary transition-colors">
                            Our History and Philosophy
                        </a>
                    </li>

                    <li>
                        <a href="/our_team"
                           @click="open = false"
                           class="block px-4 py-2 hover:bg-secondary hover:text-primary transition-colors">
                            Our Team
                        </a>
                    </li>

                    <li>
                        <a href="/founder"
                           @click="open = false"
                           class="block px-4 py-2 hover:bg-secondary hover:text-primary transition-colors">
                            Meet our Founder
                        </a>
                    </li>


                </ul>
            </div>
        </li>



        <li><a href="/news" class="hover:bg-secondary hover:text-primary hover:bg-secondary transition-colors">News</a></li>
        <li><a href="/gallery" class="hover:bg-secondary hover:text-primary hover:bg-secondary transition-colors">Gallery</a></li>
        <li><a href="/cbse" class="hover:bg-secondary hover:text-primary hover:bg-secondary transition-colors">CBSE</a></li>
        <li><a href="/mandatory-disclosure" class="hover:bg-secondary hover:text-primary hover:bg-secondary transition-colors">Mandatory Disclosure</a></li>
        
        
        <li><a href="/contact" class="hover:bg-secondary hover:text-primary hover:bg-secondary transition-colors">Contact</a></li>
    </ul>
</nav>

<!-- Mobile Hamburger Button -->
<button
    @click="mobileMenuOpen = !mobileMenuOpen"
    class="cursor-pointer md:hidden p-2 rounded-md hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-primary z-[60]"
    aria-label="Toggle menu"
>
    <svg x-show="!mobileMenuOpen" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
    </svg>
    <svg x-show="mobileMenuOpen" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
    </svg>
</button>