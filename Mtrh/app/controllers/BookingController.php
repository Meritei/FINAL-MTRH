<?php

class BookingController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /booking
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('booking.index');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /booking/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admission.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /booking
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::(Input::all, ['file_number'=>'required', 'section_to_visit'=>'required','doctor_assigned'=>'required' ]);
        
        if($validator->fails())
           {
         return Redirect::back()->withInput()->withErrors($validation-messages());
           }

		$Bookings = new Booking;
		$Bookings->file_number =Input :: get('file_number');
		$Bookings->section_to_visit =Input :: get('section_to_visit');
		$Bookings->doctor_assigned =Input :: get('doctor_assigned');
		$Bookings->save(); 

		return Redirect :: route ('booking.show');
	}

	/**
	 * Display the specified resource.
	 * GET /booking/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($file_number)
	{
		
		$Bookings = Booking::wherefile_number($file_number);
		$Bookings->file_number;
		$Bookings->section_to_visit;
		$Bookings->doctor_assigned;
		
		return View::make('booking.show' ,['Booking'=>$Bookings]);
	}
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /booking/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($file_number)
	{

		$Bookings = Booking::wherefile_number($file_number);

		$validator = Validator::(Input::all, ['file_number'=>'required']);
        
        if($validator->fails())
           {
         return Redirect::back()->withInput()->withErrors($validation-messages());
           }

        if($validator->fails())

           {
         return Redirect::back()->withInput()->withErrors($validation-messages());
           
		$Bookings->file_number =Input :: get('file_number');

		$Bookings->section_to_visit =Input :: get('section_to_visit');

		$Bookings->doctor_assigned =Input :: get('doctor_assigned');

		$Bookings->save(); 



		return View::make('.edit'); 

	}

	/**
	 * Update the specified resource in storage.
	 * PUT /booking/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($file_number)
	{
		
		$Bookings = Booking::wherefile_number($file_number);

		$validator = Validator::(Input::all, ['file_number'=>'required']);
        
        if($validator->fails())
           {
         return Redirect::back()->withInput()->withErrors($validation-messages());
           }

        if($validator->fails())

           {
         return Redirect::back()->withInput()->withErrors($validation-messages());
           
		$Bookings->file_number =Input :: get('file_number');

		$Bookings->section_to_visit =Input :: get('section_to_visit');

		$Bookings->doctor_assigned =Input :: get('doctor_assigned');

		$Admissions->save(); 



		return View::make('booking.update'); 
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /booking/{id}
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
        $Bookings = Booking::wherefile_number($file_number);
        $Bookings->delete();

		
		return Redirect :: route ('booking.index');
	}

}