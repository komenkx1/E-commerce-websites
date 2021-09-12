@extends('dashboard.layouts.master',['pageHeader'=>'Products Discount Create','descriptionHeader'=>'Products Discount Data'])
@section('content')
    <div class="col-12 col-sm-12 p-2">
            <div class="shadow">
                <div class="card-header bg-white d-flex justify-content-between">
                    Create Form
                   
                </div>

                <div class="card-body bg-white">
                    <form action="{{ Route('dashboard.discount.store') }}" method="post">
                        @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Presentase <small
                                class="text-danger">*</small></label>
                        <input required type="number" name="percentage"
                            class="form-control @error('percentage')
                        is-invalid
                        @enderror"
                            placeholder="Input Discount Percentage" value="{{ old('percentage') }}">
                        @error('percentage')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                   
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleFormControlInput1">Start Date <small
                                    class="text-danger">*</small></label>
                            <input required type="date" name="start"
                                class="form-control @error('start')
                            is-invalid
                            @enderror"
                                placeholder="Input Discount Start Date" value="{{ old('start') }}">
                            @error('start')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="exampleFormControlInput1">End Date <small
                                    class="text-danger">*</small></label>
                            <input required type="date" name="end"
                                class="form-control @error('end')
                            is-invalid
                            @enderror"
                                placeholder="Input Discount End Date" value="{{ old('end') }}">
                            @error('end')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                        
                    </div>
                    
                    <input type="hidden" value="{{ $idDIscount }}" name="product_id">
                    <button type="submit" class="btn btn-primary" id="btnNext">Submit</button>
                </form>
                </div>
            </div>

    </div>

@endsection

