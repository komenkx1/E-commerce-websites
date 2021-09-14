<div wire:ignore.self class="modal fade" id="rejectModals" tabindex="-1" aria-labelledby="rejectModals"
    aria-hidden="true">
    <div class="modal-dialog">
        <form wire:submit.prevent='rejectSeller(2)'>
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="editModalLabel">Reject Modal</h4>
                    <button type="button" class="btn btn-light btn-circle dismiss" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true" class="material-icons">close</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group" wire:ignore.self>
                        <label for="exampleFormControlSelect1">Reason To Reject</label>
                        <input required type="text"
                            class="form-control @error('reason')
                    is-invalid
                    @enderror"
                            wire:model='reason'>
                        @error('reason')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Reject</button>
                </div>
        </form>
    </div>
</div>


@push('scripts')
    <script>
        $(document).ready(function() {

            //inisiate select2
            document.addEventListener('OpenModalReject', event => {
            $('#rejectModals').modal('show');
        });

        document.addEventListener('CloseModalReject', event => {
            $('#rejectModals').modal('hide');
        });

        });
    </script>
@endpush