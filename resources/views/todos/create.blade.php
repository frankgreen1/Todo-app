@extends('todos.layout')

@section('content')
<div class="flex justify-between border-b pb-4 px-4">
    <h1 class="text-2x1  pb-4">What next you need to do</h1>
    <a href="{{route('todo.index')}}" class=" mx-5 px-2 text-gray-600 cursor-pointer text-white rounded">
        <span class="fas fa-arrow-left"/>Back</a>
</div>

<form action="{{route('todo.store')}}" method="POST" class="py-6">
  <x-alert/>
  @csrf
 <div class="py-1">
    <input type="text" name="title" placeholder="task title" class="py-2 px-2 border" />
 </div>

 <div class="py-1">
    <textarea name="description" placeholder="task description" class="py-2 px-2 border"></textarea>
 </div>
 <div class="py-2">

    @livewire('step')

 </div>
 <div py-1>
    <input type="submit" value="Create" class="p-2 border rounded" />
 </div>



</form>

{{-- <a href="{{route('todo.index')}}" class=" mx-5 py-1 px-1 bg-white-400 border cursor-poiter rounded">Back</a> --}}

@endsection
