<?php

class PaymentController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /payment
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('payment.index');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /payment/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('payment.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /payment
	 *
	 * @return Response
	 */

	/*file_number',
'lab_charges',
'consultation_fee',
'medication_fee',
'admition_fee',
'total_amound',
'amound_paid',
'balance'*/

/*file_number
lab_charges
consultation_fee
medication_fee
total_amound
amound_paid
balance*/


	public function store()
	{
		$validator = Validator::(Input::all, ['name'=>'required','lab_charges'=>'required','consultation_fee'=>'required',
			'medication_fee'=>'required','total_amound'=>'required','amound_paid'=>'required''balance'=>'required']);
        
        if($validator->fails())
           {
         return Redirect::back()->withInput()->withErrors($validation-messages());
           }

		$Payments = new Payment;
		$Payments->file_number =Input :: get('file_number');
		$Payments->lab_charges =Input :: get('lab_charges');
		$Payments->consultation_fee =Input :: get('consultation_fee');
		$Payments->medication_fee =Input :: get('medication_fee');
		$Payments->total_amound =Input :: get('total_amound');
		$Payments->amound_paid =Input :: get('amound_paid');
		$Payments->balance =Input :: get('balance');
		$Payments->save(); 

		return Redirect :: route ('payment.index');;
	}

	/**
	 * Display the specified resource.
	 * GET /payment/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($file_number)
	{
		$Payments = Payment::wherefile_number($file_number)->first();
        $Payments->lab_charges ;
		$Payments->consultation_fee ;
		$Payments->medication_fee ;
		$Payments->total_amound ;
		$Payments->amound_paid ;
		$Payments->balance ;
		
		return View::make('payment.show' ,['payment'=>$Payments]);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /payment/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($file_number)
	{
		 $validator = Validator::(Input::all, ['name'=>'required','lab_charges'=>'required','consultation_fee'=>'required',
			'medication_fee'=>'required','total_amound'=>'required','amound_paid'=>'required''balance'=>'required']);
        
        if($validator->fails())
           {
         return Redirect::back()->withInput()->withErrors($validation-messages());
           }

        $Payments->file_number =Input :: get('file_number');
		$Payments->lab_charges =Input :: get('lab_charges');
		$Payments->consultation_fee =Input :: get('consultation_fee');
		$Payments->medication_fee =Input :: get('medication_fee');
		$Payments->total_amound =Input :: get('total_amound');
		$Payments->amound_paid =Input :: get('amound_paid');
		$Payments->balance =Input :: get('balance');
		$Payments->save();


		return View::make('payment.edit');
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /payment/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($file_number)
	{
		
		 $validator = Validator::(Input::all, ['name'=>'required','lab_charges'=>'required','consultation_fee'=>'required',
			'medication_fee'=>'required','total_amound'=>'required','amound_paid'=>'required''balance'=>'required']);
        
        if($validator->fails())
           {
         return Redirect::back()->withInput()->withErrors($validation-messages());
           }

        $Payments->file_number =Input :: get('file_number');
		$Payments->lab_charges =Input :: get('lab_charges');
		$Payments->consultation_fee =Input :: get('consultation_fee');
		$Payments->medication_fee =Input :: get('medication_fee');
		$Payments->total_amound =Input :: get('total_amound');
		$Payments->amound_paid =Input :: get('amound_paid');
		$Payments->balance =Input :: get('balance');
		$Payments->save();


		return View::make('payment.edit');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /payment/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($file_number)
	{
		$validator = Validator::(Input::all, ['file_number'=>'required']);
        
        if($validator->fails())
           {
         return Redirect::back()->withInput()->withErrors($validation-messages());
           }
       $Payments = Payment::wherefile_number($file_number)->first();
        $Payments->lab_charges ;
		$Payments->consultation_fee ;
		$Payments->medication_fee ;
		$Payments->total_amound ;
		$Payments->amound_paid ;
		$Payments->balance ;
        $Payments->delete();

		
		return Redirect :: route ('file.index');
		
	}

}