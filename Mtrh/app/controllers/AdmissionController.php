<?php

class AdmissionController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /admission
	 *
	 * @return Response
	 */
	public function index()
	{
		
		
		return View::make('admission.index');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /admission/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admission.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /admission
	 * @return Response
	 */
	public function store()
	{
	     $validator = Validator::(Input::all, ['file_number'=>'required','word_number'=>'required','word_room'=>'required','word_allocated'=>'required','prescription'=>'required','diagnosis'=>'required','relised_date'=>'required',
	     'farther_resuilt'=>'required','farther_test'=>'required','comments'=>'required','current_condition'=>'required']);
        
        if($validator->fails())
           {
         return Redirect::back()->withInput()->withErrors($validation-messages());
           }

		$Admissions = new Admission;
		$Admissions->file_number =Input :: get('file_number');
		$Admissions->word_number =Input :: get('word_number');
		$Admissions->word_room =Input :: get('word_room');
		$Admissions->word_allocated =Input :: get('word_allocated');
		$Admissions->prescription =Input :: get('prescription');
		$Admissions->diagnosis =Input :: get('diagnosis');
		$Admissions->relised_date =Input :: get('relised_date');
		$Admissions->farther_resuilts=Input :: get('farther_resuilt');
		$Admissions->farther_test =Input :: get('farther_test');
		$Admissions->comments =Input :: get('comments');
		$Admissions->current_condition =Input :: get('current_condition');
		$Admissions->save(); 

		return Redirect :: route ('admission.show');
 
	}

	/**
	 * Display the specified resource.
	 * GET /admission/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($file_number)
	{
		 $Admissions = Admission::wherefile_number($file_number);
		 $Admissions->file_number;
		 $Admissions->word_number;
		 $Admissions->word_room ;
		 $Admissions->word_allocated ;
		 $Admissions->prescription;
		 $Admissions->diagnosis ;
		 $Admissions->relised_date ;
		 $Admissions->farther_resuilts;
		 $Admissions->farther_test ;
		 $Admissions->comments ;
		 $Admissions->current_condition ;



		
		return View::make('admission.show' ,['Admission'=>$Admissions]);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /admission/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($file_number)
	{
		 
	      $Admissions = Admission::wherefile_number($file_number);
		
		return View::make('admission.show' ,['Admission'=>$Admissions]);

		$validator = Validator::(Input::all, ['$file_number'=>'required']);

        if($validator->fails())

           {
         return Redirect::back()->withInput()->withErrors($validation-messages());
           
		$Admissions->file_number =Input :: get('file_number');
		$Admissions->word_number =Input :: get('word_number');
		$Admissions->word_room =Input :: get('word_room');
		$Admissions->word_allocated =Input :: get('word_allocated');
		$Admissions->prescription =Input :: get('prescription');
		$Admissions->diagnosis =Input :: get('diagnosis');
		$Admissions->relised_date =Input :: get('relised_date');
		$Admissions->farther_resuilts=Input :: get('farther_resuilt');
		$Admissions->farther_test =Input :: get('farther_test');
		$Admissions->comments =Input :: get('comments');
		$Admissions->current_condition =Input :: get('current_condition');
		$Admissions->save(); 



		return View::make('admission.edit'); 
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /admission/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($file_number)
	{

		$Admissions = Admission::wherefile_number($file_number);

		 $validator = Validator::(Input::all, ['file_number'=>'required']);
        

        if($validator->fails())

           {
         return Redirect::back()->withInput()->withErrors($validation-messages());
           }

		$Admissions->file_number =Input :: get('file_number');
		$Admissions->word_number =Input :: get('word_number');
		$Admissions->word_room =Input :: get('word_room');
		$Admissions->word_allocated =Input :: get('word_allocated');
		$Admissions->prescription =Input :: get('prescription');
		$Admissions->diagnosis =Input :: get('diagnosis');
		$Admissions->relised_date =Input :: get('relised_date');
		$Admissions->farther_resuilts=Input :: get('farther_resuilt');
		$Admissions->farther_test =Input :: get('farther_test');
		$Admissions->comments =Input :: get('comments');
		$Admissions->current_condition =Input :: get('current_condition');
		$Admissions->save(); 



		return View::make('admission.update'); 
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /admission/{id}
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
        $admissions = Admission::wherefile_number($file_number)->first();
        $admissions->delete();

		
		return Redirect :: route ('admission.index');
	}

}