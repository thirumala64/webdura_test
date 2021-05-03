@extends('layout.main')

@section('content')

	@if (Session::has('success'))
	    <div class="alert alert-info alert-block">
	      <button type="button" class="close" data-dismiss="alert">×</button> 
	      <strong>{{ Session::get('success') }}</strong>
	    </div>
    @endif
	<!-- Tabs navs -->
<ul class="nav nav-tabs mb-3" id="ex1" role="tablist">
  <li class="nav-item" role="presentation">
    <a
      class="nav-link {{ $status == 0 ? 'active' : '' }}"
      id="ex1-tab-1"
      data-mdb-toggle="tab"
      href="#ex1-tabs-1"
      role="tab"
      aria-controls="ex1-tabs-1"
      aria-selected="true"
      >Requests</a
    >
  </li>
  <li class="nav-item" role="presentation">
    <a
      class="nav-link {{ $status == 1 ? 'active' : '' }}"
      id="ex1-tab-2"
      data-mdb-toggle="tab"
      href="#ex1-tabs-2"
      role="tab"
      aria-controls="ex1-tabs-2"
      aria-selected="false"
      >Services</a
    >
  </li>
  <li class="nav-item" role="presentation">
    <a
      class="nav-link {{ $status == 2 ? 'active' : '' }}"
      id="ex1-tab-3"
      data-mdb-toggle="tab"
      href="#ex1-tabs-3"
      role="tab"
      aria-controls="ex1-tabs-3"
      aria-selected="false"
      >Payments</a
    >
  </li>
</ul>
<!-- Tabs navs -->

<!-- Tabs content -->
<div class="tab-content" id="ex1-content">
  <div class="tab-pane fade {{ $status == 0 ? 'show active' : '' }}" id="ex1-tabs-1" role="tabpanel" aria-labelledby="ex1-tab-1">
    	@include('bookings.pending')
  </div>
  <div class="tab-pane fade {{ $status == 1 ? 'show active' : '' }}" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
    	@include('bookings.services')
  </div>
  <div class="tab-pane fade {{ $status == 2 ? 'show active' : '' }}" id="ex1-tabs-3" role="tabpanel" aria-labelledby="ex1-tab-3">
    	@include('bookings.payments')
  </div>
</div>
<!-- Tabs content -->
<script>
    $("document").ready(function(){
        setTimeout(function(){
           $("div.alert").remove();
        }, 5000 ); 
    });
</script>

@endsection