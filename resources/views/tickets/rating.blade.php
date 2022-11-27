@if(Auth::user()->email=== $ticket->email)
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <div style = "font-size: 20px"> <a href="{{ route('tickets.index') }}">Your Tickets</a>
            &nbsp
            <a href="{{ route('tickets.all') }}">All Tickets</a>
            &nbsp
            <a href="{{ route('contacts') }}">Contacts</a>
            &nbsp
            </div>
        </h2>
    </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <form action="{{route('tickets.updatep', ['ticket'=> $ticket])}}" method ="post">
                            @csrf
                            @method('PUT')
                            <div id="rating">
                                <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                                1<input name="rating" type="radio" value="1" />
                                2<input name="rating" type="radio" value="2" />
                                3<input name="rating" type="radio" value="3" />
                                4<input name="rating" type="radio" value="4" />
                                5<input name="rating" type="radio" value="5" />
                                <input type="hidden" name="id" value="<?php echo $ticket->rating; ?>" />
                                <input type="submit" value="vote" name="vote" /></p>
                                </form>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
@else
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <div style = "font-size: 20px"> <a href="{{ route('tickets.index') }}">Your Tickets</a>
            &nbsp
            <a href="{{ route('tickets.all') }}">All Tickets</a>
            &nbsp
            <a href="{{ route('contacts') }}">Contacts</a>
            &nbsp
            </div>
        </h2>
    </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                       Something is wrong.
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
@endif