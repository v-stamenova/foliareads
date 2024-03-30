<x-app-layout>
    <div class="bg-creme h-[80vh]">
        <x-slot name="header">
            <h1 class="text-3xl pl-3 text-gray-800 font-bold">My Dashboard</h1>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <h2 class="text-2xl pl-3 text-gray-800 pt-5">Welcome, {{Auth::user()->name}}!</h2>
                    <div class="grid grid-cols-2">
                        <div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
