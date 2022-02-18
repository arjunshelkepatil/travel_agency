<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Mail\MailHandler;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('agency.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Name'=> 'required',
            'Email'=> 'required',
            'Country'=> 'required',
            'Hotel'=> 'required',
            'Check-in'=> 'required',
            'Check-out'=> 'required',
            'Comfort'=> 'required',
            'Adults'=> 'required',
            'Children'=> 'required',
            'Rooms'=>'required',
            'Message'=>'required',
        ]);

        // dd($request);

        // Booking::create($request->all());
        // return redirect()->route('agency.index');

        $bookings = Booking::create([
            'Name' => $request->Name,
            'Email' => $request->Email,
            'Country' => $request->Country,
            'Hotel' => $request->Hotel,
            'Check-in' => $request->Check-in,
            'Check-out' => $request->Check-out,
            'Comfort' => $request->Comfort,
            'Adults' => $request->Adults,
            'Children' => $request->Children,
            'Rooms' => $request->Rooms,
            'Message' => $request->Message,
            
        ]);

        // dd($bookings);

        // $bookings = new Booking;
        // $bookings->Name =  $request->Name;
        // $bookings->Email =  $request->Email;
        // $bookings->Country =  $request->Country;
        // $bookings->Hotel =  $request->Hotel;
        // $bookings->Check-in =  $request->check-in;
        // $bookings->check-out =  $request->check-out;
        // $bookings->Comfort =  $request->Comfort;
        // $bookings->Adults =  $request->Adults;
        // $bookings->Rooms =  $request->Rooms;
        // $bookings->Message =  $request->Message;
        // $bookings->save();
        return redirect('agency.index');

        if($bookings) {
            Mail::to($email)->send(new Booking($request->Email));
            return new JsonResponse(
                [
                    'success' => true, 
                    'message' => "Thank you for subscribing to our email, please check your inbox"
                ], 
                200
            );
        }

    }

   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
