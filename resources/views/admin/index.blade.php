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
                    <table class="md:table-fixed">
                        <thead>
                            <tr>
                            <th># &emsp;</th>
                            <th>Name &emsp;</th>
                            <th>Email &emsp;</th>
                            <th>Role &emsp;&emsp;</th>
                            <th>MUTE &emsp;</th>
                            <th>PROMOTE &emsp;</th>
                            </tr>
                        </thead>
                        <tbody>                              
                            @foreach ($admin as $user)
                            <tr>
                                <th scope="row"><br> {{$user->id}} &emsp;<br> </th>
                                <td><br> {{$user->name}}<br></td>
                                <td><br> {{$user->email}}&emsp;<br></td>                      
                                <td> <br> 
                                                                   
                                    @if($user->role === 1)
                                    Admin
                                    @else 
                                    User
                                    @endif                                   
                                    </td>
                                <td>
                                    @if($user->mute ===0)
                                    <br> <a href="{{ route('admin.mute' , ['admin' => $user->id]) }}"class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded">MUTE</a>
                                    @else
                                    <br> <a href="{{ route('admin.unmute' , ['admin' => $user->id]) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded">UNMUTE</a>
                                    @endif
                                </td>
                                <td>
                                    @if($user->role ===0)
                                    <br> <a href="{{ route('admin.promote' , ['admin' => $user->id]) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded">PROMOTE</a>
                                    @else
                                    <br> <a href="{{ route('admin.demote' , ['admin' => $user->id]) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded">DEMOTE</a>
                                    @endif
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
            {{ __('All Users') }}
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