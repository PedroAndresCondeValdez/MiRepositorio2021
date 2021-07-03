@extends('layouts.master')
@section('title', 'Products List')

@section('content')
<table class="table table-dark table-striped table-hover">
    <thead>
        <tr>
            <th>
                Product Name:
            </th>
            <th>
                Price
            </th>
            <th>
                Description
            </th>
            <th>
                Photo
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>
                {{ $product->name }}
            </td>
            <td>
                {{ $product->price }}
            </td>
            <td>
                {{ $product->description }}
            </td>
            <td>
                {{ $product->photo }}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="/newproduct" class="btn btn-primary">New Product</a>
@stop