
<button wire:click="confirmVerif({{ $value }})" type="button" class="btn btn-success text-light" data-toggle="modal"
id="editCategory">
Verification
</button>

<button wire:click="confirmReject({{ $value }})" type="button" class="btn btn-danger" data-toggle="modal"
id="editCategory">
Reject
</button>