<x-layout>
    <x-slot:title>
        {{ Arr::get($story,'name') }}
    </x-slot:title>



    <livewire:storyblok-content
        :content="Arr::get($story,'content')"
        :key="Arr::get($story,'uuid')" />
</x-layout>
