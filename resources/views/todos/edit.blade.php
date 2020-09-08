@extends('todos.layout')


@section('content')
<div class="flex justify-between border-b pb-4 px-4">
    <h1 class="text-2x1  pb-4">Update your Todo List</h1>
    <a href="{{route('todo.index')}}" class=" mx-5 px-2 text-gray-600 cursor-pointer text-white rounded">
        <span class="fas fa-arrow-left"/>Back</a>
</div>



<form action="{{route('todo.update',$todo->id)}}" method="POST" class="py-5">
  <x-alert/>
  @csrf
   @method('patch')
   <div class="py-1">
   <input type="text" name="title" value="{{$todo->title}}" class="py-2 px-2 border" />
   </div>

    <div class="py-1">
    <textarea name="description" placeholder="task description" class="py-2 px-2 border">{{$todo->description}}</textarea>
     </div>
     <div class="py-2">

@livewire('edit-step',['steps' => $todo->steps])

     </div>
     <div class="py-1">
        <input type="submit" value="update" class="p-2 border rounded" />
     </div>
</form>


@endsection
