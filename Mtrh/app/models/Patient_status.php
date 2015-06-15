 <?php

class Patient_status extends \Eloquent {

    protected $table = 'patient_status';

	protected $fillable = ['file_number',
'diagnosis',
'prescription',
'How_am_fearing',
'patient_phone_number',
'email',
'mail_text'];
}