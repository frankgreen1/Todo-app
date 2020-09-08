@extends('todos.layout')

@section('content')
<div class="flex justify-between border-b pb-4 px-4">
    <h1 class="text-2x1  pb-4">{{$todo->title}}</h1>
    <a href="{{route('todo.index')}}" class=" mx-5 px-2 text-gray-600 cursor-pointer text-white rounded">
        <span class="fas fa-arrow-left"/>Back</a>
</div>


<div>
    <div>
        <h3 class="text-lg">Description</h3>
        <p>
            {{$todo->description}}
        </p>
    </div class="py-4">
 @if($todo->steps->count() > 0)
 <div>

    <h3 class="text-lg">Steps for this task</h3>
 @foreach ($todo->steps as $step)

 <p>{{$step->name}}</p>
 @endforeach
 </div>
 @endif




</div>

@endsection
