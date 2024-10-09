@extends('layouts.app')

@section('title', 'Create Task')

@section('content')
    <section class="w-2/3 mx-auto">
        <div class="bg-white rounded-lg p-6 space-y-6">
            <h3 class="text-2xl font-semibold mb-2 text-blue-600">Add Task</h3>

            <form method="POST" action="{{route('tasks.store')}}" class="space-y-6">
                @csrf
                <p class="items-center text-xs mt-2 text-gray-500">All fields marked with <span class="text-red-600">*</span> must be filled </p>

                <div class="input-class">
                    <label for="title">Task Title <span class="text-red-600">*</span></label>
                    <input value="{{ old('title') }}" required type="text" name="title" id="title" class="mt-1 p-2 block w-full border rounded-md border-gray-300 shadow-sm focus-within:outline-none focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 focus">
                    @error('title')
                    <p class="text-xs text-red-600 mt-2 ml-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="input-class">
                    <label for="description">Task Description <span class="text-red-600">*</span></label>
                    <textarea required name="description" id="description" class="mt-1 resize-none p-2 block w-full rounded-md border border-gray-300 shadow-sm focus-within:outline-none focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" rows="3">{{ old('description') }}</textarea>
                    @error('description')
                    <p class="text-xs text-red-600 mt-2 ml-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="input-class">
                    <label for="long_description">Long Description</label>
                    <textarea name="long_description" id="long_description" class="mt-1 resize-none p-2 block w-full rounded-md border border-gray-300 shadow-sm focus-within:outline-none focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" rows="3">{{ old('long_description') }}</textarea>
                    @error('long_description')
                    <p class="text-xs text-red-600 mt-2 ml-1">{{$message}}</p>
                    @enderror
                </div>


                <button class="rounded-lg px-4 text-white py-2 bg-blue-400">Add Task</button>
            </form>



        </div>
    </section>
@endsection
