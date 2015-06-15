<?php namespace ;

use Eloquent;

class Numfile extends Eloquent {
protected $table = 'file';

protected $fillable = ['file_number',
'name'];

}