<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg pl-3">
            <h2 class="text-3xl text-gray-800 pl-4 pt-5 dark:text-gray-200">Welcome, {{Auth::user()->name}}!</h2>
            @if(is_null(Auth::user()->quiz))
                <div class="px-5">
                    <div class="rounded-lg my-5 py-7">
                        <h3 class="text-3xl text-nikol-700 text-nikol-500">Quick stats!</h3>
                        <div class="grid grid-cols-4 dark:text-gray-200">
                            <div class="flex flex-col items-center text-center justify-center">
                                <h4 class="text-4xl font-bold">{{$clientCount}}</h4>
                                <p class="text-3xl">Clients registered</p>
                            </div>
                            <div class="flex flex-col items-center text-center justify-center">
                                <h4 class="text-4xl font-bold">{{$clientsWithQuiz}}</h4>
                                <p class="text-3xl">of them have done the quiz</p>
                            </div>
                            <div class="flex flex-col items-center text-center justify-center">
                                <h4 class="text-4xl font-bold">{{$waitingRecs->count()}}</h4>
                                <p class="text-3xl">waiting for recommendation</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <div class="grid">
                <div class="pt-5">
                    <h3 class="text-2xl pl-4 dark:text-gray-200">Clients waiting recommendation</h3>
                    <div class="overflow-x-auto relative pt-2 dark:text-gray-200">
                        <table class="w-full text-sm text-left text-gray-700 pr-5 text-base dark:text-gray-200">
                            <thead>
                            <tr>
                                <td class="py-4 px-6 text-base">
                                    Client
                                </td>
                                <td class="py-4 px-6 text-base">
                                    Month
                                </td>
                                <td class="py-4 px-6 text-base">
                                    Action
                                </td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($waitingRecs as $request)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="py-4 px-6 text-base">
                                        {{$request->client->name}}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{$request->month}}
                                    </td>
                                    <td class="py-4 px-6">
                                        <a href="{{route('recommend.create', $request)}}"
                                           class="py-1 px-2 border-2 text-md font-bold border-nikol-500
                                            bg-nikol-400 hover:bg-nikol-700 rounded text-white">Recommend books</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
                <div>

                </div>
            </div>
        </div>
    </div>
</div>
