<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Our events") }}
        </h2>
    </x-slot>

    <livewire:event-list />
</x-app-layout>