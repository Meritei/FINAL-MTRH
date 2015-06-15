<?php

class Payment extends \Eloquent {

	protected $table = 'Payment';

	protected $fillable = ['file_number',
'lab_charges',
'consultation_fee',
'medication_fee',
'admition_fee',
'total_amound',
'amound_paid',
'balance'];
}