<?php

class Diagnosis extends \Eloquent {

    protected $table = 'Diagnosis';
    
//i've addded file_number to table

	protected $fillable = ['file_number','diagnosis',
'prescription',
'comments'];
}