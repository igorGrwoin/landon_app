@extends('layouts.app')

@section('content')
<div class="row">
      <div class="medium-12 large-12 columns">
        <h4>{{ $modified == 1 ? 'Modify Client' : 'New Client' }}</h4>
<<<<<<< HEAD
        <form action="{{ $modified == 1 ? route('update_client', [ 'client_id' => $client_id ]) : route('create_client')  }}" method="post">
          <div class="medium-4  columns">
            <label>Title</label>
            <select name="title">
=======
        <form action="{{ $modified == 1 ? route('update_client', [ 'client_id' => 1 ]) : route('create_client')  }}" method="post">
          <div class="medium-4  columns">
            <label>Title</label>
            <select name="form[title]">
>>>>>>> f0967900bf872d073fb577655af2ea0b48c1af2c
            @foreach ( $titles as $title)
            <option value="{{ $title }}">{{ $title }}.</option>
            @endforeach
            </select>
          </div>
          <div class="medium-4  columns">
            <label>Name</label>
<<<<<<< HEAD
            <input name="name" type="text" value=" {{ old('name') ? old('name') : $name }}  ">
=======
            <input name="name" type="text" value=" {{ old('name') }}  ">
>>>>>>> f0967900bf872d073fb577655af2ea0b48c1af2c
            <small class="error">{{ $errors->first('name') }}</small>
          </div>
          <div class="medium-4  columns">
            <label>Last Name</label>
<<<<<<< HEAD
            <input name="last_name" type="text" value=" {{ old('last_name') ? old('last_name') : $last_name }}  ">
=======
            <input name="last_name" type="text" value=" {{ old('last_name') }}  ">
>>>>>>> f0967900bf872d073fb577655af2ea0b48c1af2c
            <small class="error">{{ $errors->first('last_name') }}</small>
          </div>
          <div class="medium-8  columns">
            <label>Address</label>
<<<<<<< HEAD
            <input name="address" type="text" value=" {{ old('address') ? old('address') : $address}}  ">
=======
            <input name="address" type="text" value=" {{ old('address') }}  ">
>>>>>>> f0967900bf872d073fb577655af2ea0b48c1af2c
            <small class="error">{{ $errors->first('address') }}</small>
          </div>
          <div class="medium-4  columns">
            <label>zip_code</label>
<<<<<<< HEAD
            <input name="zip_code" type="text" value=" {{ old('zip_code') ? old('zip_code') : $zip_code }}  ">
=======
            <input name="zip_code" type="text" value=" {{ old('zip_code') }}  ">
>>>>>>> f0967900bf872d073fb577655af2ea0b48c1af2c
            <small class="error">{{ $errors->first('zip_code') }}</small>
          </div>
          <div class="medium-4  columns">
            <label>City</label>
<<<<<<< HEAD
            <input name="city" type="text" value=" {{ old('city') ? old('city') : $city  }} ">
=======
            <input name="city" type="text" value=" {{ old('city') }}  ">
>>>>>>> f0967900bf872d073fb577655af2ea0b48c1af2c
            <small class="error">{{ $errors->first('city') }}</small>
          </div>
          <div class="medium-4  columns">
            <label>State</label>
<<<<<<< HEAD
            <input name="state" type="text" value=" {{ old('state') ? old('state') : $state }}  ">
=======
            <input name="state" type="text" value=" {{ old('state') }}  ">
>>>>>>> f0967900bf872d073fb577655af2ea0b48c1af2c
            <small class="error">{{ $errors->first('state') }}</small>
          </div>
          <div class="medium-12  columns">
            <label>Email</label>
<<<<<<< HEAD
            <input name="email" type="text" value=" {{ old('email') ? old('email') : $email }} ">
=======
            <input name="email" type="text" value=" {{ old('email') }}  ">
>>>>>>> f0967900bf872d073fb577655af2ea0b48c1af2c
            <small class="error">{{ $errors->first('email') }}</small>
          </div>
          <div class="medium-12  columns">
            <input value="SAVE" class="button success hollow" type="submit">
          </div>
        </form>
      </div>
    </div>
@endsection