<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <button type="button" wire:click="clickEvt" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">{{ $msg }}</button>
    <button type="button" wire:click="clickEvt2" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">{{ $msg2 }}</button>
    
    <input type="hidden" name="cardmode" value="{{$cardmode}}" class="text-center">
    <p>{{$cardmode}}</p>
</div>
