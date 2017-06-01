
@if(Session::has('flash_success'))
<div class="notification is-success alert-fade-away">
  <p>{{ session('flash_success') }}</p>
</div>
@endif

@if(Session::has('flash_danger'))
<div class="notification is-danger">
  <i class="fa fa-times close" ></i>
  <p>{{ session('flash_danger') }}</p>
  <button class="delete" data-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if(Session::has('flash_info'))
<div class="notification is-info">
  <p>{{ session('flash_info') }}</p>
  <button class="delete" data-dismiss="alert" aria-label="Close"></button>
</div>
@endif