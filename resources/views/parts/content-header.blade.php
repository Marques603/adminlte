<div class="app-content-header py-3">
  <div class="container-fluid">
    <div class="row align-items-center">
      <div class="col-sm-6">
        @hasSection('page-title')
        <h3 class="mb-2">@yield('page-title')</h3>
        @endif

        @isset($breadcrumbs)
        <ol class="breadcrumb mb-0">
            @foreach ($breadcrumbs as $breadcrumb)
          <li class="breadcrumb-item"><a href="#">{{ $breadcrumb['label'] }}</a></li>
            @endforeach
        
        </ol>
        @endisset
      </div>
      <div class="col-sm-6 text-end">
    @yield('page-action')
        <div class="btn-group">
          
          <ul class="dropdown-menu dropdown-menu-end">
            @yield('header-actions-dropdown')
          </ul>
        </div>
    
      </div>
    </div>
  </div>
</div>

