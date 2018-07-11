 @if(Session::has('success_message'))
    <div class="alert alert-success alert-dismissible">
    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
     	<h4><i class="icon fa fa-check"></i> Success!</h4>
        {{ Session::get('success_message') }}
    </div>
@endif
@if(Session::has('error_message'))
	<div class="alert alert-danger alert-dismissible">
    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    	<h4><i class="icon fa fa-ban"></i> Error!</h4>
        {{ Session::get('error_message') }}
  </div>
@endif
@if(Session::has('info_message'))
	<div class="alert alert-info alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-info"></i> Info!</h4>
        {{ Session::get('info_message') }}
    </div>
@endif
@if(Session::has('warning_message'))
	<div class="alert alert-warning alert-dismissible">
    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    	<h4><i class="icon fa fa-warning"></i> Warning!</h4>
        {{ Session::get('warning_message') }}
  	</div>
@endif
