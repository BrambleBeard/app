
@if(Session::has('flash_success'))
<div class="alert alert-success alert-fade-away">
  <p>{{ session('flash_success') }}</p>
</div>
@endif

@if(Session::has('flash_danger'))
<div class="alert alert-danger">
  <i class="fa fa-times close" data-dismiss="alert" aria-label="Close"></i>
  <p>{{ session('flash_danger') }}</p>
</div>
@endif

@if(Session::has('flash_info'))
<div class="alert alert-info">
  <i class="fa fa-times close" data-dismiss="alert" aria-label="Close"></i>
  <p>{{ session('flash_info') }}</p>
</div>
@endif
