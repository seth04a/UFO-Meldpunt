<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 justify-center text-center">
                    <a href="{{ url('/create-post') }}" class="text-2xl font-bold text-lime-300 mb-4 hover:underline block">
                        Post Maken
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-2xl font-bold text-lime-300 mb-4 justify-center text-center">Hier zijn uw posts</h2>
                    
                    @if(isset($userPosts) && $userPosts->count())
                        @foreach($userPosts as $post)
                            <div class="mb-6 border-b border-gray-700 pb-4">
                                <h3 class="text-lg font-semibold text-lime-200">{{ $post->title }}</h3>
                                <p class="text-gray-400 text-sm mb-2">
                                    <strong>Locatie:</strong> {{ $post->location }}<br>
                                    <strong>Datum:</strong> {{ \Carbon\Carbon::parse($post->created_at)->format('d-m-Y H:i') }}
                                </p>
                                <p class="text-gray-200 mb-2">{{ $post->content }}</p>
                                @if($post->image)
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image" class="w-full h-32 object-cover rounded mb-2">
                                @endif
                            </div>
                        @endforeach
                    @else
                        <p class="text-gray-400">U heeft nog geen posts geplaatst.</p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
