<div class="form-group position-relative">
    <input id="myInput" type="text" class="form-control" placeholder="Search products" wire:model.live='search'/>
    <div id="myInputautocomplete-list" class="autocomplete-items">
        @foreach ($users as $user)
            <div>
                {{$user->name}}    
            </div> 
        @endforeach
    </div>
</div>
