<div>
    <div class="flex justify-center pb-4 px-4">
        <h2 class="text-lg  pb-4">Add steps for task</h2>
            <span wire:click="increment" class="fas fa-plus px-2 py-1 cursor-pointer"/>Add More</a>
    </div>

    @foreach($steps as $step)
<div wire:key="{{$step}}">
        <input type="text" name="step[]" placeholder="{{'Describe steps' .  ($step+1)}}"

        class="py-2 px-2 border rounded">
        <span class="fas fa-times text-red-400 p-2" wire:click="remove({{$step}})"/>
    </div>
    @endforeach
    {{-- {{$steps}} --}}
</div>
