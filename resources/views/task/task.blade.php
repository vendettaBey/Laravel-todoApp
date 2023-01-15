@extends('dashboard')

@section('tasks')
    <section class="py-6 dark:bg-gray-900 dark:text-gray-50">
        <form action="{{ route('task.store') }}" method="POST" class="container flex flex-row mx-auto">
            @csrf
            @method('POST')
            <div class="flex flex-row items-center justify-center w-full">
                <input id="task_title" name="task_title" type="text" placeholder="Task Title"
                    class="rounded-md mx-5 focus:ring focus:ring-opacity-75 focus:ring-blue-400 dark:border-gray-700 dark:text-gray-900">
                <button
                    class="bg-transparent hover:bg-red-500 text-red-500 font-semibold hover:text-white px-5 border border-red-500 hover:border-transparent rounded">
                    Add Task
                </button>
            </div>
        </form>
    </section>
    <section class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8 dark:bg-gray-800 dark:text-gray-100">

        <div class="days flex flex-row justify-start">
            <a class="px-2 border-gray-900 border-r" href="{{ route('yesterday') }}">Yesterday</a>
            <a class="px-2 border-gray-900 border-r" href="{{ route('today') }}">Today</a>
            <a class="px-2 border-gray-900 border-r" href="{{ route('tomorrow') }}">Tomorrow</a>
            <a class="px-2" href="{{ route('all') }}">All</a>
        </div>
        <h2 class="my-12 w-full text-center text-2xl text-gray-900 dark:text-gray-100">
            My Tasks
        </h2>

        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full border text-center border-collapse" id="tasksTable">
                            <thead class="border-b bg-gray-100 text-gray-900 dark:bg-gray-900 dark:text-gray-100">
                                <tr>
                                    <th scope="col" class="text-sm font-bold px-6 py-4 border">
                                        Status
                                    </th>
                                    <th scope="col" class="text-sm font-bold px-6 py-4 border">
                                        Task Title
                                    </th>
                                    <th scope="col" class="text-sm font-bold px-6 py-4 border">
                                        Actions
                                    </th>
                                    <th scope="col" class="text-sm font-bold px-6 py-4">
                                        Date
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($realTasks as $task)
                                    <tr class="border-b bg-gray-100 text-gray-900 dark:bg-gray-900 dark:text-gray-100">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium border">
                                            @if ($task->completed == 1)
                                                <span
                                                    class="px-2 inline-flex text-md leading-5 font-bold rounded-full bg-green-100 text-green-800">
                                                    Done
                                                </span>
                                            @else
                                                <span
                                                    class="px-2 inline-flex text-md leading-5 font-bold rounded-full bg-red-100 text-red-800">
                                                    Pending
                                                </span>
                                            @endif
                                        </td>
                                        <td class="text-sm px-6 py-4 whitespace-nowrap border">
                                            {{ $task->title }}
                                        </td>
                                        <td class="text-sm px-6 py-4 whitespace-nowrap border">

                                            @if ($task->completed == 0)
                                                <a href="{{ route('complete', $task->id) }}"
                                                    class="px-4 text-green-500 text-2xl"><i class="fas fa-check"></i></a>
                                            @elseif($task->completed == 1)
                                                <a href="{{ route('incomplete', $task->id) }}"
                                                    class="px-4 text-red-500 text-2xl"><i class="fas fa-times"></i></a>
                                            @endif
                                            <form action="{{ route('task.destroy', $task->id) }}" method="POST"
                                                class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="inline font-bold text-xl text-red-500 rounded-xl  border-b-1 border-red-400">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                        <td class="text-sm px-6 py-4 whitespace-nowrap border">
                                            {{ $task->created_at->format('d-m-Y') }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
