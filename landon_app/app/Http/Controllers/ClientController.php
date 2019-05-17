<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Title as Title;

class ClientController extends Controller
{
    //
    public function __construct( Title $titles )
    {
        $this->titles = $titles->all();
    }

    public function di()
    {
        dd($this->titles);
    }

    public function index()
    {
        $data = [];

       $obj = new \stdClass;
       $obj->id = 1;
       $obj->title = 'mr';
       $obj->name = 'Igor';
       $obj->last_name = 'Silva';
       $obj->email = 'igor.silva9813@gmail.com';
       $data['clients'][] = $obj;
    
       $obj = new \stdClass;
       $obj->id = 2;
       $obj->title = 'ms';
       $obj->name = 'Rita';
       $obj->last_name = 'Pereira';
       $obj->email = 'ritapereira@gmail.com';
       $data['clients'][] = $obj;
    
       return view('client/index', $data);
    }

    public function newClient( Request $request)
    {
        $data = [];

        $data['title'] = $request->input('title');
        $data['name'] = $request->input('name');
        $data['last_name'] = $request->input('last_name');
        $data['address'] = $request->input('address');
        $data['zip_code'] = $request->input('zip_code');
        $data['city'] = $request->input('city');
        $data['state'] = $request->input('state');
        $data['email'] = $request->input('email');
       
        $data['titles'] = $this->titles;
        $data['modified'] = 0;

        if( $request->isMethod('POST'))
        {
            dd($data);
            return redirect('clients');
        }

        return view('client/form', $data);
    }

    public function create()
    {
            return view('client/create');
    }

    public function show($client_id)
    {
        $data['titles'] = $this->titles;
        $data['modified'] = 1;
        return view('client/form', $data);
    }
}
