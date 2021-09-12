<div wire:ignore.self class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ Route('dashboard.courier.store') }}" method="post" id="formAddCourier">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="addModalLabel">Add Form</h4>
                    <button type="button" class="btn btn-light btn-circle dismiss" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true" class="material-icons">close</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group" wire:ignore>
                        <label for="exampleFormControlSelect1">Courier Name</label>
                        <select required name="courier[]" multiple style="width:100%"
                            class="form-control js-example-basic-single" id="inputCourier">
                        </select>
                        <span class="invalid-feedback d-none">The name field is required.</span>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="btnSubmit" type="button" class="btn btn-primary">Save changes</button>
                </div>
        </form>
    </div>
</div>
</div>


<div wire:ignore.self class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <form wire:submit.prevent='UpdateCourier'>
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="editModalLabel">Edit Form</h4>
                    <button type="button" class="btn btn-light btn-circle dismiss" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true" class="material-icons">close</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group" wire:ignore.self>
                        <label for="exampleFormControlSelect1">Courier Name</label>
                        <input required type="text"
                            class="form-control @error('name')
                    is-invalid
                    @enderror"
                            wire:model='name'>
                        @error('name')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
        </form>
    </div>
</div>
</div>

@push('scripts')
    <script>
        $(document).ready(function() {

            //inisiate select2
            $('.js-example-basic-single').select2({
                tags: true,
                placeholder: 'Input Courier Name'
            });
        });

        //get select2 value
        var data = [];
        $('.js-example-basic-single').on('change', function(e) {
            data = $('.js-example-basic-single').select2("val");
            $(this).removeClass('is-invalid');
            $('.invalid-feedback').addClass('d-none');
        });

        //validate if empty
        $('#btnSubmit').on('click', function() {
            if (data.length === 0) {
                $('.js-example-basic-single').addClass('is-invalid');
                $('.invalid-feedback').removeClass('d-none');
            } else {
                $('#formAddCourier').submit();
            }
        });


        document.addEventListener('OpenModalCourier', event => {
            $('#editModal').modal('show');
        });

        document.addEventListener('CloseModalCourier', event => {
            $('#editModal').modal('hide');
        });
    </script>
@endpush
