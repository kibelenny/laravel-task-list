@extends('layouts.app')

@section('title', 'Edit Task')

@section('content')
    <section class="w-2/3 mx-auto">
        <div class="bg-white rounded-lg p-6 space-y-6">
            <div id="title">
                <div class="flex justify-between">
                    <h3 class="text-2xl font-semibold mb-2 text-blue-600">{{$task->title}}</h3>
                    <p class="px-2 py-1 bg-{{ $task->completed ? 'green' : 'yellow' }}-200 rounded-full flex items-center text-sm text-gray-500">
                        {{$task->completed? 'Completed' : 'Pending'}}
                    </p>
                </div>
                <div class="items-center text-xs mt-2 text-gray-500">
                    <p><span>Created At: {{\Carbon\Carbon::parse($task->created_at)->format('F d, Y')}}</span><br> <span>Last Modified: {{\Carbon\Carbon::parse($task->updated_at)->format('F d, Y')}}</span></p>
                </div>
            </div>

            <div id="short-desc">
                <h4 class="text-xl font-semibold mb-2 text-blue-600">Description</h4>
                <p class="text-gray-600">{{$task->description}}</p>
            </div>

            @if($task->long_description)
            <div id="long-desc">
                <h4 class="text-xl font-semibold mb-2 text-blue-600">Long Description</h4>
                <p class="text-gray-600">{{$task->long_description}}</p>
            </div>
            @endif

            <div id="actions" class="flex gap-4">
                <button class="rounded-lg px-4 text-white py-2 bg-blue-400">Edit</button>
                <button class="rounded-lg px-4 text-white py-2 bg-red-400">Delete</button>

                @if(!$task->completed)
                    <button class="rounded-lg px-4 text-white py-2 bg-green-400">Completed</button>
                @else
                    <button class="rounded-lg px-4 text-white py-2 bg-yellow-400">Incomplete</button>
                @endif
            </div>

        </div>
    </section>
@endsection
