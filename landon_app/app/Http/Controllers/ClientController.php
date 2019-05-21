<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Title as Title;
use App\Client as Client;


class ClientController extends Controller
{
    //
<<<<<<< HEAD
    public function __construct( Title $titles, Client $client)
=======
    public function __construct( Title $titles )
>>>>>>> f0967900bf872d073fb577655af2ea0b48c1af2c
    {
        $this->titles = $titles->all();
        $this->client = $client->all();

    }

    public function di()
    {
        dd($this->titles);
    }

    public function index()
    {
        $data = [];

<<<<<<< HEAD
       $data['clients'] = $this->client->all();
=======
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
>>>>>>> f0967900bf872d073fb577655af2ea0b48c1af2c
    
       return view('client/index', $data);
    }

<<<<<<< HEAD
    public function newClient( Request $request, Client $client)
=======
    public function newClient( Request $request)
>>>>>>> f0967900bf872d073fb577655af2ea0b48c1af2c
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
<<<<<<< HEAD
    

        if( $request->isMethod('POST'))
        {
           #dd($data);exit;
=======
       
        $data['titles'] = $this->titles;
        $data['modified'] = 0;

        if( $request->isMethod('POST'))
        {
            //dd($data);
>>>>>>> f0967900bf872d073fb577655af2ea0b48c1af2c
            $this->validate(
               $request,
               [
                   'name' => 'required',
                   'last_name' => 'required',
                   'address' => 'required',
                   'zip_code' => 'required',
                   'state' => 'required',
                   'email' => 'required',
               ] 
            );

<<<<<<< HEAD
            $client->insert($data);

            return redirect('clients');
        }

        $data['titles'] = $this->titles;
        $data['modified'] = 0;

=======
            return redirect('clients');
        }

>>>>>>> f0967900bf872d073fb577655af2ea0b48c1af2c
        return view('client/form', $data);
    }

    public function create()
    {
            return view('client/create');
    }

    public function show($client_id)
    {
<<<<<<< HEAD
        $data = []; $data['client_id'] = $client_id;
        $data['titles'] = $this->titles;
        $data['modified'] = 1;

        $client_data = $this->client->find($client_id);

        $data['name'] = $client_data->name;
        $data['name'] = $client_data->name;
        $data['last_name'] = $client_data->last_name;
        $data['title'] = $client_data->title;
        $data['address'] = $client_data->address;
        $data['zip_code'] = $client_data->zip_code;
        $data['city'] = $client_data->city;
        $data['state'] = $client_data->state;
        $data['email'] = $client_data->email;


        return view('client/form', $data);
    }



    public function modify( Request $request, $client_id, Client $client)
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
    

        if( $request->isMethod('POST'))
        {
           #dd($data);exit;
            $this->validate(
               $request,
               [
                   'name' => 'required',
                   'last_name' => 'required',
                   'address' => 'required',
                   'zip_code' => 'required',
                   'state' => 'required',
                   'email' => 'required',
               ] 
            );

           $client_data = $this->client->find($client_id);

            $client_data->title = $request->input('title');
            $client_data->name = $request->input('name');
            $client_data->last_name = $request->input('last_name');
            $client_data->address = $request->input('address');
            $client_data->zip_code = $request->input('zip_code');
            $client_data->city = $request->input('city');
            $client_data->state = $request->input('state');
            $client_data->email = $request->input('email');

            $client_data->save();

            return redirect('clients');
        }

        $data['titles'] = $this->titles;
        $data['modified'] = 0;

        return view('client/form', $data);
    }


    
=======
        $data['titles'] = $this->titles;
        $data['modified'] = 1;
        return view('client/form', $data);
    }
>>>>>>> f0967900bf872d073fb577655af2ea0b48c1af2c
}
