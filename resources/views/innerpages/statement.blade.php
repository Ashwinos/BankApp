

@extends('layout')
@section('content')
    <div class="bg-white shadow-md rounded p-6">
        <h2 class="text-xl font-bold mb-4">Statement of Account</h2>
        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">TRANSACTION ID</th>
                    
                    
                    
                    <th class="py-2 px-4 border-b">FROM</th>
                    <th class="py-2 px-4 border-b">TO</th>
                    <th class="py-2 px-4 border-b">DEBIT</th>
                    <th class="py-2 px-4 border-b">CREDIT</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $transaction )
                    
               
                <tr>
                    <td class="py-2 px-4 border-b">{{ $transaction->id }}</td>
                    
                    <td class="py-2 px-4 border-b">{{ $transaction->from }}</td>
                    <td class="py-2 px-4 border-b">{{ $transaction->to }}</td>
                    <td class="py-2 px-4 border-b">{{ $transaction->debit }}</td>
                    <td class="py-2 px-4 border-b">{{ $transaction->credit }}</td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
@endsection

 

