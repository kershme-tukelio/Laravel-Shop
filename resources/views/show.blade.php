@extends('layouts.app')

@section('title', $product->name)

@section('content')

<h1>{{$product->name}}</h1>
<h3>{{$product->description}}</h3>
<h3>Categories: <br/></h3>
<ul>
    @foreach($product->categories as $category)
        <li>{{$category->name}}</li>
    @endforeach
</ul>

@endsection