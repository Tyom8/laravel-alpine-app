@extends('layouts.app') <!-- Assuming you're using a layout file -->

@section('content')
<div class="container mx-auto py-12">
    <!-- Main Heading -->
    <h1 class="text-5xl font-bold mb-10">{{ __('messages.welcome') }}</h1>

    <!-- Section 1 -->
    <section class="mb-8">
        <h2 class="text-3xl font-semibold mb-4">{{ __('messages.aboutServices') }}</h2>
        <p class="text-gray-700">
            {{ __('messages.aboutDes') }}
        </p>
    </section>

    <!-- Section 2 -->
    <section class="mb-8">
        <h2 class="text-3xl font-semibold mb-4">{{ __('messages.whyChoose') }}</h2>
        <p class="text-gray-700">
            {{ __('messages.chooseAnswer') }}
        </p>
    </section>

    <!-- FAQ Section (Accordion) -->
    <section x-data="{ openFaq: null }" class="mb-12">
        <h2 class="text-3xl font-semibold mb-6">{{ __('messages.askedQuestions') }}</h2>

        <!-- Accordion Container -->
        <div @click.away="openFaq = null" class="space-y-4">
            <!-- FAQ 1 -->
            <div>
                <button @click="openFaq === 1 ? openFaq = null : openFaq = 1"
                    class="w-full flex justify-between items-center p-4 bg-gray-100 rounded-lg focus:outline-none">
                    <div class="flex">
                        <x-heroicon-c-light-bulb class="h-6 w-6" />
                        <span class="text-lg font-medium">{{ __('messages.questOne') }}</span>
                    </div>
                    <x-heroicon-o-plus-small x-show="openFaq !== 1" class="h-5 w-5" />
                    <x-heroicon-c-minus x-show="openFaq === 1" class="h-5 w-5" />
                </button>
                <div x-show="openFaq === 1" x-cloak class="p-4 bg-gray-50">
                    <p class="text-gray-600">{{ __('messages.answerOne') }}</p>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div>
                <button @click="openFaq === 2 ? openFaq = null : openFaq = 2"
                    class="w-full flex justify-between items-center p-4 bg-gray-100 rounded-lg focus:outline-none">
                    <div class="flex">
                        <x-heroicon-c-light-bulb class="h-6 w-6" />
                        <span class="text-lg font-medium">{{ __('messages.questTwo') }}</span>
                    </div>
                    <x-heroicon-o-plus-small x-show="openFaq !== 1" class="h-5 w-5" />
                    <x-heroicon-c-minus x-show="openFaq === 1" class="h-5 w-5" />
                </button>
                <div x-show="openFaq === 2" x-cloak class="p-4 bg-gray-50">
                    <p class="text-gray-600">{{ __('messages.answerTwo') }}</p>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div>
                <button @click="openFaq === 3 ? openFaq = null : openFaq = 3"
                    class="w-full flex justify-between items-center p-4 bg-gray-100 rounded-lg focus:outline-none">
                    <div class="flex">
                        <x-heroicon-c-light-bulb class="h-6 w-6" />
                        <span class="text-lg font-medium">{{ __('messages.questThree') }}</span>
                    </div>
                    <x-heroicon-o-plus-small x-show="openFaq !== 1" class="h-5 w-5" />
                    <x-heroicon-c-minus x-show="openFaq === 1" class="h-5 w-5" />
                </button>
                <div x-show="openFaq === 3" x-cloak class="p-4 bg-gray-50">
                    <p class="text-gray-600">{{ __('messages.answerThree') }}</p>
                </div>
            </div>

            <!-- FAQ 4 (Optional) -->
            <div>
                <button @click="openFaq === 4 ? openFaq = null : openFaq = 4"
                    class="w-full flex justify-between items-center p-4 bg-gray-100 rounded-lg focus:outline-none">
                    <div class="flex">
                        <x-heroicon-c-light-bulb class="h-6 w-6" />
                        <span class="text-lg font-medium">{{ __('messages.questfour') }}</span>
                    </div>
                    <x-heroicon-o-plus-small x-show="openFaq !== 1" class="h-5 w-5" />
                    <x-heroicon-c-minus x-show="openFaq === 1" class="h-5 w-5" />
                </button>
                <div x-show="openFaq === 4" x-cloak class="p-4 bg-gray-50">
                    <p class="text-gray-600">{{ __('messages.answerfour') }}</p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection