<div class="relative mt-4">
    <input id="myInput" type="text" class="form-input w-full border rounded-lg p-2" placeholder="Search products" wire:model.live='search'/>
    <div id="myInputautocomplete-list" class="autocomplete-items bg-white w-full border rounded-lg mt-1">
        @foreach ($users as $user)
            <div>
                {{$user->name}}    
            </div> 
        @endforeach
    </div>
</div>
