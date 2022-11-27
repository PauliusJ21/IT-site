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
                <a href="{{ route('contacts') }}">Contacts</a></div>
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        You're logged in!
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
@else
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <hr> 
                <div> <a href="{{ route('tickets.index') }}">Your Tickets</a>
                &nbsp
                <a href="{{ route('tickets.all') }}">All Tickets</a>
                &nbsp
                <a href="{{ route('contacts') }}">Contacts</a> </div>
            </h2>
        </x-slot>
        

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        You're logged in!
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
@endif


