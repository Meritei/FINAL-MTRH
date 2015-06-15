<?php

class StatusController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /status
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('status.index');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /status/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('status.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /status
	 *
	 * @return Response
	 */
	public function store()
	{
		return 'create a new user';
	}

	/**
	 * Display the specified resource.
	 * GET /status/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /status/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /status/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /status/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}