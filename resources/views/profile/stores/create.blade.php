@extends('layouts.app')
@section('title')
    Register Store
@endsection
@section('styles')
<style>
    .select2-container .select2-selection--single {
    padding:.625rem 1rem;
    height: unset!important;
}


.select2-container--default .select2-selection--single .select2-selection__arrow {
    height: 48px!important;
    right: 7px!important;

}
</style>
@endsection
@section('content')

    <!-- Page container -->
    <section class="container pt-3 pt-lg-4 pb-5 pb-lg-6">
        <div class="row pb-2 pb-lg-0">

            <!-- Account menu (sticky sidebar) -->
            @include('profile.layouts.sidemenu')

            <!-- Content -->
            <div class="col-lg-8 ms-auto">
                <form action="{{ Route('profile.store.store') }}" method="post">
                    @csrf
                    <div class="row pb-3 container">
                        <div class="col-sm-12">
                            <span class="fw-bold pb-2">Store Info</span>
                            <hr>
                        </div>
                        <div class="col-sm-12 mb-4">
                            <label for="ac-fn" class="form-label-lg">Store Name</label>
                            <input type="text" id="ac-fn" class="form-control form-control-lg" value="" name="name">
                        </div>
                        <div class="col-sm-12 mb-4">
                            <label for="ac-ln" class="form-label-lg">Description</label>
                            <textarea type="text" id="ac-ln" class="form-control form-control-lg" name="description"></textarea>
                        </div>

                        <div class="col-sm-12">
                            <span class="fw-bold pb-2">Withdraw Info</span>
                            <hr>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <label for="ac-bank" class="form-label-lg">Bank</label>
                           <select name="bank_id" id="bankSelect" class="form-select form-select-lg">
                               @foreach ($banks as $bank)
                               <option value="{{ $bank->name }}">{{ $bank->name }}</option>
                                   
                               @endforeach
                           </select>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <label for="ac-account" class="form-label-lg">Account Number</label>
                            <input type="number" id="ac-account" class="form-control form-control-lg" value="" name="rekening_number">
                        </div>
                    <button type="submit" class="btn btn-primary btn-lg">&nbsp;Save changes&nbsp;</button>
                </form>
            </div>
        </div>
    </section>

@endsection
@section('scripts')
    <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };

          //inisiate select2
          $('#bankSelect').select2({
                tags: true,
                placeholder: 'Select Or Create New Item'
            });
    </script>
@endsection
