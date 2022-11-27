<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <hr> 
            <div style = "font-size: 20px"> <a href="{{ route('tickets.index') }}">Your Tickets</a>
                &nbsp
                <a href="{{ route('tickets.all') }}">All Tickets</a>
                &nbsp
                <a href="{{ route('contacts') }}">Contacts</a>
                &nbsp
                <br>
                <hr>
                <a href="{{ route('tickets.create') }}">New Ticket</a> </div>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach ($tickets as $ticket)
                    @if (Auth::user()->email === $ticket->email )
                    @if ($ticket->state === 0)
                    State : <b>unanswered</b>
                    @else
                    State : answered by
                    {{$ticket->adminName}}
                    @endif
                    <hr>
                    question:
                    <br>
                    {{ $ticket->question }}
                    <hr>
                    answer:
                    <br>
                    {{ $ticket->answer }}
                    <br>
                    <hr>
                    <hr>
                    <hr>
                    <hr>
                    @endif
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
