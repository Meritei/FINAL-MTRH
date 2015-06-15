<?php

class ConsultationController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /consultation
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('consultation.index');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /consultation/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('consultation.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /consultation
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::(Input::all, ['file_number'=>'required', 'doctor_assigned'=>'required','symptoms'=>'required' ]);
        
        if($validator->fails())
           {
         return Redirect::back()->withInput()->withErrors($validation-messages());
           }

		$Consultations= new Consultation;
		$Consultations->file_number =Input :: get('file_number');
		$Consultations->doctor_assigned =Input :: get('doctor_assigned');
		$Consultations->symptoms =Input :: get('symptoms');
		$Consultations->save(); 

		return Redirect :: route ('consultation.show');
	}

	/**
	 * Display the specified resource.
	 * GET /consultation/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($file_number)
	{
		$Consultations = Consultation::wherefile_number($file_number);
		$Consultations->file_number;
		$Consultations->doctor_assigned;
		$Consultations->symptoms;
		
		return View::make('consultation.show' ,['consultation'=>$Consultations]);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /consultation/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($file_number)
	{
		
		$Consultations = Consultation::wherefile_number($file_number);

	    $validator = Validator::(Input::all, ['file_number'=>'required' ]);
        
        
        if($validator->fails())
           {
         return Redirect::back()->withInput()->withErrors($validation-messages());
           }

        if($validator->fails())

           {
         return Redirect::back()->withInput()->withErrors($validation-messages());
           
		$Consultations->file_number =Input :: get('file_number');

		$Consultations->section_to_visit =Input :: get('section_to_visit');

		$Consultations->symptoms =Input :: get('symptoms');

		$Consultations->save(); 



		return View::make('.edit'); 
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /consultation/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($file_number)
	{
		$Consultations = Consultation::wherefile_number($file_number);

	     $validator = Validator::(Input::all, ['file_number'=>'required' ]);
        
        
        if($validator->fails())
           {
         return Redirect::back()->withInput()->withErrors($validation-messages());
           }

        if($validator->fails())

           {
         return Redirect::back()->withInput()->withErrors($validation-messages());
           
		$Consultations->file_number =Input :: get('file_number');

		$Consultations->section_to_visit =Input :: get('section_to_visit');

		$Consultations->symptoms =Input :: get('symptoms');

		$Consultations->save(); 



		return View::make('consultation.show');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /consultation/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($file_number)
	{
		$validator = Validator::(Input::all, ['$file_number'=>'required']);
        
        if($validator->fails())
           {
         return Redirect::back()->withInput()->withErrors($validation-messages());
           }
        $Consultations = Consultation::wherefile_number($file_number);
        $Consultations->delete();

		
		return Redirect :: route ('booking.index');
	}

}