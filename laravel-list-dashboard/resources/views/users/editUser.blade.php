<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <title>Edit user</title>
                    <fieldset>
                        <legend>Edit user :</legend>
                        <form method="POST" action="{{ url('update/'.$user->id)}}">
                            @csrf
                            @method('PUT')
                            <label for="name">{{__('name')}}</label>
                            <input type="text"
                                   id="name"
                                   name="name"
                                   value="{{$user->name}}"
                                   @error('name') is-invalid
                                   @enderror autocomplete="name"
                            autofocus>
                            @error('name')
                            <span  class="error"><strong>{{$message}}</strong></span>
                            @enderror
                            <br>
                            <label for="username">{{ __('username')}}</label>
                            <input type="text"
                                   id="username"
                                   name="username"
                                   value="{{$user->username}}"
                                   @error('username') is-invalid
                                   @enderror autocomplete="username"
                            autofocus>
                            @error('username')
                            <span  class="error"><strong>{{$message}}</strong></span>
                            @enderror
                            <br>
                            <input type="submit" value="{{__('update')}}">
                        </form>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
