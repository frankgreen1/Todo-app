<div>
    <div class="flex justify-center pb-4 px-4">
        <h2 class="text-lg  pb-4">Add steps for task</h2>
            <span wire:click="increment" class="fas fa-plus px-2 py-1 cursor-pointer"/>Add More</a>
    </div>

    @foreach($steps as $step)
<div wire:key="{{$loop->index}}">
        <input type="text" value="{{$step['name']}}" name="stepName[]" placeholder="{{'Describe steps' .  ($loop->index+1)}}"

        class="py-2 px-2 border rounded">
<input type="hidden" name="stepId[]" value="{{$step['id']}}">
        <span class="fas fa-times text-red-400 p-2" wire:click="remove({{$loop->index}})"/>
    </div>
    @endforeach
    {{-- {{$steps}} --}}
</div>
