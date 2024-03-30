<x-app-layout>
    <div class="h-[95vh] w-full bg-[#F4EDE9]">
        <div class="grid grid-cols-2">
            <div class="py-5 pl-10 min-h-screen w-full flex flex-col justify-center items-center">
                <div class="text-left">
                    <img class="h-28 w-40" src={{url('/images/logo.png')}} draggable="false">
                    <h1 class="text-7xl text-gray-800 font-bold">Folia Reads</h1>
                    <h2 class="text-4xl text-gray-800 font-bold">Reading is now on easy mode</h2>
                    <div class="pt-5">
                        <a href="{{route('register')}}"
                           class="py-2 px-5 border-2 text-lg font-bold border-indigo-500
                           bg-indigo-400 hover:bg-indigo-700 rounded text-white">Sign up</a>
                    </div>
                </div>
            </div>

            <div class="w-full h-[95%] bg-cover bg-center bg-no-repeat"
                 style="background-image: url('/images/books.png')">
            </div>
        </div>
    </div>
    <div class="">

    </div>
</x-app-layout>
