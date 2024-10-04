<header class="bg-white shadow" x-data="{ openMenu: false, openLang: false }">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
        <!-- Logo Section -->
        <div class="flex items-center">
            <a href="/" class="text-xl font-bold text-gray-800">My Logo</a>
        </div>

        <!-- Desktop Navigation -->
        <nav class="hidden md:flex space-x-4">
            <a href="/" class="text-gray-600 hover:text-gray-800">Home</a>
            <a href="/about" class="text-gray-600 hover:text-gray-800">About</a>
            <a href="/services" class="text-gray-600 hover:text-gray-800">Services</a>
            <a href="/contact" class="text-gray-600 hover:text-gray-800">Contact</a>
        </nav>

        <!-- Mobile Menu Button -->
        <div class="md:hidden">
            <button @click="openMenu = !openMenu" class="text-gray-600 hover:text-gray-800 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
        <!-- LANG -->
        <button @click="openLang = !openLang" class="text-gray-600 hover:text-gray-800 focus:outline-none">
            <x-heroicon-s-heart class="h-6 w-6 text-red-600" />

        </button>
    </div>
    <div x-show="openLang" @click.away="openLang = false">
        <div class="bg-white shadow-md">
            <nav class="flex flex-col space-y-2 p-4">
                <a href="/" class="text-gray-600 hover:text-gray-800">Home</a>
                <a href="/about" class="text-gray-600 hover:text-gray-800">About</a>
                <a href="/services" class="text-gray-600 hover:text-gray-800">Services</a>
                <a href="/contact" class="text-gray-600 hover:text-gray-800">Contact</a>
            </nav>
        </div>
    </div>

    <!-- Mobile Navigation -->
    <div x-show="openMenu" @click.away="openMenu = false" class="md:hidden">
        <div class="bg-white shadow-md">
            <nav class="flex flex-col space-y-2 p-4">
                <a href="/" class="text-gray-600 hover:text-gray-800">Home</a>
                <a href="/about" class="text-gray-600 hover:text-gray-800">About</a>
                <a href="/services" class="text-gray-600 hover:text-gray-800">Services</a>
                <a href="/contact" class="text-gray-600 hover:text-gray-800">Contact</a>
            </nav>
        </div>
    </div>
</header>