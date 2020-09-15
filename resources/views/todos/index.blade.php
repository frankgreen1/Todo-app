@extends('todos.layout')

@section('content')
<div class="flex justify-between border-b pb-4 px-4">
      <h1 class="text-2x1">All Your Todos </h1>
<a href="{{route('todo.create')}}" class=" mx-5 px-2 text-blue-600 cursor-pointer text-white rounded"><span class="fas fa-plus-circle"/>ADD</a>
</div>

      <ul class="my-5">
        <x-alert/>

        @forelse ($todos as $todo)
         <li class="flex justify-between p-2">
         <div>
             @include('todos.complete-button')
         </div>

             @if($todo->completed)
                <p class="line-through">{{$todo->title}}</p>
                @else
        <p class="cursor-pionter" href="#">{{$todo->title}}</p>

                @endif

            <div>
            <a href="{{route('todo.show',$todo->id)}}" class="text-green-400 rounded cursor-pointer text-white">
            <span class="fas fa-eye px-2" title="View Todo List"/>
            </a>
                <a href="{{route('todo.edit',$todo->id)}}" class=" text-orange-400 rounded cursor-pointer text-white" >
                    <span class="fas fa-edit  px-2" title="Edit Todo List"/></a>

               <span class="fas fa-trash text-red-500 cursor-pointer  px-2" title="Delete Todo List" onclick="event.preventDefault();
                  if(confirm('Do you really want to delete?')){
                    document.getElementById('form-delete-{{$todo->id}}')
                    .submit()
                  }"/>

                <form action="{{route('todo.destroy',$todo->id)}}" id="{{'form-delete-'.$todo->id}}" method="POST" style="display: none">
                    @csrf
                    @method('delete')
                    </form>


            </div>
        </li>
        @empty

            <p> No task available,Create one 🤜🏽✌🏽</p>

        @endforelse
       </ul>
  @endsection


