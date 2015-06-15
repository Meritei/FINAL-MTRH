<?php

class DiagnosisController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /diagnosis
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('diagnosis.index');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /diagnosis/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('diagnosis.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /diagnosis
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

		$Diagnosis= new Diagnosis;
		$Diagnosis->file_number =Input :: get('file_number');
		$Diagnosisions->diagnosis =Input :: get('diagnosis');
		$Diagnosis->prescription =Input :: get('prescription');
		$Diagnosis->comments =Input :: get('comments');
		$Diagnosis>save(); 

		return Redirect :: route ('diagnosis.show');
	}

	/**
	 * Display the specified resource.
	 * GET /diagnosis/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($file_number)
	{
		$Diagnosis = Diagnosis::wherefile_number($file_number);
		$Diagnosis ->file_number ;
		$Diagnosisions->diagnosis;
		$Diagnosis->prescription;
		$Diagnosis->comments;
		
		return View::make('diagnosis.show' ,['diagnosis'=>$Diagnosis]);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /diagnosis/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($file_number)
	{
		
		$Diagnosis = Diagnosis::wherefile_number($file_number);

	    $validator = Validator::(Input::all, ['file_number'=>'required' ]);
        
        
        if($validator->fails())
           {
         return Redirect::back()->withInput()->withErrors($validation-messages());
           }

        if($validator->fails())

           {
         return Redirect::back()->withInput()->withErrors($validation-messages());
           
		

		$Diagnosis->file_number =Input :: get('file_number');

		$Diagnosisions->diagnosis =Input :: get('diagnosis');

		$Diagnosis->prescription =Input :: get('prescription');

		$Diagnosis->comments =Input :: get('comments');

		$Diagnosis>save(); 



		return View::make('diagnosis.edit'); 
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /diagnosis/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($file_number)
	{
		$Diagnosis = Diagnosis::wherefile_number($file_number);

	    $validator = Validator::(Input::all, ['file_number'=>'required' ]);
        
        
        if($validator->fails())
           {
         return Redirect::back()->withInput()->withErrors($validation-messages());
           }

        if($validator->fails())

           {
         return Redirect::back()->withInput()->withErrors($validation-messages());
           
		

		$Diagnosis->file_number =Input :: get('file_number');

		$Diagnosis->diagnosis =Input :: get('diagnosis');

		$Diagnosis->prescription =Input :: get('prescription');

		$Diagnosis->comments =Input :: get('comments');

		$Diagnosis>save(); 

	       }
	   }
          
	/**
	 * Remove the specified resource from storage.
	 * DELETE /diagnosis/{id}
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

        $Diagnosis = Diagnosis::wherefile_number($file_number);
        $Diagnosis->delete();

		
		return Redirect :: route ('diagnosis.index');
	}
	

}