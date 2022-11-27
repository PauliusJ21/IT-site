<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <div style = "font-size: 20px"> <a href="{{ route('tickets.index') }}">Your Tickets</a>
                &nbsp
                <a href="{{ route('tickets.all') }}">All Tickets</a>
                &nbsp
                <a href="{{ route('contacts') }}">Contacts</a></div>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                Question:
                <hr>
                    <span>
                        {{$ticket->question}}
                    </span>    
                 <hr>
                 <br>
                 Answer:
                 <hr>
                    <span>
                        {{$ticket->answer}}
                    </span>
                    Rating:
                    <hr>
                       <span>
                           {{$ticket->rating}}
                       </span>               
                    <br><a href="{{ route('comments.index', ['ticket' => $ticket]) }}" class="btn btn-warning" style="background-color: black; color: white">Comment</a>
                    @if (Auth::user()->email===$ticket->email)
                    <a href="{{ route('tickets.rating', ['ticket' => $ticket]) }}" class="btn btn-warning" style="background-color: black; color: white">Rate</a>
                    @endif
                </div>  
            </div>
        </div>    
</x-app-layout>