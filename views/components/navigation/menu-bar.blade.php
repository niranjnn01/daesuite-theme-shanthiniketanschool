<!-- Desktop Navigation -->
<nav class="hidden md:block">
    <ul class="flex space-x-2 text-base font-medium text-foreground">

        <li>
            <a href="/"
               class="block rounded-md px-3 py-2 transition-colors hover:bg-secondary hover:text-secondary-foreground">
                Home
            </a>
        </li>

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
                class="flex items-center gap-2 rounded-md px-3 py-2 font-medium text-foreground transition-colors hover:bg-secondary hover:text-secondary-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2"
                :aria-expanded="open"
            >
                About

                <svg
                    class="h-4 w-4 transition-transform"
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
                class="absolute left-0 top-full z-50 w-60 pt-2"
            >
                <ul class="overflow-hidden rounded-lg border border-border bg-surface shadow-lg py-2">

                    <li>
                        <a href="/history-and-philosophy"
                           @click="open = false"
                           class="block px-4 py-2.5 text-sm text-foreground transition-colors hover:bg-surface-subtle hover:text-primary">
                            Our History and Philosophy
                        </a>
                    </li>

                    <li>
                        <a href="/our_team"
                           @click="open = false"
                           class="block px-4 py-2.5 text-sm text-foreground transition-colors hover:bg-surface-subtle hover:text-primary">
                            Our Team
                        </a>
                    </li>

                    <li>
                        <a href="/founder"
                           @click="open = false"
                           class="block px-4 py-2.5 text-sm text-foreground transition-colors hover:bg-surface-subtle hover:text-primary">
                            Meet our Founder
                        </a>
                    </li>

                </ul>
            </div>
        </li>

        <li>
            <a href="/news"
               class="block rounded-md px-3 py-2 transition-colors hover:bg-secondary hover:text-secondary-foreground">
                News
            </a>
        </li>

        <li>
            <a href="/gallery"
               class="block rounded-md px-3 py-2 transition-colors hover:bg-secondary hover:text-secondary-foreground">
                Gallery
            </a>
        </li>

        <li>
            <a href="/cbse"
               class="block rounded-md px-3 py-2 transition-colors hover:bg-secondary hover:text-secondary-foreground">
                CBSE
            </a>
        </li>

        <li>
            <a href="/mandatory-disclosure"
               class="block rounded-md px-3 py-2 transition-colors hover:bg-secondary hover:text-secondary-foreground">
                Mandatory Disclosure
            </a>
        </li>

        <li>
            <a href="/contact"
               class="block rounded-md px-3 py-2 transition-colors hover:bg-secondary hover:text-secondary-foreground">
                Contact
            </a>
        </li>

    </ul>
</nav>

<!-- Mobile Hamburger Button -->
<button
    @click="mobileMenuOpen = !mobileMenuOpen"
    class="z-[60] cursor-pointer rounded-md p-2 text-foreground transition-colors hover:bg-surface-subtle focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary md:hidden"
    aria-label="Toggle menu"
>
    <svg x-show="!mobileMenuOpen" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
    </svg>

    <svg x-show="mobileMenuOpen" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
    </svg>
</button>