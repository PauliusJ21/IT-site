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
            <hr> 
                @if(Auth::user()->mute === 1)
                    <div style = "font-size: 20px"  style = color:red> Sorry you are muted </div>
                @else    
                    <div style = "font-size: 20px">  <a href="{{ route('comments.create', ['ticket' => $ticket]) }}">New Comment</a> </div>
                @endif

        </h2>
    </x-slot>
                    
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            Comments:
                            @foreach ($comments as $comment)
                            <hr>
                            Name: 
                            {{ $comment->name }}
                            <br>
                            Email: 
                            {{ $comment->email }}
                            <br>
                            {{ $comment ->comment }}

                            <form action="{{ route('comments.delete', ['comment'=>$comment, 'ticket'=>$ticket] ) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <br>
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-2 rounded">Delete</button>
                            </form>
                             @endforeach
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
            <a href="{{ route('contacts') }}">Contacts</a></div>
        </h2>
            <hr> 
            @if(Auth::user()->mute === 1)
                <div style = "font-size: 20px"  style = color:red> Sorry you are muted </div>
            @else    
                <div style = "font-size: 20px">  <a href="{{ route('comments.create', ['ticket' => $ticket]) }}">New Comment</a> </div>
            @endif
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Comments:
                        @foreach ($comments as $comment)
                        <hr>
                        name: 
                        {{ $comment->name }}
                        <br>
                        {{ $comment ->comment }}
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@endif