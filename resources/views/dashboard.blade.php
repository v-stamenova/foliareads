<x-app-layout>
    <div class="bg-creme dark:bg-gray-900 h-[80vh]">
        <x-slot name="header">

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-nikol-600 dark:text-nikol-400">
                    {{session('status')}}
                </div>
            @endif
            <h1 class="text-4xl pl-3 text-gray-800 dark:text-gray-200 font-bold">My Dashboard</h1>
        </x-slot>

        @role('client')
        <x-client-dashboard/>
        @endrole
        @role('admin')
        <x-admin-dashboard/>
        @endrole
    </div>
</x-app-layout>
