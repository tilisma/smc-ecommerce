@extends('layouts.app')
@section('content')
<h1 class="text-3xl font-bold text-blue-800">Edit Product</h1>
<hr class="h-1 bg-red-600">

<form action="{{route('product.update',$product->id)}}" method="POST" class="mt-5" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <select name="category_id" id="" class="block w-full p-2 rounded my-2">
        @foreach($categories as $category)
        <option value="{{$category->id}}"
        @if($category->id == $product->category_id)
        selected
        @endif
        >{{$category->categoryname}}</option>
        @endforeach
    </select>
    <input type="text" placeholder="Enter Product Name" name="name" value="{{$product->name}}" class="block w-full p-2 rounded my-2">
    @error('name')
    <div class="text-red-600 -mt-5">
        {{$message}}
    </div>
    @enderror
    <input type="text" placeholder="Enter Product Description"name="description" value="{{$product->description}}" class="block w-full p-2 rounded my-2">
    @error('description')
    <div class="text-red-600 -mt-5">
        {{$message}}
    </div>
    @enderror
    <input type="text" placeholder="Enter Product Price"name="price" value="{{$product->price}}" class="block w-full p-2 rounded my-2">
    @error('price')
    <div class="text-red-600 -mt-5">
        {{$message}}
    </div>
    @enderror
    <input type="text" placeholder="Enter Product Stock"name="stock" value="{{$product->stock}}" class="block w-full p-2 rounded my-2">
    @error('stock')
    <div class="text-red-600 -mt-5">
        {{$message}}
    </div>
    @enderror
   <select name="status" class="block w-full p-2 rounded my-2">
    <option value="Available"
    @if($product->status == 'Available')
    selected
    @endif
    >Available</option>
    <option value="Unavailable"
    @if($product->status == 'Unavailable')
    selected
    @endif
    >Unavailable</option>
   </select>
<div>
    <p>Current Image</p>
    <img src="{{asset('images/products/'.$product->photopath)}}" class="w-32" alt="">
</div>
   <input type="file" name="photopath" class="block w-full p-2 rounded my-2">
   @error('photopath')
    <div class="text-red-600 -mt-5">
        {{$message}}
    </div>
    @enderror

   <div class="flex justify-center gap-5">
   <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded">Update Product</button>
       <a href="{{route('product.index')}}" class="bg-red-600 text-white py-2 px-4 rounded">Cancel</a>
   </div>

</form>
@endsection