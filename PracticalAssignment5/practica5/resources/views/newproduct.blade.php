@extends('layouts.master')
@section('title', 'New Product')

@section('content')
<div class="container pl-5 pr-5">
    <form action="/products" method="POST">
        @csrf
        <div class="form-group">
            <label for="txtName">Name</label>
            <input id="txtName" class="form-control" name="name" />
        </div>
        <div class="form-group">
            <label for="txtPrice">Price</label>
            <input id="txtPrice" type="number" class="form-control" name="price" />
        </div>
        <div class="form-group">
            <label for="txtDescription">Description</label>
            <input id="txtDescription" type="TextArea" class="form-control" name="description" />
        </div>
        <div class="form-group">
            <label for="txtPhoto">Photo</label>
            <input id="txtPhoto" class="form-control" name="photo" />
        </div>
        <input type="submit" class="btn btn-primary" value="Send" />


        <a href="/newproduct" class="btn btn-primary">Back</a>
    </form>
</div>
@stop