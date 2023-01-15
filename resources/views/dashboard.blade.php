@extends('layouts.app')
@section('content')
    <div class="py-12 my-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 hover:dark:text-blue-400 hover:text-blue-400">
                    {{ __('Welcome to To Do App !') }}
                </div>
            </div>
        </div>
    </div>
    @yield('tasks')
@endsection
