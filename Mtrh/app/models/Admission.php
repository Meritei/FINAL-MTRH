 <?php namespace ;

use Eloquent;

class Admission extends Eloquent {
	
protected $table = 'admission_days';

protected $fillable = ['file_number',
'diagnosis',
'prescription',
'word_allocated',
'word_number',
'word_room',
'current_condition',
'comments',
'farther_test',
'farther_resuilts',
'relised_date']; 
	

}