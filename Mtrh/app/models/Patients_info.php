<?php

class Patients_info extends \Eloquent {

    protected $table = 'patients_info';

	protected $fillable = ['file_number',
'name',
'id_number',
'residence',
'patient_phone_number',
'sex',
'age',
'marital_status',
'next_of_keen',
'keen_phone_number',
'postal_address',
'email'];




}