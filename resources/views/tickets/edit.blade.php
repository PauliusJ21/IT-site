@if(Auth::user()->role === 1)
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <div style = "font-size: 20px"> <a href="{{ route('tickets.index') }}">Your Tickets</a>
                &nbsp
                <a href="{{ route('tickets.all') }}">All Tickets</a>
                &nbsp
                <a href="{{ route('admin.index') }}">All Users</a>
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
                    <form action="{{route('tickets.update', ['ticket'=> $ticket])}}" method ="post">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="adminName" id="adminName" value={{Auth::user()->name}}>
                        <input type="hidden" name="adminEmail" id="adminEmail" value={{Auth::user()->email}}>
                        <label for ="answer">Answer</label>
                        <hr>
                        <textarea name="answer" id="answer" cols="100" rows="20"></textarea>
                        <hr>
                        <input type="hidden" name="state" id="state" value="1">
                        <input type="submit" value="Submit">
                
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
                    Something is wrong
                    <br>
                    <button><a href="{{ route('dashboard') }}">Back</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@endif