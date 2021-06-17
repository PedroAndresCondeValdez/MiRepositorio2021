@extends('layouts.master')
@section('title', 'New Professor')
@section('content')
<div class="container pl-5 pr-5">
    <h2>New Professor</h2>
    {{ Form::open(array('url' => '/professors', 'method' => 'PUT')) }}
        @csrf
        <input type="hidden" name="id" value="{{ $professor->id }}"/>
        <div class="form-group">
            <label for="txtFirstName">First name</label>
            <input type="text" class="form-control" id="txtFirstName" name="firstName" value="{{ $professor->firstName }}"/>
        </div>
        <div class="form-group">
            <label for="txtLastName">Last name</label>
            <input type="text" class="form-control" id="txtLastName" name="lastName" value="{{ $professor->lastName}}"/>
        </div>
        <div class="form-group">
            <label for="txtCity">City</label>
            <input type="text" class="form-control" id="txtCity" name="city" value="{{ $professor->city}}"/>
        </div>
        <div class="form-group">
            <label for="txtAddress">Address</label>
            <input type="text" class="form-control" id="txtAddress" name="address" value="{{ $professor->address}}"/>
        </div>
        <div class="form-group">
            <label for="txtSalary">Salary</label>
            <input type="text" class="form-control" id="txtSalary" name="salary" value="{{ $professor->salary}}" />
        </div>
        <input type="submit" value="Send" class="btn btn-dark" />
        <a href="/professors" class="btn btn-dark">Back</a>
        {{ Form::close() }}
</div>
@stop
