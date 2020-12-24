@extends('layouts.app')

@section('title', 'Products home page')

@section('content')

<h1>Available products: </h1>
<ul>
    @foreach($products as $product)
        @if($product->available)
            <li><a href="#">{{$product->name}}</a></li>
        @endif
    @endforeach
</ul>

@endsection