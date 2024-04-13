@php use App\Models\Book; @endphp
<x-app-layout>
    <div class="bg-creme">
        <x-slot name="header">

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-nikol-600 dark:text-nikol-400">
                    {{session('status')}}
                </div>
            @endif
            <h1 class="text-4xl pl-3 text-gray-800 font-bold">Recommend books to {{$user->name}}</h1>
            <h2 class="text-2xl pl-3 text-gray-800">Now you need to recommend books to the client. You can find useful
                                                    information here to help you out.</h2>
            @if($errors->any())
                {{ implode('', $errors->all('<div>:message</div>')) }}
            @endif
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg px-3">
                    <div class="grid grid-cols-2">
                        <div>
                            <div>
                                <h2 class="text-2xl pl-3 text-nikol-600 py-4">Answers from the quiz</h2>
                                @if($user->quiz)
                                    @foreach($user->quiz->answers as $answer)
                                        <div class="pb-2">
                                            <p class="text-xl pl-3 text-gray-800">{{$answer->question->text}}</p>
                                            <p class="text-md pl-3 text-gray-800">{{$answer->answer}}</p>
                                        </div>
                                    @endforeach
                                @else
                                    <p class="text-md pl-3 text-gray-800">They haven't answered the quiz yet. Maybe you want to contact them?<br>The email is <b>{{$user->email}}</b></p>
                                @endif
                            </div>
                            <div>
                                <h2 class="text-2xl pl-3 text-nikol-600 py-4">Previously recommended</h2>
                                @if($user->getRecommendedBooks())
                                    @foreach($user->getRecommendedBooks() as $book)
                                        <p class="text-md pl-3 text-gray-800">{{$book->book->title}} - {{$book->book->author}}</p>
                                    @endforeach
                                @else
                                    <p class="text-md pl-3 text-gray-800">No previous recommendations</p>
                                @endif
                            </div>
                        </div>
                        <div>
                            <h2 class="text-2xl pl-3 text-nikol-600 py-4">Recommendations</h2>
                            <form method="POST" action="{{route('recommend.store', $request->id)}}">
                                @csrf
                                @foreach(Book::all() as $book)
                                    <div class="p-2">
                                        <input type="checkbox" name="recommend[]"
                                               value="{{$book->id}}"
                                               class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-nikol-600 shadow-sm focus:ring-nikol-500 dark:focus:ring-nikol-600 dark:focus:ring-offset-gray-800">
                                        <label for="{{$book->id}}" class="pl-1 text-md">{{$book->title}}
                                            - {{$book->author}}</label>
                                    </div>
                                @endforeach
                                <div class="flex justify-end mr-16 pb-5">
                                    <x-primary-button class="ms-4 text-xl bg-nikol-500 hover:bg-nikol-700">
                                        Submit
                                    </x-primary-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
