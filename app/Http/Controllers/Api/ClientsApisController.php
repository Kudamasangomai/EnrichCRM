<?php

namespace App\Http\Controllers\Api;

use App\Models\Clients;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientsApisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Clients::orderby('contact_email','asc')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[           
             
            'contact_name'=> 'required',
            'contact_email'=> 'required|unique:clients|email',
            'contact_phone_number'=> 'required',
            'company_name'=> 'required',
            'company_address'=> 'required',
            'company_city'=> 'required',
            'company_vat'=> 'required|unique:clients',                    
    ]);
    return clients::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Clients::find($id);
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
        $client = Clients::find($id);
        $client->update($request->all());
        return $client;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Clients::destroy($id);
    }
}
