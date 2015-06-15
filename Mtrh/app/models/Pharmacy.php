<?php

class Pharmacy extends \Eloquent {
    
    protected $table = 'Pharmacy';

	protected $fillable = ['file_number',
'diagnosis',
'prescription',
'drugs_given'];
}