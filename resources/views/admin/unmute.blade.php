@if(Auth::user()->role === 1)
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Unmute') }}
        </h2>
    </x-slot>
    <br>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                Are you Sure ?
                <form action="{{route('admin.update', ['admin'=> $admin->id])}}" method ="post">
                @csrf
                @method('PUT')
                <input type="hidden" name="mute" id="mute" value="0">
                <input type="submit" value="Yes">
                <button><a href="{{ route('admin.index') }}">No</a></button>
            </div>
        </div>
    </div>
</x-app-layout>
@else
<x-app-layout>
    {{ route('dashboard') }}
</x-app-layout>
@endif