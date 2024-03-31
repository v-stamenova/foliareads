<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg pl-3">
            <h2 class="text-3xl text-gray-800 pl-4 pt-5">Welcome, {{Auth::user()->name}}!</h2>
            @if(is_null(Auth::user()->quiz))
                <div class="px-5">
                    <div class="bg-[#FDE8B1] rounded-lg my-5 py-7 px-5">
                        <h3 class="text-2xl text-nikol-700">Do the quiz!</h3>
                        <p class="text-gray-800 text-lg pb-5">Before we recommend any books, we need to know more about
                                                              your book
                                                              preferences. Answer on this quiz so that we get a better
                                                              understanding of what
                                                              you like!</p>
                        <a href="{{route('quiz.index')}}"
                           class="py-1 px-3 border-2 text-md border-nikol-500
                           bg-nikol-400 hover:bg-nikol-700 rounded text-white">To the Quiz</a>
                    </div>
                </div>
            @endif
            <div class="grid grid-cols-2">
                <div class="pt-5">
                    <h3 class="text-2xl pl-4">Remaining payments</h3>
                    <div class="overflow-x-auto relative pt-2">
                        <table class="w-full text-sm text-left text-gray-700 pr-5 text-base">
                            <tbody>
                            @foreach(['April', 'May', 'June'] as $month)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="py-4 px-6 text-base">
                                        {{$month}} payment
                                    </td>
                                    <td class="py-4 px-6">
                                        1.99 €
                                    </td>
                                    <td>
                                        @if(!Auth::user()->hasRequestedRecommendation($month))
                                            <form action="{{route('payForMonth', $month)}}" method="POST">
                                                @csrf
                                                <x-primary-button class="ms-4 bg-nikol-500 hover:bg-nikol-700">
                                                    {{ __('Pay') }}
                                                </x-primary-button>
                                            </form>
                                        @else
                                            <x-primary-button disabled class="ms-4">
                                                Paid
                                            </x-primary-button>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>

                </div>
                <div>

                </div>
            </div>
        </div>
    </div>
</div>
