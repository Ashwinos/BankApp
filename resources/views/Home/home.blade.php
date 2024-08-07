@extends('layout')
@section('content')
     
    <div class="bg-white shadow-md rounded-lg p-6 w-full max-w-sm">
        <p style="color: rgb(0, 255, 34)"> @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif </p>
        <h1 class="text-xl font-semibold mb-4">Welcome {{ $user->name }}</h1>
        <div class="border-t border-gray-200 pt-4">
            <p class="text-gray-600 text-xs uppercase">Your ID</p>
            <p class="text-gray-800 text-lg">{{ $user->email }}</p>
        </div>
        <div class="border-t border-gray-200 mt-4 pt-4">
            <p class="text-gray-600 text-xs uppercase">Your Balance</p>
            <p class="text-gray-800 text-lg"> @if($balance)
                <p>Your balance is: ${{ $balance->balance }}</p>
            @else
                <p>No balance information available.</p>
            @endif</p>
        </div>
       
    </div>
   

@endsection

    



