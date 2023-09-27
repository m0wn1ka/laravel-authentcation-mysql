<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Registration::all(); //fetch all blog posts from DB
        return view('registration.index', [
                'posts' => $posts,
            ]); //returns the view with posts
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registration.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newPost = Registration::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'homephone' => $request->homephone,
            'extension' => $request->extension,
            'workphone' => $request->workphone,
            'fax' => $request->fax,
            'cellphone' => $request->cellphone,
            'email' => $request->email,
            'homeaddress' => $request->homeaddress,
            'country' => $request->country,
            'city' => $request->city,
            'state' => $request->state,
            'zip' => $request->zip,
            'gender' => $request->gender,
            'martialstatus' => $request->martialstatus,
            // 'dob' => $request->dob,
            'agree' => $request->agree,
        ]);
       
        return redirect('/iframe');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function show(Registration $registration)
    {
        
    return view('registration.show', [
        'post' => $registration,
    ]);
        
    }
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function edit(Registration $registration)
    {
        return view('registration.edit', [
            'post' => $registration,
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registration $registration)
    {
        $registration->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname
        ]);

        return redirect('register/' . $registration->id);
   
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registration $registration)
    {
        
        $registration->delete();

        return redirect('/register');
    }
}
