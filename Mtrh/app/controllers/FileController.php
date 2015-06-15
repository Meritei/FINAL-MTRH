<?php

class FileController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /file
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('file.index');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /file/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('file.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /file
	 *
	 * @return Response
	 */
	public function store()
	{
        $validator = Validator::(Input::all, ['name'=>'required']);
        
        if($validator->fails())
           {
         return Redirect::back()->withInput()->withErrors($validation-messages());
           }

		$files = new Numfile;
		$files->file_number =Input :: get('file_number');
		$files->name =Input :: get('name');
		$files->save(); 

		return Redirect :: route ('file.index');

	}

	/**
	 * Display the specified resource.
	 * GET /file/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($file_number)
	{


        $files = Numfile::wherefile_number($file_number)->first();
        $files->file_number;
		$files->name ;
		
		return View::make('file.show' ,['file'=>$files]);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /file/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($file_number)
	{


        $validator = Validator::(Input::all, ['name'=>'required','file_number'=>'required']);
        
        if($validator->fails())
           {
         return Redirect::back()->withInput()->withErrors($validation-messages());
           }


        $files = Numfile::wherefile_number($file_number)->first();
		$files->file_number =Input :: get('file_number');
		$files->name =Input :: get('name');
		$files->save(); 



		return View::make('file.edit');
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /file/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($file_number)
	{

		
        $validator = Validator::(Input::all, ['name'=>'required','file_number'=>'required']);
        
        if($validator->fails())
           {
         return Redirect::back()->withInput()->withErrors($validation-messages());
           }



		$files->file_number =Input :: get('file_number');
		$files->name =Input :: get('name');
		$files->save(); 



		return View::make('file.index');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /file/{id}
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
        $files = Numfile::wherefile_number($file_number)->first();
        $files->delete();

		
		return Redirect :: route ('file.index');
		

		
	}

}