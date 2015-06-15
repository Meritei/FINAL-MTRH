<?php namespace ;

use Eloquent;

class Booking extends Eloquent {

	
protected $table = 'booking_appointment';

protected $fillable = ['file_number',
'section_to_visit',
'doctor_assigned'];

}