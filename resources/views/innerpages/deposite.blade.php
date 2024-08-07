@extends('layout')
@section('content')

    <div class="bg-white shadow-md rounded-lg p-6 w-full max-w-sm">
        <h1 class="text-xl font-semibold mb-4">Deposit Money</h1>
        <form action="{{ route('addAmount') }}" method="post">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-600 text-sm font-semibold mb-2" for="amount">Amount</label>
                <input class="appearance-none border border-gray-300 rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" id="amount" type="text" placeholder="Enter amount to deposit" name="amount" >
               
            </div>
            <button class="w-full bg-blue-700 hover:bg-blue-800 text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="submit">
                Deposit
            </button>
        </form>
    </div>
@endsection
    

