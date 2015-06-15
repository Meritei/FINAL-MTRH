<?php

class InfoController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /info
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('info.index');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /info/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('info.create');
	}










	/**
	 * Store a newly created resource in storage.
	 * POST /info
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::(Input::all, ['file_number'=>'required', 'name'=>'required','id_number'=>'required',
		 'residence'=>'required', 'patient_phone_number'=>'required'
		, 'sex'=>'required', 'age'=>'required', 'marital_status'=>'required', 'next_of_keen'=>'required', 'keen_phone_number'=>'required' ,
		 'postal_address'=>'required', 'email'=>'required']);
        
        if($validator->fails())
           {
         return Redirect::back()->withInput()->withErrors($validation-messages());
           }

		$patientsinfos = new patients_info;
		$patientsinfos->file_number =Input :: get('file_number');
		$patientsinfos->name =Input :: get('name');
		$patientsinfos->id_number =Input :: get('id_number');
		$patientsinfos->residence =Input :: get('residence');
		$patientsinfos->patient_phone_number =Input :: get('patient_phone_number');
		$patientsinfos->sex =Input :: get('sex ');
		$patientsinfos->age =Input :: get('age');
		$patientsinfos->marital_status =Input :: get('marital_status');
		$patientsinfos->next_of_keen =Input :: get('keen_phone_number');
		$patientsinfos->keen_phone_number =Input :: get('keen_phone_number');
		$patientsinfos->email =Input :: get('email');
		$patientsinfos->save(); 

		return Redirect :: route ('booking.show');
	}

	/**
	 * Display the specified resource.
	 * GET /info/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($file_number)
	{
		$patientsinfos  = patients_info::wherefile_number($file_number);
		$patientsinfos ->file_number;
		$patientsinfos->name ;
		$patientsinfos->id_number;
		$patientsinfos->residence ;
		$patientsinfos->patient_phone_number;
		$patientsinfos->sex ;
		$patientsinfos->age ;
		$patientsinfos->marital_status ;
		$patientsinfos->next_of_keen ;
		$patientsinfos->keen_phone_number ;
		$patientsinfos->email ;
		
		
		return View::make('info.show' ,['info'=>$patientsinfo]);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /info/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($file_number)
	{
		$patientsinfos = patients_info::wherefile_number($file_number);

		$validator = Validator::(Input::all, ['file_number'=>'required']);
        
        if($validator->fails())
           {
         return Redirect::back()->withInput()->withErrors($validation-messages());
           }

        if($validator->fails())

           {
         return Redirect::back()->withInput()->withErrors($validation-messages());
           
		$patientsinfos->file_number =Input :: get('file_number');
		$patientsinfos->name =Input :: get('name');
		$patientsinfos->id_number =Input :: get('id_number');
		$patientsinfos->residence =Input :: get('residence');
		$patientsinfos->patient_phone_number =Input :: get('patient_phone_number');
		$patientsinfos->sex =Input :: get('sex ');
		$patientsinfos->age =Input :: get('age');
		$patientsinfos->marital_status =Input :: get('marital_status');
		$patientsinfos->next_of_keen =Input :: get('keen_phone_number');
		$patientsinfos->keen_phone_number =Input :: get('keen_phone_number');
		$patientsinfos->email =Input :: get('email');
		$patientsinfos->save();
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /info/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($file_number)
	{
		$patientsinfos = patients_info::wherefile_number($file_number);

		$validator = Validator::(Input::all, ['file_number'=>'required']);
        
        if($validator->fails())
           {
         return Redirect::back()->withInput()->withErrors($validation-messages());
           }

        if($validator->fails())

           {
         return Redirect::back()->withInput()->withErrors($validation-messages());
           
		$patientsinfos->file_number =Input :: get('file_number');
		$patientsinfos->name =Input :: get('name');
		$patientsinfos->id_number =Input :: get('id_number');
		$patientsinfos->residence =Input :: get('residence');
		$patientsinfos->patient_phone_number =Input :: get('patient_phone_number');
		$patientsinfos->sex =Input :: get('sex ');
		$patientsinfos->age =Input :: get('age');
		$patientsinfos->marital_status =Input :: get('marital_status');
		$patientsinfos->next_of_keen =Input :: get('keen_phone_number');
		$patientsinfos->keen_phone_number =Input :: get('keen_phone_number');
		$patientsinfos->email =Input :: get('email');
		$patientsinfos->save();
		return Redirect :: route ('info.index');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /info/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($file_number)
	{
		$patientsinfos = patients_info::wherefile_number($file_number);
        
        if($validator->fails())
           {
         return Redirect::back()->withInput()->withErrors($validation-messages());
           }
        $patientsinfos = patients_info::wherefile_number($file_number);
        $patientsinfos->delete();

		
		return Redirect :: route ('info.index');
	}

}