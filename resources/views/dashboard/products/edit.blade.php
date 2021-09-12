@extends('dashboard.layouts.master',['pageHeader'=>'Products Create','descriptionHeader'=>'Products Data'])
@section('styles')
    <style>
        /* For summernote override unordered and order list */
        .note-editable ul {
            list-style: disc !important;
            list-style-position: inside !important;
        }

        .note-editable ol {
            list-style: decimal !important;
            list-style-position: inside !important;
        }

        div.img-output {
            width: 250px;
            height: 250px;
            overflow: hidden;
            margin: 10px;
            position: relative;
        }

        img {
            position: absolute;
            left: -1000%;
            right: -1000%;
            top: -1000%;
            bottom: -1000%;
            margin: auto;
            min-height: 100%;
            min-width: 100%;
        }

    </style>
@endsection
@section('content')
    <div class="col-12 col-sm-12 p-2">
            <div class="shadow">
                <form id="form" method="post" action="{{ Route('dashboard.product.update',['product'=>$product->id]) }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                <div class="card-header bg-white d-flex justify-content-between">
                    Edit Form
                    <div class="custom-control custom-switch custom-switch-md">
                        <input type="checkbox" @if ($product->status == 'publish') checked @endif name="status" value="publish"
                            class="custom-control-input" id="customSwitch4">
                        <label class="custom-control-label" for="customSwitch4">
                            Publish
                        </label>
                    </div>
                </div>

                <div class="card-body bg-white">

                    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                        <li class="nav-item m-1 shadow">
                            <a class="nav-link  mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab"
                                href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1"
                                aria-selected="true"><i class="material-icons mr-2 align-middle f-16">home</i>Home</a>
                        </li>
                        <li class="nav-item m-1 shadow">
                            <a class="nav-link  mb-md-0" id="tabs-icons-text-2-tab" href="javascript:void(0)"><i
                                    class="material-icons mr-2 align-middle f-16">image</i>Image</a>
                        </li>
                    </ul>

                    <div class="card shadow my-3 mx-1">
                        <div class="card-body bg-white">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane form-pane fade show active" id="tabs-icons-text-1" role="tabpanel"
                                    aria-labelledby="tabs-icons-text-1-tab">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Product Name <small
                                                class="text-danger">*</small></label>
                                        <input required type="text" name="name"
                                            class="form-control @error('name')
                                        is-invalid
                                        @enderror"
                                            placeholder="Input Product Name" value="{{ $product->name }}">
                                        @error('name')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Description <small
                                                class="text-danger">*</small></label>
                                        <textarea required
                                            class="form-control @error('description')
                                        is-invalid
                                        @enderror"
                                            name="description" id="desc" cols="30"
                                            rows="10">{{ $product->description  }}</textarea>
                                        @error('description')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Price <small
                                                class="text-danger">*</small></label>
                                        <input required type="number" name="price"
                                            class="form-control @error('price')
                                        is-invalid
                                        @enderror"
                                            placeholder="Input Product Price" value="{{$product->price }}">
                                        @error('price')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Category <small
                                                class="text-danger">*</small></label>
                                        <select required name="category[]" multiple style="width:100%"
                                            class="form-control @error('category')
                                                is-invalid
                                                @enderror"
                                            id="inputCategory">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->name }}">{{ $category->name }}</option>

                                            @endforeach
                                        </select>
                                        @error('category')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Product Rate</label>
                                                <input type="number"
                                                    class="form-control @error('product_rate')
                                            is-invalid
                                            @enderror"
                                                    placeholder="Input Product Rate" name="product_rate"
                                                    value="{{ $product->product_rate }}">
                                                @error('product_rate')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Stock <small
                                                        class="text-danger">*</small></label>
                                                <input required type="number"
                                                    class="form-control @error('stock')
                                            is-invalid
                                            @enderror"
                                                    placeholder="Input Product Stock" name="stock"
                                                    value="{{ $product->stock }}">
                                                @error('stock')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Weight (gr) <small
                                                        class="text-danger">*</small></label>
                                                <input required type="number"
                                                    class="form-control @error('weight')
                                            is-invalid
                                            @enderror"
                                                    placeholder="Input Product Weight" name="weight"
                                                    value="{{ $product->weight }}">
                                                @error('weight')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Condition <small
                                                        class="text-danger">*</small></label>
                                                <select required name="kondisi" id=""
                                                    class="form-control @error('kondisi')
                                            is-invalid
                                            @enderror">
                                                    <option value="" disabled selected>Select Condition</option>
                                                    <option value="new" @if ($product->kondisi == 'new') selected @endif>New</option>
                                                    <option value="preloved" @if ($product->kondisi == 'preloved') selected @endif>Preloved</option>
                                                </select>

                                                @error('kondisi')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Size</label>
                                                <select name="size[]" multiple style="width:100%"
                                                    class="form-control js-example-basic-single" id="inputsize">
                                                    @foreach ($sizes as $size)
                                                        <option value="{{ $size->size }}">{{ $size->size }}</option>

                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Color</label>
                                                <select name="color[]" multiple style="width:100%"
                                                    class="form-control js-example-basic-single" id="inputcolor">
                                                    @foreach ($colors as $color)
                                                        <option value="{{ $color->color }}">{{ $color->color }}
                                                        </option>

                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary" id="btnNext">Insert Image -></button>
                                    <input id="submit-hidden" type="submit" style="display: none" />
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                <div class="tab-pane image-pane fade" id="tabs-icons-text-2" role="tabpanel"
                                    aria-labelledby="tabs-icons-text-2-tab">
                                    
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupFileAddon01">Images Upload
                                                    <small class="text-danger">*</small></span>
                                            </div>
                                            <div class="custom-file">
                                                <input name="files[]" id='files' type='file' multiple
                                                    class="custom-file-input" id="inputGroupFile01"
                                                    aria-describedby="inputGroupFileAddon01">
                                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                            </div>
                                        </div>
                                        <span class="text-danger error-files d-none">Image Is Required</span>
                                        <output id='result' class="row" />
                                    </div>
                                    <hr>
                                       @livewire('dashboard.output-image', ['product' => $product])
                                    <button id="submitBtn" type="button" class="btn btn-primary">Submit</button>
                                    
                                </div>
                            </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

@endsection

@section('scripts')
    <script>
        $(document).ready(function() {

            SetClass();
            //data old
            
            $('#inputCategory').select2().val([
                @foreach ($product->product_category as $category_detail)
                    '{{ $category_detail->category->name }}',
                @endforeach
            ]).trigger('change');

            $('#inputsize').select2().val([
                @foreach ($product->product_size as $size_detail)
                    '{{ $size_detail->size->size }}',
                @endforeach
            ]).trigger('change');

            $('#inputcolor').select2().val([
                @foreach ($product->product_color as $color_detail)
                    '{{ $color_detail->color->color }}',
                @endforeach
            ]).trigger('change');

            $('#btnNext').on('click', function() {
                if (!$("#form")[0].checkValidity()) {
                    $("#form").find("#submit-hidden").click();
                } else {
                    $('#tabs-icons-text-2-tab').addClass('active');
                    localStorage.ClassActive = "active";
                    $('#tabs-icons-text-2').addClass('active show');
                    localStorage.ClassActiveShow = "active show";
                    $('#tabs-icons-text-1-tab').removeClass('active');
                    $('#tabs-icons-text-1').removeClass('active show');
                }
            });
            $('#tabs-icons-text-2-tab').on('click', function() {
                if (!$("#form")[0].checkValidity()) {
                    $("#form").find("#submit-hidden").click();
                } else {
                    $('#tabs-icons-text-2-tab').addClass('active');
                    localStorage.ClassActive = "active";
                    $('#tabs-icons-text-2').addClass('active show');
                    localStorage.ClassActiveShow = "active show";
                    $('#tabs-icons-text-1-tab').removeClass('active');
                    $('#tabs-icons-text-1').removeClass('active show');
                }
            });

            $('#tabs-icons-text-1-tab').on('click', function() {
                localStorage.removeItem('ClassActive');
                localStorage.removeItem('ClassActiveShow');

            });
            $('#submitBtn').on('click', function() {
                var valuePict = $('#files').val();
                if (!valuePict) {
                    $('.error-files').removeClass('d-none');
                    $('#files').addClass('is-invalid');
                } else {
                    $("#form").find("#submit-hidden").click();
                }
            });
            $('#files').on('click', function() {
                $('.error-files').addClass('d-none');
                $('#files').removeClass('is-invalid');

            });
            //inisiate select2
            $('.js-example-basic-single').select2({
                tags: true,
                placeholder: 'Select Or Create New Variant'
            });
            $('#inputCategory').select2({
                tags: true,
                placeholder: 'Input Multiple Value'
            });
            $('#desc').summernote({
                placeholder: 'Input Product Description',
                height: 150,
                toolbar: [
                    ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript',
                        'subscript', 'clear'
                    ]],
                    ['fontname', ['fontname']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ol', 'ul', 'paragraph', 'height']],
                    ['table', ['table']],
                    ['insert', ['link']],
                    ['view', ['undo', 'redo', 'fullscreen', 'codeview', 'help']]
                ]
            });



            window.onload = function() {
                //Check File API support
                let a = 1;
                if (window.File && window.FileList && window.FileReader) {
                    var filesInput = document.getElementById("files");
                    filesInput.addEventListener("change", function(event) {
                        var files = event.target.files; //FileList object
                        var output = document.getElementById("result");
                        for (var i = 0; i < files.length; i++) {
                            var file = files[i];
                            //Only pics
                            if (!file.type.match('image'))
                                continue;
                            var picReader = new FileReader();
                            picReader.addEventListener("load", function(event) {
                                var picFile = event.target;
                                var div = document.createElement("div");
                                div.className += "col-md-3 card img-output";
                                div.innerHTML = "<img class='thumbnail' src='" + picFile
                                    .result + "'" +
                                    "title='" + picFile.name + "'/>";
                                output.insertBefore(div, null);
                            });
                            //Read the image
                            picReader.readAsDataURL(file);
                        }
                    });
                } else {
                    console.log("Your browser does not support File API");
                }
            }

            function SetClass() {
            //before assigning class check local storage if it has any value
    $("#tabs-icons-text-2-tab").addClass(localStorage.ClassActive);
    $('#tabs-icons-text-2').addClass(localStorage.ClassActiveShow);

    $("#tabs-icons-text-1-tab").removeClass(localStorage.ClassActive);
    $('#tabs-icons-text-1').removeClass(localStorage.ClassActiveShow);
}
        });
    </script>
@endsection
