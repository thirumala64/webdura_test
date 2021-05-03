<div class="container-xl">
	<div class="row">
		<div class="col-md-10 mx-auto">
			<div id="myCarouselPayment" class="carousel slide" data-ride="carousel" data-interval="0">
				<!-- Carousel indicators -->
				<div class="fix-carousel">
					<ol class="carousel-indicators carosuel-set">
						@foreach($payment_pending as $key => $request)
					       <li data-target="#myCarouselPayment" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
					    @endforeach
					</ol>  
				</div> 
				<!-- Wrapper for carousel items -->
				<div class="carousel-inner">
					@if(count($payment_pending) > 0 )
					@foreach($payment_pending as $key => $request)
					<div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
						<div class="row" >
							<div class="col-md-12">
								<div class="thumb-wrapper">
								<div class="row left" >
									<div class="img-box">
										<img src="../../assets/carousel/carousel1.png" class="img-fluid" alt="">
									</div>
								</div>
								<div class="row right" >
									<div class="thumb-content">
										<h3>{{ $request->service_name }}</h3>
										<h6>{{ $request->type }}</h6>
										<p>{{ $request->description }}</p>
										<p>For one session &nbsp &nbsp  <b>${{ $request->charge }}</b></p>
									</div>
									</div>	
									</div>					
								</div>
							</div>
							@foreach($payment_new[$request->service_id] as $keys => $bookings)
							<div class="card margin">
							    <div class="card-body">
								    <h5 class="card-title">
								    </h5>
									<div class="row left" >
										<h6 class="card-text" >
								    	@if( $bookings->status == 0)
								    		Pending Request	
								    	@elseif( $bookings->status == 1)
								    		Upcoming Service
								    	@elseif( $bookings->status == 2)
								    		Pending Payment
								    	@else
								    		Slot Booked
								    	@endif
								    	</h6>
								    	<p><?php echo now();?></p>
										<div class="img-box" >
			                                <img src="../../assets/icon.png" alt="user-img" class="avatar rounded-circle mb-1" style="max-width: 25%">
			                            </div>
			                            <p class="card-text p-text">Service is complete, please confirm payment amount:</p>
				                    </div>
								    <div class="row right" >
								    	<div class="stepwizard">
										    <div class="stepwizard-row setup-panel">
										        <div class="stepwizard-step">
										            <a href="#" type="button" class="btn btn-default btn-circle">1</a>
										            <p>Requests</p>
										        </div>
										        <div class="stepwizard-step">
										            <a href="#" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
										            <p>Services</p>
										        </div>
										        <div class="stepwizard-step">
										            <a href="#" type="button" class="btn btn-primary btn-circle" disabled="disabled">3</a>
										            <p>Payments</p>
										        </div>
										    </div>
										</div>
				                        <b>Invoice Item:</b>
									    <p>Session Price</p>
										<br>
									    <b>$ {{ $request->charge }}</b>
									</div>
									<a href="#" class="btn btn-primary">Start a Chart</a>
									<a href="/slot-booking/{{$request->booking_id}} " class="btn btn-primary">Resend Invoice</a>
								</div>
							</div>
							@endforeach
							<p class="margin">No more service requests</p>
						</div>
					@endforeach
					@else
					<p>No services available</p>
					@endif
				</div>
			</div>
		</div>
	</div>
</div>