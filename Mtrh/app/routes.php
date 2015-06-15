<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('Welcome', array('uses' =>'welcomecontroller@index'));

Route::resource('admission','AdmissionController');

Route::resource('booking','BookingController');

Route::resource('consultation','ConsultationController');

Route::resource('diagnosis','DiagnosisController');

Route::resource('file','FileController');

Route::resource('lab','LabController');

Route::resource('status','StatusController');

Route::resource('info','InfoController');

Route::resource('payment','PaymentController');

Route::resource('pharmacy','PharmacyController');

/*Route::get('admission.index ', array('uses' =>'AdmissionController@index '));
Route::get('admission.create', array('uses' =>'AdmissionController@create '));
Route::get('admission.store', array('uses' =>'AdmissionController@store '));
Route::get('admission.show', array('uses' =>'AdmissionController@show '));
Route::get('admission.edit', array('uses' =>'AdmissionController@edit '));
Route::get('admission.update', array('uses' =>'AdmissionController@update '));
Route::get('admission.destroy', array('uses' =>'AdmissionController@destroy '));


Route::get(' booking.index ', array('uses' =>'BookingController@index'));
Route::get(' booking.create ', array('uses' =>'BookingController@create'));
Route::get(' booking.store ', array('uses' =>'BookingController@store'));
Route::get(' booking.show ', array('uses' =>'BookingController@show'));
Route::get(' booking.edit ', array('uses' =>'BookingController@edit'));
Route::get(' booking.update ', array('uses' =>'BookingController@update'));
Route::get(' booking.destroy ', array('uses' =>'BookingController@destroy'));


Route::get(' consultation.index ', array('uses' =>'ConsultationController@index'));
Route::get(' consultation.create ', array('uses' =>'ConsultationController@create'));
Route::get(' consultation.store ', array('uses' =>'ConsultationController@store'));
Route::get(' consultation.show ', array('uses' =>'ConsultationController@show'));
Route::get(' consultation.edit ', array('uses' =>'ConsultationController@edit'));
Route::get(' consultation.update ', array('uses' =>'ConsultationController@update'));
Route::get(' consultation.destroy ', array('uses' =>'ConsultationController@destroy'));


Route::get('diagnosis.index', array('uses' =>'welcomecontroller@index'));
Route::get('diagnosis.create', array('uses' =>'welcomecontroller@create'));
Route::get('diagnosis.store', array('uses' =>'welcomecontroller@store'));
Route::get('diagnosis.show', array('uses' =>'welcomecontroller@show'));
Route::get('diagnosis.edit', array('uses' =>'welcomecontroller@edit'));
Route::get('diagnosis.update', array('uses' =>'welcomecontroller@update'));
Route::get('diagnosis.destroy', array('uses' =>'welcomecontroller@destroy'));



Route::get('file.index  ', array('uses' =>'FileController@index'));
Route::get('file.create  ', array('uses' =>'FileController@create'));
Route::get('file.store  ', array('uses' =>'FileController@store'));
Route::get('file.show  ', array('uses' =>'FileController@show'));
Route::get('file.edit  ', array('uses' =>'FileController@edit'));
Route::get('file.update  ', array('uses' =>'FileController@update'));
Route::get('file.destroy  ', array('uses' =>'FileController@destroy'));


Route::get('lab.index ', array('uses' =>'LabController@index'));
Route::get('lab.create ', array('uses' =>'LabController@create'));
Route::get('lab.store ', array('uses' =>'LabController@store'));
Route::get('lab.show ', array('uses' =>'LabController@show'));
Route::get('lab.edit ', array('uses' =>'LabController@edit'));
Route::get('lab.update ', array('uses' =>'LabController@update'));
Route::get('lab.destroy ', array('uses' =>'LabController@destroy'));



Route::get('status.index ', array('uses' =>'StatusController@index'));
Route::get('status.create ', array('uses' =>'StatusController@create'));
Route::get('status.store ', array('uses' =>'StatusController@store'));
Route::get('status.show ', array('uses' =>'StatusController@show'));
Route::get('status.edit ', array('uses' =>'StatusController@edit'));
Route::get('status.update ', array('uses' =>'StatusController@update'));
Route::get('status.destroy ', array('uses' =>'StatusController@destroy'));


Route::get('info.index', array('uses' =>'InfoController@index '));
Route::get('info.create', array('uses' =>'InfoController@create '));
Route::get('info.store', array('uses' =>'InfoController@store '));
Route::get('info.show', array('uses' =>'InfoController@show '));
Route::get('info.edit', array('uses' =>'InfoController@edit '));
Route::get('info.update', array('uses' =>'InfoController@update '));
Route::get('info.destroy', array('uses' =>'InfoController@destroy '));


Route::get(' payment.index', array('uses' =>' PaymentController@index '));
Route::get('payment.create', array('uses' =>' PaymentController@create '));
Route::get('payment.store', array('uses' =>' PaymentController@store '));
Route::get('payment.show', array('uses' =>' PaymentController@show '));
Route::get('payment.edit', array('uses' =>' PaymentController@edit '));
Route::get('payment.update', array('uses' =>' PaymentController@update '));
Route::get('payment.destroy', array('uses' =>' PaymentController@destroy '));



Route::get('pharmacy.index ', array('uses' =>'PharmacyController@index '));
Route::get('pharmacy.create', array('uses' =>'PharmacyController@create '));
Route::get('pharmacy.store', array('uses' =>'PharmacyController@store '));
Route::get('pharmacy.show', array('uses' =>'PharmacyController@show '));
Route::get('pharmacy.edit', array('uses' =>'PharmacyController@edit '));
Route::get('pharmacy.update', array('uses' =>'PharmacyController@update '));
Route::get('pharmacy.destroy', array('uses' =>'PharmacyController@destroy '));
*/