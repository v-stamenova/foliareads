<x-app-layout>
    <div class="h-[75vh] w-full bg-creme flex flex-col justify-center items-center">
        <img class="h-44 w-60" src={{url('/images/logo.png')}} draggable="false">
        <h1 class="text-7xl text-gray-800 font-bold">About us</h1>
        <h2 class="text-4xl text-gray-800 font-bold">More about Folia and the team</h2>
    </div>
    <div class="h-8 bg-white"></div>
    <div class="bg-[#FDE8B1] py-20 flex flex-col justify-center items-center">
        <div class="flex flex-col justify-center items-center px-16">
            <h3 class="text-4xl text-gray-800 font-bold">Who are we?</h3>
            <p class="text-xl text-center text-gray-800 pt-5 px-16">We are a Student company! Folia is brought into existence by
                                                        seven international business students from HZ University of
                                                        Applied Sciences with the guidance of our coaches Ethiene
                                                        Veldhuis and Peter Wielemaker. The company will exist from April
                                                        2024 through June 2024. So hurry up and take advantage of our
                                                        service now!</p>
        </div>
        <h3 class="text-4xl text-gray-800 font-bold p-16">The Team</h3>
        <div class="grid grid-cols-1 flex flex-wrap justify-center gap-8 items-center">
            <div class="flex justify-center items-center gap-14">
                <div class="flex flex-col justify-center items-center">
                    <img src={{url('/images/vio.jpg')}} class=" h-32 w-32 rounded-full object-cover" draggable=false>
                    <h4 class="text-xl pt-2">Violeta Doncheva</h4>
                    <h5 class="text-lg font-bold text-nikol-800">CEO</h5>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <img src={{url('/images/nev.jpg')}} class="h-32 w-32 rounded-full object-cover" draggable=false>
                    <h4 class="text-xl pt-2">Nevena Yankova</h4>
                    <h5 class="text-lg font-bold text-nikol-800">COO</h5>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <img src={{url('/images/nik.jpg')}} class="h-32 w-32 rounded-full object-cover" draggable=false>
                    <h4 class="text-xl pt-2">Nikol Grueva</h4>
                    <h5 class="text-lg font-bold text-nikol-800">CFO</h5>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <img src={{url('/images/jef.jpg')}} class="h-32 w-32 rounded-full object-cover" draggable=false>
                    <h4 class="text-xl pt-2">Jeffrey Castel</h4>
                    <h5 class="text-lg font-bold text-nikol-800">Financial analyst</h5>
                </div>
            </div>
            <div class="flex justify-center items-center gap-12">
                <div class="flex flex-col justify-center items-center">
                    <img src={{url('/images/val.jpg')}} class="h-32 w-32 rounded-full object-cover" draggable=false>
                    <h4 class="text-xl pt-2">Valeriia Kanunikova</h4>
                    <h5 class="text-lg font-bold text-nikol-800">Project manager</h5>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <img src={{url('/images/pla.jpg')}} class="h-32 w-32 rounded-full object-cover" draggable=false>
                    <h4 class="text-xl pt-2">Plamen Dragoev</h4>
                    <h5 class="text-lg font-bold text-nikol-800">Marketing specialist</h5>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <img src={{url('/images/isa.jpg')}} class="h-32 w-32 rounded-full object-cover" draggable=false>
                    <h4 class="text-center text-xl pt-2">Isaac Rodriguez</h4>
                    <h5 class="text-lg font-bold text-nikol-800">Marketing specialist</h5>
                </div>
            </div>
            </div>
    </div>
</x-app-layout>
