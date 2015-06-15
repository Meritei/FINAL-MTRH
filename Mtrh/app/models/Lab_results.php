<?php

class Lab_results extends \Eloquent {
	
    protected $table = 'lab_results';

	protected $fillable = ['date','file_number',
'symptoms',
'test_done',
'observation',
'hiv_and_aids_status',
'full_resuilts',
'test_done_by'];
}