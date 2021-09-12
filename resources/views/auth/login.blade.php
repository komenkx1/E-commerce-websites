<div>
    <!-- Sign in modal-->
    <div class="modal fade" id="modal-signin" tabindex="-1" wire:ignore.self>
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-0">
                @if ($mode != 'register')
                    <!-- Sign in form -->
                    <div class="view   @if ($mode != 'register')show @endif" id="modal-signin-view" wire:ignore.self>
                        <div class="modal-header border-0 pb-0 px-md-5 px-4 d-block position-relative">
                            <h3 class="modal-title mt-4 mb-0 text-center">Sign in</h3>
                            <button type="button" class="btn-close position-absolute" style="top: 1.5rem; right: 1.5rem;"
                                data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body px-md-5 px-4">
                            <p class="fs-sm text-muted text-center">Sign in to your account using email and password
                                provided during registration.</p>
                            <form class="needs-validation" novalidate wire:submit.prevent='login'>
                                <div class="mb-4">
                                    <label for="signin-email" class="form-label-lg">Email</label>
                                    <input wire:model='model.email' type="email"
                                        class="form-control  @error('email')
                is-invalid
                @enderror"
                                        id="signin-email" placeholder="Your email address" required>
                                    @error('email')
                                        <span class="invalid-feedback"> {{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label class="form-label-lg" for="signin-password">Password</label>
                                    <div class="password-toggle">
                                        <input wire:model='model.password'
                                            class="form-control @error('password')
                  is-invalid
                  @enderror"
                                            type="password" id="signin-password" value="hidden@password">
                                        <label class="password-toggle-btn" aria-label="Show/hide password">
                                            <input class="password-toggle-check" type="checkbox">
                                            <span class="password-toggle-indicator"></span>
                                        </label>
                                        @error('password')
                                            <span class="invalid-feedback"> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <div class="form-check">
                                        <input wire:model='model.remember' type="checkbox" class="form-check-input"
                                            id="remember-me" checked>
                                        <label for="remember-me" class="form-check-label fs-base">Remember me</label>
                                    </div>
                                    <a href="{{ Route('password.forgot') }}" class="fs-sm text-decoration-none">Forgot
                                        password?</a>
                                </div>
                                <input type="hidden" wire:model="mode" value="login">
                                <button type="submit" class="btn btn-primary d-block w-100">Sign in</button>
                                <p class="fs-sm pt-4 mb-0">
                                    Don't have an account?
                                    <a href="#" wire:click="is_register('register')"
                                        class="fw-bold text-decoration-none" data-view="#modal-signup-view">Sign up</a>
                                </p>
                            </form>
                        </div>
                    </div>

                @else
                    <!-- Sign up form -->
                    <div class="view show" id="modal-signup-view" wire:ignore.self>
                        <div class="modal-header border-0 pb-0 px-md-5 px-4 d-block position-relative">
                            <h3 class="modal-title mt-4 mb-0 text-center">Sign up</h3>
                            <button type="button" class="btn-close position-absolute"
                                style="top: 1.5rem; right: 1.5rem;" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body px-md-5 px-4">
                            <p class="fs-sm text-muted text-center">Sign in to your account using email and password
                                provided during registration.</p>
                            <form class="needs-validation" novalidate wire:submit.prevent='register'>
                                <div class="mb-4">
                                    <label for="signup-name" class="form-label-lg">Full name</label>
                                    <input type="text" wire:model="model.name"
                                        class="form-control @error('name')
                is-invalid
                @enderror"
                                        id="signup-name" placeholder="Your full name" required>
                                    @error('name')
                                        <span class="invalid-feedback"> {{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="signup-email" class="form-label-lg">Email</label>
                                    <input type="email" wire:model="model.email"
                                        class="form-control @error('email')
                is-invalid
                @enderror"
                                        id="signup-email" placeholder="Your email address" required>
                                    @error('email')
                                        <span class="invalid-feedback"> {{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" class="form-label-lg"
                                        for="signup-password">Password</label>
                                    <div class="password-toggle">
                                        <input
                                            class="form-control @error('password')
                  is-invalid
                  @enderror"
                                            wire:model="model.password" type="password" id="signup-password">
                                        <label class="password-toggle-btn" aria-label="Show/hide password">
                                            <input class="password-toggle-check" type="checkbox">
                                            <span class="password-toggle-indicator"></span>
                                        </label>
                                        @error('password')
                                            <span class="invalid-feedback"> {{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>
                                <div class="mb-4">
                                    <label class="form-label" class="form-label-lg"
                                        for="signup-confirm-password">Password</label>
                                    <div class="password-toggle">
                                        <input wire:model="model.password_confirmation"
                                            class="form-control @error('password_confirmation')
                  is-invalid
                  @enderror"
                                            type="password" id="signup-confirm-password">
                                        <label class="password-toggle-btn" aria-label="Show/hide password">
                                            <input class="password-toggle-check" type="checkbox">
                                            <span class="password-toggle-indicator"></span>
                                        </label>
                                    </div>
                                    @error('password_confirmation')
                                        <span class="invalid-feedback"> {{ $message }}</span>
                                    @enderror
                                </div>
                                <input type="hidden" wire:model="mode" value="register">

                                <button class="btn btn-primary d-block w-100" type="submit">Sign up</button>
                                <p class="fs-sm pt-4 mb-0">Already have an account?
                                    <a href="#" wire:click="is_register('login')" class="fw-bold text-decoration-none"
                                        data-view="#modal-signin-view">Sign in</a>
                                </p>
                            </form>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>

</div>

@push('scripts')
    <script>
        window.livewire.on('refresh', component => {
            ! function() {
                "use strict";
                var e, t, r, a, n, o, l, s;
                null != (r = document.querySelector(".navbar-sticky")) && (e = r.classList, t = r.offsetHeight, e
                        .contains("navbar-floating") && e.contains("navbar-dark") ? window.addEventListener(
                            "scroll",
                            function(e) {
                                500 < e.currentTarget.pageYOffset ? (r.classList.remove("navbar-dark"), r.classList
                                    .add("navbar-light"), r.classList.add("navbar-stuck")) : (r.classList
                                    .remove("navbar-stuck"), r.classList.remove("navbar-light"), r.classList
                                    .add("navbar-dark"))
                            }) : e.contains("navbar-floating") && e.contains("navbar-light") ? window
                        .addEventListener("scroll", function(e) {
                            500 < e.currentTarget.pageYOffset ? r.classList.add("navbar-stuck") : r.classList
                                .remove("navbar-stuck")
                        }) : window.addEventListener("scroll", function(e) {
                            500 < e.currentTarget.pageYOffset ? (document.body.style.paddingTop = t + "px", r
                                .classList.add("navbar-stuck")) : (document.body.style.paddingTop = "", r
                                .classList.remove("navbar-stuck"))
                        })),

                    function() {
                        for (var r = document.querySelectorAll(".password-toggle"), e = 0; e < r.length; e++) !
                            function(e) {
                                var t = r[e].querySelector(".form-control");
                                r[e].querySelector(".password-toggle-btn").addEventListener("click", function(e) {
                                    "checkbox" === e.target.type && (e.target.checked ? t.type = "text" : t
                                        .type = "password")
                                }, !1)
                            }(e)
                    }()
            }();

        });
    </script>
@endpush
