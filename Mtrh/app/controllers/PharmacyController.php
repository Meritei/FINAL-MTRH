<?php

class PharmacyController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /pharmacy
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('pharmacy.index');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /pharmacy/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('pharmacy.create');

	}

	/**
	 * Store a newly created resource in storage.
	 * POST /pharmacy
	 * @return Response
	 */
	public function store()
	{
		
        $validator = Validator::(Input::all, ['file_number'=>'required','diagnosis'=>'required',
        	'prescription'=>'required','drugs_given'=>'required']);
        
        if($validator->fails())
           {
         return Redirect::back()->withInput()->withErrors($validation-messages());
           }

		$Pharmacys = new Pharmacy;
		$Pharmacys->file_number =Input :: get('file_number');
		$Pharmacys->diagnosis =Input :: get('diagnosis');
		$Pharmacys->prescription =Input :: get('prescription');
		$Pharmacys->drugs_given =Input :: get('drugs_given');
		$Pharmacys->save(); 

		return Redirect :: route ('pharmacy.index');
	}

	/**
	 * Display the specified resource.
	 * GET /pharmacy/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($file_number)
	{
	   $Pharmacys = Pharmacy::wherefile_number($file_number)->first();
       $Pharmacys->file_number ;
       $Pharmacys->diagnosis ;
	   $Pharmacys->prescription ;
	   $Pharmacys->drugs_given ;
		
	return View::make('pharmacy.show' ,['Pharmacy'=>$Pharmacys]);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /pharmacy/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($file_number)
	{
		
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /pharmacy/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($file_number)
	{
		$validator = Validator::(Input::all, ['file_number'=>'required']);
        
        if($validator->fails())
           {
         return Redirect::back()->withInput()->withErrors($validation-messages());
           }

        $Pharmacys = Pharmacy::wherefile_number($file_number)->first();
		$Pharmacys->file_number =Input :: get('file_number');
		$Pharmacys->diagnosis =Input :: get('diagnosis');
		$Pharmacys->prescription =Input :: get('prescription');
		$Pharmacys->drugs_given =Input :: get('drugs_given');
		$Pharmacys->save(); 



		return View::make('file.show');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /pharmacy/{id}
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
         $Pharmacys = Pharmacy::wherefile_number($file_number)->first();
         $Pharmacys->delete();

		
		return Redirect :: route ('file.index');
	}

}