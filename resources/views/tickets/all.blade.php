@if(Auth::user()->role === 1)
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <div style = "font-size: 20px" > <a style = "color:black" href="{{ route('tickets.index') }}">Your Tickets</a>
            &nbsp
            <a style = "color:black" href="{{ route('tickets.all') }}">All Tickets</a>
            &nbsp
            <a style = "color:black" href="{{ route('admin.index') }}">All Users</a>
            &nbsp
            <a style = "color:black" href="{{ route('contacts') }}">Contacts</a></div>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="md:table-fixed">
                        <thead>
                            <tr>
                            <th>Name &emsp;</th>
                            <th>Title  &emsp;</th>
                            <th>Rating &emsp;</th>
                            <th>View/Answer </th>
                            </tr>                           
                        </thead>
                        <tbody>                              
                            @foreach ($tickets as $ticket)
                            <tr>
                                <th scope="row"><br> {{$ticket->name}} &emsp;<br> </th>
                                <td><br> {{$ticket->title}} &emsp;<br></td> 
                                <td><br> {{$ticket->rating}} &emsp;<br></td>                                                                                         
                                    <td>
                                        <a href="{{ route('tickets.show',$ticket->id) }}" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-2 rounded">View</a>
                                        <a href="{{ route('tickets.edit', ['ticket'=> $ticket]) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded">Answer</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                            </table>
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
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="md:table-fixed">
                        <thead>
                            <tr>
                            <th>Name &emsp;</th>
                            <th>Title  &emsp;</th>
                            <th>Rating &emsp;</th>
                            <th>View </th>
                            </tr>                           
                        </thead>
                        <tbody>                              
                            @foreach ($tickets as $ticket)
                            <tr>
                                <th scope="row"><br> {{$ticket->name}} &emsp;<br> </th>
                                <td><br> {{$ticket->title}} &emsp;<br></td>          
                                <td><br> {{$ticket->rating}} &emsp;<br></td>                                                                                   
                                    <td>
                                        <a href="{{ route('tickets.show',$ticket->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded">View</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                            </table>
                </div>
            </div>
        </div>
    </div>
    </x-app-layout>
@endif