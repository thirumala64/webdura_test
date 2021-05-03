<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Service;
use App\Booking;
use View;
use Redirect;

class ServicesController extends Controller
{
    
    public function services(Request $request, $status=0)
    {	
    	$requests = Booking::join('services','services.id', '=', 'bookings.service_id')
    						->join('users', 'users.id','=','bookings.user_id')
    						->select('services.name as service_name', 'services.type','services.charge','services.description','bookings.schedules_date','bookings.schedules_time','bookings.status as status','users.name','users.location','users.address','services.id as service_id', 'bookings.id as booking_id')
    						->where('status',0)
    						->get();

    	$requests_services = $requests->unique('service_id');
    	$requests_new = $requests->groupby('service_id');

    	$services = Booking::join('services','services.id', '=', 'bookings.service_id')
    						->join('users', 'users.id','=','bookings.user_id')
    						->select('services.name as service_name', 'services.type','services.charge','services.description','bookings.schedules_date','bookings.schedules_time','bookings.status as status','users.name','users.location','users.address','services.id as service_id', 'bookings.id as booking_id')
    						->where('status',1)
    						->get();
    	$services_pending = $services->unique('service_id');
    	$services_new = $services->groupby('service_id');

    	$payment = Booking::join('services','services.id', '=', 'bookings.service_id')
    						->join('users', 'users.id','=','bookings.user_id')
    						->select('services.name as service_name', 'services.type','services.charge','services.description','bookings.schedules_date','bookings.schedules_time','bookings.status as status','users.name','users.location','users.address','services.id as service_id', 'bookings.id as booking_id')
    						->where('status',2)
    						->get();
    	$payment_pending = $payment->unique('service_id');
    	$payment_new = $payment->groupby('service_id');

   		return view('bookings.request', [ 'services_pending' => $services_pending, 'services_new'=>$services_new, 'payment_pending'=>$payment_pending,'payment_new'=>$payment_new, 'requests_services' => $requests_services, 'requests_new' => $requests_new, 'status' => $status]);
    }
    public function accept_request(Request $request, $booking_id)
    {
    	$booking = Booking::find($booking_id);
    	$booking->status = 1;
    	$booking->save();
    	$status = 1;

    	return redirect('/request/'.$status)->with('success', 'Request accepted successfully!');
    }
    public function accept_payment(Request $request, $booking_id)
    {
    	$booking = Booking::find($booking_id);
    	$booking->status = 2;
    	$booking->save();
    	$status = 2;

    	return redirect('/request/'.$status)->with('success', 'Innvoice is generated successfully!');
    }

    public function slotBooking (Request $request, $booking_id)
    {
    	$booking = Booking::find($booking_id);
    	$booking->status = 3;
    	$booking->save();

    	return redirect('/request')->with('success', 'Slot booked successfully!');
    }
}
