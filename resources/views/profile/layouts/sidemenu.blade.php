<aside class="col-xl-3 col-lg-4 pb-3 mb-4 mb-lg-0">
    <div class="sidebar-sticky" data-sidebar-sticky-options='{
      "topSpacing": 120,
      "minWidth": 991
    }'>
        <div class="sidebar-sticky-inner">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-1">{{ Str::limit(Auth::user()->name, 25, '...') }}</h5>
                    <p class="card-text text-muted mb-lg-0">{{ Auth::user()->email }}</p>
                    @if (!Route::is('profile.store.create') && !Auth::user()->store)
                   <span class="card-text mb-lg-0 text-primary" style="font-size: 13px">Join As Seller? <span><a href="{{ Route('profile.store.create') }}" class="text-dark">Click Here</a></span>   </span>
                   @endif
                    <a href="#account-menu" class="btn btn-primary d-block w-100 d-lg-none"
                        data-bs-toggle="collapse">Account Menu</a>
                </div>
                <div id="account-menu" class="collapse d-lg-block">
                    <div class="list-group list-group-flush border-top">
                        <a href="{{ Route('profile.setting.index') }}"
                            class="list-group-item list-group-item-action d-flex align-items-center @if(Route::is('profile.setting.index')) active @endif">
                            <i class="ci-profile fs-lg me-2"></i>
                            <span>My profile</span>
                        </a>
                        @if (Auth::user()->store)
                        <a href="{{ Route('profile.store.index') }}"
                        class="list-group-item list-group-item-action d-flex align-items-center @if(Route::is('profile.store.index')) active @endif">
                        <i class="ci-grid fs-lg me-2"></i>
                        <span>My Store</span>
                    </a>
                        @endif
                        
                        <a href="account-orders.html"
                            class="list-group-item list-group-item-action d-flex align-items-center">
                            <i class="ci-bag fs-lg me-2"></i>
                            <span>My orders</span>
                        </a>
                        <a href="account-recently-viewed.html"
                            class="list-group-item list-group-item-action d-flex align-items-center">
                            <i class="ci-map-pin-outline fs-lg me-2"></i>
                            <span>Adress</span>
                        </a>
                        <a href="account-reviews.html"
                            class="list-group-item list-group-item-action d-flex align-items-center">
                            <i class="ci-star fs-lg me-2"></i>
                            <span>My reviews</span>
                        </a>
                        <a href="{{ Route('profile.logout') }}" class="list-group-item list-group-item-action d-flex align-items-center">
                            <i class="ci-logout fs-lg me-2"></i>
                            <span>Sign out</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>