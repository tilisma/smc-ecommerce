@extends('layouts.master')
@section('content')
   <div class='flex jusify-center items-center mt-10'>
    <form action="{{route('login')}}" method="post" class='w-1/2 border p-10 rounded shadow'>
    <h1 class='text-4xl font-bold text-center my-5'>Login</h1>

    @csrf 
    <div class='mb-5'>
        <input type="email" name='email'placeholder="Enter Email" class='w-full p-2 border rounded'> 
    </div>

    <div class='mb-5'>
        <input type="password" name='password'placeholder="Enter Password" class='w-full p-2 border rounded'> 
    </div> 

    <div class='mb-5'>
        <button type="submit" class="w-ful bg-orange-500 text-white p-2 rounded">Login</button>
    </div>
    </form>
   </div> 
@endsection   