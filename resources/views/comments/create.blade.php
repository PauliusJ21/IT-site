<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Comment Creation') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('comments.store', ['ticket' => $ticket])}}" method ="post">
                        @csrf
                        <input type="hidden" name="name" id="name" value={{Auth::user()->name}}>
                        <input type="hidden" name="email" id="email" value={{Auth::user()->email}}>
                        <label for ="comment">Comment</label>
                        <hr>
                        <textarea name="comment" id="comment" cols="100" rows="20"></textarea>
                        <hr>
                        <input type="submit" value="Submit">
                </div>
            </div>
        </div>
    </div>
   
</x-app-layout>