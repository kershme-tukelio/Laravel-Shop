@extends('layouts.app')

@section('title', 'Create product')

@section('content')

<h1>Create a product</h1>
<form method="POST">
    <div>
        <label for="name">Product name: </label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="description">Product description: </label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
    </div>
    <div>
        <select name="category_id" id="category_id">
            @if($categories)
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            @endif
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection