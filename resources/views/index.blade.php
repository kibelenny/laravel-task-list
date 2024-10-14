@extends('layouts.app')

@section('title', 'Available Tasks')

@section('content')
    <h2 class="text-2xl font-semibold mb-4">Available Tasks</h2>

    <div class=" space-y-6">
        @forelse ($tasks as $task)
            <a href="{{ route('tasks.show', $task->id) }}" class="block">
                <div class="bg-white h-full rounded-lg border border-grey hover:shadow-lg transition-shadow duration-300 overflow-hidden">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-blue-600">{{ $task->title }}</h3>
                        <p class="text-gray-600 mb-4">{{ Str::limit($task->description, 150) }}</p>
                        <div class="flex justify-between items-center text-sm text-gray-500">
                            <span>Created: {{ \Carbon\Carbon::parse($task->created_at)->format('M d, Y') }}</span>
                            <span class="px-2 py-1 bg-{{ $task->completed ? 'green' : 'yellow' }}-200 rounded-full">
                                {{ $task->completed ? 'Completed' : 'Pending' }}
                            </span>
                        </div>
                    </div>
                </div>
            </a>
        @empty
            <h2 class="text-xl font-semibold mb-4 text-blue-600">There are no pending tasks!</h2>
        @endforelse
    </div>
@endsection
