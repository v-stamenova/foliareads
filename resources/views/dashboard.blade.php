<x-app-layout>
    <div class="bg-creme h-[80vh]">
        <x-slot name="header">
            <h1 class="text-4xl pl-3 text-gray-800 font-bold">My Dashboard</h1>
        </x-slot>

        @role('client')
            <x-client-dashboard/>
        @endrole
    </div>
</x-app-layout>
