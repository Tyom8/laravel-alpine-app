<style>
    .no-scrollbar::-webkit-scrollbar {
        display: none;
        /* Hide scrollbar for Chrome, Safari and Opera */
    }

    .no-scrollbar {
        -ms-overflow-style: none;
        /* IE and Edge */
        scrollbar-width: none;
        /* Firefox */
    }
</style>
<header class="bg-white shadow" x-data="{ openMenu: false, openLang: false }">
    <div class="mx-auto px-5 md:px-40 px-4 py-3 flex justify-between items-center">
        <div class="flex items-center">
            <a href="/" class="flex items-center gap-3 text-xl font-bold text-gray-800"> <img src="{{ asset('images/laravel.png') }}" alt="flag" class="h-8">
                Laravel</a>
        </div>
        <nav class="hidden md:flex space-x-4">
            <a href="/" class="text-gray-600 hover:text-gray-800">{{ __('messages.home') }}</a>
            <a href="/" class="text-gray-600 hover:text-gray-800">{{ __('messages.about') }}</a>
            <a href="/" class="text-gray-600 hover:text-gray-800">{{ __('messages.services') }}</a>
            <a href="/" class="text-gray-600 hover:text-gray-800">{{ __('messages.contact') }}</a>
        </nav>

        <div class="md:hidden">
            <button @click="openMenu = !openMenu" class="text-gray-600 hover:text-gray-800 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
        <button @click="openLang = !openLang" class="text-gray-600 hover:text-gray-800 focus:outline-none">
            @if (App::getLocale() == 'en')
            <img src="{{ asset('images/uk.png') }}" alt="flag" class="h-8">
            @elseif (App::getLocale() == 'es')
            <img src="{{ asset('images/sp.png') }}" alt="flag" class="h-8">
            @elseif (App::getLocale() == 'fr')
            <img src="{{ asset('images/fr.png') }}" alt="flag" class="h-8">
            @else
            Default Language
            @endif
        </button>
    </div>
    <div x-show="openLang" @click.away="openLang = false">
        <div class="bg-white shadow-md">
            <nav class="flex flex-col items-end space-y-2  mx-auto container">
                <div class="flex flex-col gap-3 py-5 max-h-40 overflow-y-auto no-scrollbar">
                    <a class="flex items-center gap-2" href="{{ url('/lang/en') }}"> <img src="{{ asset('images/uk.png') }}" alt="flag" class="h-8">
                        English</a>
                    <a class="flex items-center gap-2" href="{{ url('/lang/es') }}"> <img src="{{ asset('images/sp.png') }}" alt="flag" class="h-8">
                        Spanish</a>
                    <a class="flex items-center gap-2" href="{{ url('/lang/fr') }}"> <img src="{{ asset('images/fr.png') }}" alt="flag" class="h-8">
                        French</a>
                    <a class="flex items-center gap-2" href="{{ url('/lang/es') }}"> <img src="{{ asset('images/sp.png') }}" alt="flag" class="h-8">
                        Spanish</a>
                    <a class="flex items-center gap-2" href="{{ url('/lang/en') }}"> <img src="{{ asset('images/uk.png') }}" alt="flag" class="h-8">
                        English</a>
                    <a class="flex items-center gap-2" href="{{ url('/lang/fr') }}"> <img src="{{ asset('images/fr.png') }}" alt="flag" class="h-8">
                        French</a>
                </div>
            </nav>
        </div>
    </div>

    <div x-show="openMenu" @click.away="openMenu = false" class="md:hidden">
        <div class="bg-white shadow-md">
            <nav class="flex flex-col space-y-2 ml-10 mx-auto container items-center">
                <a href="/" class="text-gray-600 hover:text-gray-800">Home</a>
                <a href="#" class="text-gray-600 hover:text-gray-800">About</a>
                <a href="#" class="text-gray-600 hover:text-gray-800">Services</a>
                <a href="#" class="text-gray-600 hover:text-gray-800">Contact</a>
            </nav>
        </div>
    </div>
</header>