@extends('layouts.app')
@section('title')
    Profile Setting
@endsection
@section('styles')
    <style>
        div.img-output {
            width: 150px;
            height: 150px;
            overflow: hidden;
            margin: 10px;
            position: relative;
            border-radius: 10px;
        }

        img {
            object-fit: cover;
            "
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

    <!-- Page container -->
    <section class="container pt-3 pt-lg-4 pb-5 pb-lg-6">
        <div class="row pb-2 pb-lg-0">

            <!-- Account menu (sticky sidebar) -->
            @include('profile.layouts.sidemenu')

            <!-- Content -->
            <div class="col-lg-8 ms-auto">
                <div class="d-flex align-items-center justify-content-between mb-4 pb-1 pb-sm-3">
                    <h1 class="h2 mb-0">My profile</h1>
                    <button id="btnUserDelete" type="button" data-id="{{ Auth::user()->id }}" class="btn text-danger btn-link fs-base text-decoration-none pe-0" data-bs-toggle="modal" data-bs-target="#modalDefault">
                        <i class="ci-delete fs-lg mt-n1 me-2"></i>
                        Delete account
                    </button>

                </div>
                <form action="{{ Route('profile.setting.update',['setting'=>Auth::user()->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="bg-secondary rounded-3 p-4 mb-4">
                        <div class="d-flex align-items-center">
                            <label for="profile_picture">
                                <div class="img-output">
                                    <img class="rounded " style="cursor: pointer;"
                                        src="{{ Auth::user()->photoProfile }}"
                                        width="90" alt="Sanchia Jodie Mantra" id="output">
                                </div>

                            </label>
                            <div class="ps-3">
                                <input class="form-control mb-1 " type="file" name="photo_path" id="profile_picture"
                                    accept="image/*" onchange="loadFile(event)">
                                <div class="p mb-0 fs-ms text-muted">Upload JPG, GIF or PNG image. Ratio 1:1. Max size
                         
                            1024kb</div>
                            </div>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-sm-6 mb-4">
                            <label for="ac-fn" class="form-label-lg">Name</label>
                            <input type="text" id="ac-fn" class="form-control form-control-lg" name="name" value="{{ Auth::user()->name }}">
                        </div>
                        <div class="col-sm-6 mb-4">
                            <label for="ac-ln" class="form-label-lg">Store</label> 
                            @if (Auth::user()->store?->status == 'pending')
                            <span class="badge bg-secondary">Pending</span>
                            @elseif (Auth::user()->store?->status == 'verified')
                            <span class="badge bg-primary">Verified</span>
                            @elseif (Auth::user()->store?->status == 'rejected')
                            <span class="badge bg-danger">Rejected</span>
                            @else
                            <span class="badge bg-dark">Not Registered</span>
                            @endif  
                            <input type="text" id="ac-ln" class="form-control form-control-lg" @if(!Auth::user()->store) disabled @endif name="store_name" value="{{ Auth::user()->store->name ?? '-' }}">
                        </div>
                        <div class="col-sm-6 mb-4">
                            <label for="ac-email" class="form-label-lg">Email</label>
                            <input type="email" id="ac-email" class="form-control form-control-lg"
                                value="{{ Auth::user()->email }}" name="email">
                        </div>
                        <div class="col-sm-6 mb-4">
                            <label for="ac-phone" class="form-label-lg">Phone</label>
                            <input type="number" id="ac-phone" class="form-control form-control-lg" name="phone_number" value="{{ Auth::user()->phone_number }}">
                        </div>
                        {{-- <div class="col-sm-6 mb-4">
                            <label for="ac-password" class="form-label-lg">New Password</label>
                            <div class="password-toggle">
                                <input class="form-control form-control-lg" type="password" id="ac-password">
                                <label class="password-toggle-btn" aria-label="Show/hide password">
                                    <input class="password-toggle-check" type="checkbox">
                                    <span class="password-toggle-indicator"></span>
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <label for="ac-password-confirm" class="form-label-lg">New Password</label>
                            <div class="password-toggle">
                                <input class="form-control form-control-lg" type="password" id="ac-password-confirm">
                                <label class="password-toggle-btn" aria-label="Show/hide password">
                                    <input class="password-toggle-check" type="checkbox">
                                    <span class="password-toggle-indicator"></span>
                                </label>
                            </div>
                        </div> --}}
                        <div class="col-sm-6 mb-4">
                          <label for="ac-ln" class="form-label-lg">Birth Day</label>
                          <input type="date" name="birthday" id="ac-ln" class="form-control form-control-lg" value="{{ Auth::user()->birthday }}">
                      </div>
                        <div class="col-sm-6 mb-4">
                          <label for="ac-sex" class="form-label-lg">Gender</label>
                          <select name="sex" id="ac-sex" class="form-select form-select-lg">
                              <option value="" disabled selected>Choose Gender</option>
                              @foreach ($gender as $sex)
                              <option value={{ $sex }} @if(Auth::user()->sex == $sex) selected @endif>{{ $sex }}</option>    
                              @endforeach

                         
                          </select>
                      </div>

                        
                    <button type="submit" class="btn btn-primary btn-lg">&nbsp;Save changes&nbsp;</button>
                </form>
            </div>
        </div>
    </section>


    {{-- modal alert --}}

    <!-- Modal markup -->
 <!-- Default modal-->
 <div class="modal fade" id="modalDefault" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Alert</h4>
          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="fs-sm text-danger">Are You Sure To Delete Your Account? Your All Data Will Be Lost</p>
        </div>
        <div class="modal-footer">
            <form id="formDelete" action="" method="post">
                @csrf
                @method('delete')
          <button class="btn btn-secondary btn-sm" type="button" data-bs-dismiss="modal">Close</button>
          <button class="btn btn-danger btn-sm" type="submit">Delete</button>
        </form>

        </div>
      </div>
    </div>
  </div>
@endsection
@section('scripts')
    <script>

        $('#btnUserDelete').click(function(){
            var id = $(this).data('id');
            var url = '/profile/setting/'+id;
            $('#formDelete').attr('action',url);
        })
        
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>
@endsection
