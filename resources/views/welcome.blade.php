<x-app-layout>
    <div class="h-[95vh] w-full bg-creme">
        <div class="grid grid-cols-2">
            <div class="py-5 pl-10 min-h-screen w-full flex flex-col justify-center items-center">
                <div class="text-left">
                    <img class="h-28 w-40" src={{url('/images/logo.png')}} draggable="false">
                    <h1 class="text-7xl text-gray-800 font-bold">Folia Reads</h1>
                    <h2 class="text-4xl text-gray-800 font-bold">Reading is now on easy mode</h2>
                    <div class="pt-5">
                        <a href="{{route('register')}}"
                           class="py-2 px-5 border-2 text-lg font-bold border-nikol-500
                           bg-nikol-400 hover:bg-nikol-700 rounded text-white">Sign up</a>
                    </div>
                </div>
            </div>

            <div class="w-full h-[95%] bg-cover bg-center bg-no-repeat"
                 style="background-image: url('/images/books.png')">
            </div>
        </div>
    </div>
    <div class="h-8 bg-white"></div>
    <div class="grid grid-cols-3 px-16 bg-[#FDE8B1]">
        <div class="col-span-1 py-8">
            <img src={{url('/images/1-2.png')}} draggable="false">
        </div>
        <div class="col-span-2 flex flex-col justify-center">
            <div class="text-left pl-32">
                <h3 class="text-3xl text-gray-800 font-bold">Make the dreadful enjoyable!</h3>
                <p class="text-xl text-gray-800 pt-5">We know how hard it is to find an interesting book. When you have so many other things to do reading
                   gets left behind. We want to help you succeed in school and maybe discover a passion for reading along the way!</p>
            </div>
        </div>
    </div>
    <div class="h-8 bg-white"></div>
    <div class="grid grid-cols-3">
        <div class="col-span-2 bg-[#F4EDE9] flex flex-col justify-center py-16 pl-16">
            <p class="text-3xl text-gray-800 font-bold">Student pricing</p>
            <p class="text-xl text-gray-800">For students from students, you receive the perfect read for you after filling out a quiz!</p>
        </div>
        <div class="bg-creme  flex flex-col justify-center items-center pr-16">
            <p class="text-5xl text-gray-900 font-bold">1.99€</p>
            <p class="text-xl text-gray-700">per month</p>
            <div class="pt-5">
                <a href="{{route('register')}}"
                   class="py-2 px-5 border-2 text-lg border-nikol-500
                           bg-nikol-400 hover:bg-nikol-700 rounded text-white">Register and pay</a>
            </div>
        </div>
    </div>
</x-app-layout>
