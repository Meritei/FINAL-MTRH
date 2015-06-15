<?php

class Consultation extends \Eloquent {

    protected $table = 'Consultation';

	protected $fillable = ['file_number',
'doctor_assigned',
'symptoms'];
}