@php use App\Models\Question; @endphp
<x-app-layout>
    <div class="bg-creme dark:bg-gray-900">
        <x-slot name="header">

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-nikol-600 dark:text-nikol-400">
                    {{session('status')}}
                </div>
            @endif
            <h1 class="text-4xl pl-3 text-gray-800 dark:text-gray-200 font-bold">The quiz</h1>
            <h2 class="text-2xl pl-3 text-gray-800 dark:text-gray-200">By doing the quiz, we would be able to give you a
                                                                       personal
                                                                       recommendation</h2>
            @if($errors->any())
                {{ implode('', $errors->all('<div>:message</div>')) }}
            @endif
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <form method="POST" action="{{route('quiz.store')}}">
                    @csrf
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg px-3">
                        @foreach(Question::all() as $question)
                            <div class="py-5">
                                <div
                                    class="text-gray-700 dark:text-gray-200 text-xl after:content-['*'] after:text-red-500">
                                    {{$question->id}}. {{$question->text}}
                                </div>
                                @if($question->type == 'open')
                                    <div class="mt-4 dark:text-gray-200">
                                        <x-input-label class="dark:text-gray-200" for=q{{$question->id}}/>

                                            <x-text-input id="q{{$question->id}}" class="block mt-1 w-full "
                                                          type="text"
                                                          name="q{{$question->id}}"
                                                          required/>

                                            <x-input-error :messages="$errors->get('form.q{{$question->id}}')"
                                                           class="mt-2"/>
                                    </div>
                                @elseif($question->type == 'score')
                                    <div class="mt-4">
                                        <select name="q{{$question->id}}" required
                                                class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-nikol-500 dark:focus:border-nikol-600 focus:ring-nikol-500 dark:focus:ring-nikol-600 rounded-md shadow-sm">
                                            <option selected value="1 (Niet belangrijk)">1 (Niet belangrijk)</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5 (Zeer belangrijk)</option>
                                        </select>
                                    </div>
                                @elseif($question->type == 'select')
                                    <div class="dark:text-gray-200">
                                        <div class="p-2 dark:text-gray-200">
                                            <input type="checkbox" id="mystery_thriller" name="q{{$question->id}}[]"
                                                   value="Mystery/Thriller"
                                                   class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-nikol-600 shadow-sm focus:ring-nikol-500 dark:focus:ring-nikol-600 dark:focus:ring-offset-gray-800">
                                            <label for="mystery_thriller" class="pl-1 text-md">Mystery/Thriller</label>
                                        </div>

                                        <div class="p-2">
                                            <input type="checkbox" id="romance" name="q{{$question->id}}[]"
                                                   value="Romance"
                                                   class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-nikol-600 shadow-sm focus:ring-nikol-500 dark:focus:ring-nikol-600 dark:focus:ring-offset-gray-800">
                                            <label for="romance" class="pl-1 text-md">Romance</label>
                                        </div>

                                        <div class="p-2">
                                            <input type="checkbox" id="science_fiction" name="q{{$question->id}}[]"
                                                   value="Science Fiction"
                                                   class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-nikol-600 shadow-sm focus:ring-nikol-500 dark:focus:ring-nikol-600 dark:focus:ring-offset-gray-800">
                                            <label for="science_fiction" class="pl-1 text-md">Science Fiction</label>
                                        </div>

                                        <div class="p-2">
                                            <input type="checkbox" id="fantasy" name="q{{$question->id}}[]"
                                                   value="Fantasy"
                                                   class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-nikol-600 shadow-sm focus:ring-nikol-500 dark:focus:ring-nikol-600 dark:focus:ring-offset-gray-800">
                                            <label for="fantasy" class="pl-1 text-md">Fantasy</label>
                                        </div>

                                        <div class="p-2">
                                            <input type="checkbox" id="historical_fiction" name="q{{$question->id}}[]"
                                                   value="Historical Fiction"
                                                   class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-nikol-600 shadow-sm focus:ring-nikol-500 dark:focus:ring-nikol-600 dark:focus:ring-offset-gray-800">
                                            <label for="historical_fiction" class="pl-1 text-md">Historical
                                                                                                 Fiction</label>
                                        </div>

                                        <div class="p-2">
                                            <input type="checkbox" id="horror" name="q{{$question->id}}[]"
                                                   value="Horror"
                                                   class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-nikol-600 shadow-sm focus:ring-nikol-500 dark:focus:ring-nikol-600 dark:focus:ring-offset-gray-800">
                                            <label for="horror" class="pl-1 text-md">Horror</label>
                                        </div>

                                        <div class="p-2">
                                            <input type="checkbox" id="crime_detective" name="q{{$question->id}}[]"
                                                   value="Crime/Detective"
                                                   class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-nikol-600 shadow-sm focus:ring-nikol-500 dark:focus:ring-nikol-600 dark:focus:ring-offset-gray-800">
                                            <label for="crime_detective" class="pl-1 text-md">Crime/Detective</label>
                                        </div>

                                        <div class="p-2">
                                            <input type="checkbox" id="adventure" name="q{{$question->id}}[]"
                                                   value="Adventure"
                                                   class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-nikol-600 shadow-sm focus:ring-nikol-500 dark:focus:ring-nikol-600 dark:focus:ring-offset-gray-800">
                                            <label for="adventure" class="pl-1 text-md">Adventure</label>
                                        </div>

                                        <div class="p-2">
                                            <input type="checkbox" id="literary_fiction" name="q{{$question->id}}[]"
                                                   value="Literary Fiction"
                                                   class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-nikol-600 shadow-sm focus:ring-nikol-500 dark:focus:ring-nikol-600 dark:focus:ring-offset-gray-800">
                                            <label for="literary_fiction" class="pl-1 text-md">Literary Fiction</label>
                                        </div>

                                        <div class="p-2">
                                            <input type="checkbox" id="young_adult" name="q{{$question->id}}[]"
                                                   value="Young Adult (YA)"
                                                   class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-nikol-600 shadow-sm focus:ring-nikol-500 dark:focus:ring-nikol-600 dark:focus:ring-offset-gray-800">
                                            <label for="young_adult" class="pl-1 text-md">Young Adult (YA)</label>
                                        </div>

                                        <div class="p-2">
                                            <input type="checkbox" id="biography_memoir" name="q{{$question->id}}[]"
                                                   value="Biography/Memoir"
                                                   class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-nikol-600 shadow-sm focus:ring-nikol-500 dark:focus:ring-nikol-600 dark:focus:ring-offset-gray-800">
                                            <label for="biography_memoir" class="pl-1 text-md">Biography/Memoir</label>
                                        </div>

                                        <div class="p-2">
                                            <input type="checkbox" id="philosophy" name="q{{$question->id}}[]"
                                                   value="Philosophy"
                                                   class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-nikol-600 shadow-sm focus:ring-nikol-500 dark:focus:ring-nikol-600 dark:focus:ring-offset-gray-800">
                                            <label for="philosophy" class="pl-1 text-md">Philosophy</label>
                                        </div>

                                        <div class="p-2">
                                            <input type="checkbox" id="science_nature" name="q{{$question->id}}[]"
                                                   value="Science/Nature"
                                                   class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-nikol-600 shadow-sm focus:ring-nikol-500 dark:focus:ring-nikol-600 dark:focus:ring-offset-gray-800">
                                            <label for="science_nature" class="pl-1 text-md">Science/Nature</label>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        @endforeach

                        <div class="flex justify-end mr-16 pb-5">
                            <x-primary-button class="ms-4 text-xl bg-nikol-500 hover:bg-nikol-700">
                                Submit
                            </x-primary-button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
