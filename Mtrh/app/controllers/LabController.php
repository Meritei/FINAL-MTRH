<?php

class LabController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /lab
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('lab.index');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /lab/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('lab.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /lab
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::(Input::all, ['file_number'=>'required', 'date'=>'required','symptoms'=>'required',
		 'test_done'=>'required','observation'=>'required','hiv_and_aids_status'=>'required','full_resuilts'=>'required','test_done_by'=>'required',]);

        if($validator->fails())
           {
         return Redirect::back()->withInput()->withErrors($validation-messages());
           }

		$Lab_results = new Lab_results;
		$Lab_results->file_number =Input :: get('file_number');
		$Lab_results->date =Input :: get('date');
		$Lab_results->symptoms =Input :: get('symptoms');
		$Lab_results->test_done =Input :: get('test_done');
		$Lab_results->observation=Input :: get('observation');
		$Lab_results->hiv_and_aids_status =Input :: get('hiv_and_aids_status ');
		$Lab_results->full_resuilts =Input :: get('full_resuilts');
		$Lab_results->test_done_by =Input :: get('test_done_by');
		$Lab_results->save(); 

		return Redirect :: route ('lab.index');
	}

	/**
	 * Display the specified resource.
	 * GET /lab/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($file_number)
	{
		$Lab_results  = Lab_results::wherefile_number($file_number);
		$Lab_results->file_number ;
		$Lab_results->date ;
		$Lab_results->symptoms ;
		$Lab_results->test_done ;
		$Lab_results->observation ;
		$Lab_results->hiv_and_aids_status ;
		$Lab_results->full_resuilts ;
		$Lab_results->test_done_by;
		
		
		return View::make('lab.show' ,['Lab'=>$Lab_results]);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /lab/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($file_number)
	{
		$validator = Validator::(Input::all, ['file_number'=>'required', 'date'=>'required','symptoms'=>'required',
		 'test_done'=>'required','observation'=>'required','hiv_and_aids_status'=>'required','full_resuilts'=>'required','test_done_by'=>'required',]);

        
        if($validator->fails())
           {
         return Redirect::back()->withInput()->withErrors($validation-messages());
           }

        $Lab_results  = Lab_results::wherefile_number($file_number);
		$Lab_results->file_number =Input :: get('file_number');
		$Lab_results->date =Input :: get('date');
		$Lab_results->symptoms =Input :: get('symptoms');
		$Lab_results->test_done =Input :: get('test_done');
		$Lab_results->observation=Input :: get('observation');
		$Lab_results->hiv_and_aids_status =Input :: get('hiv_and_aids_status ');
		$Lab_results->full_resuilts =Input :: get('full_resuilts');
		$Lab_results->test_done_by =Input :: get('test_done_by');
         $Lab_results->save();


		return View::make('file.edit');
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /lab/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($file_number)
	{
		$validator = Validator::(Input::all, ['file_number'=>'required', 'date'=>'required','symptoms'=>'required',
		'test_done'=>'required','observation'=>'required','hiv_and_aids_status'=>'required','full_resuilts'=>'required','test_done_by'=>'required',]);

        
        if($validator->fails())
           {
         return Redirect::back()->withInput()->withErrors($validation-messages());
           }

        $Lab_results  = Lab_results::wherefile_number($file_number);
		$Lab_results->file_number =Input :: get('file_number');
		$Lab_results->date =Input :: get('date');
		$Lab_results->symptoms =Input :: get('symptoms');
		$Lab_results->test_done =Input :: get('test_done');
		$Lab_results->observation=Input :: get('observation');
		$Lab_results->hiv_and_aids_status =Input :: get('hiv_and_aids_status ');
		$Lab_results->full_resuilts =Input :: get('full_resuilts');
		$Lab_results->test_done_by =Input :: get('test_done_by');
         $Lab_results->save();


		return View::make('file.show');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /lab/{id}
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
        $Lab_results  = $Lab_results::wherefile_number($file_number);
        $Lab_results->delete();

		
		return Redirect :: route ('lab.index');
		
	}

}