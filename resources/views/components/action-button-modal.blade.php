<!-- Button trigger modal -->
<button type="button" wire:click="editForm({{ $value }})" class="btn btn-primary" data-toggle="modal" id="editCategory">
    Edit
</button>

<button wire:click="confirmDel({{ $value }})" type="button" class="btn btn-danger" data-toggle="modal"
    id="editCategory">
    Detele
</button>
