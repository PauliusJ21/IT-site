<x-app-layout>
    <x-slot name="header">
        <div style = "font-size: 20px"> <a href="{{ route('tickets.index') }}">Your Tickets</a>
            &nbsp
            <a href="{{ route('tickets.all') }}">All Tickets</a>
            &nbsp
            <a href="{{ route('contacts') }}">Contacts</a></div>
    </x-slot>

    <div  class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('tickets.store', ['id'])}}" method ="post">
                        @csrf
                        <input type="hidden" name="name" id="name" value={{Auth::user()->name}}>
                        <input type="hidden" name="email" id="email" value={{Auth::user()->email}}>
                        Title<br> <input style="width: 534px;" type = "text" name ="title"></label><br>
                        <label for ="question">Question</label>
                        <hr>
                        <textarea name="question" id="question" cols="100" rows="20"></textarea>
                        <hr>
                        <input type="submit" value="Submit">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>