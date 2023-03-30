<?php

namespace App\Http\Controllers;
use App\Models\navbar;
use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function contact()
    {
        $navbars = navbar::all();
        return view('contact',compact('navbars'));
    }
    public function contacts(){
        return view('admin.all_contacts');
    }
    public function viewcontact(Request $request){
        $contact = new contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->phone = $request->phone;
        $contact->message = $request->message;
        $contact->save();
        return redirect('index');
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(contact $contact)
    {
        $data=$contact->get();
        echo $data;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contact $contact)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contact $contact)
    {
        //
    }
}
