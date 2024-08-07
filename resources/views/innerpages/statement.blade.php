@extends('layout')
@section('content')
    <div class="bg-white shadow-md rounded p-6" style="margin-top: 100px;">
        <h2 class="text-xl font-bold mb-4">Statement of Account</h2>
       
        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">#</th>
                    <th class="py-2 px-4 border-b">DATE</th>

                    <th class="py-2 px-4 border-b">FROM</th>
                    <th class="py-2 px-4 border-b">TO</th>
                    <th class="py-2 px-4 border-b">TYPE</th>
                    <th class="py-2 px-4 border-b">AMOUNT</th>
                  
                    <th class="py-2 px-4 border-b">BALANCE</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $transaction)
                @if ($loop->first)
                    @continue
                @endif
                <tr>
                    <td class="py-2 px-4 border-b">{{ $loop->iteration-1 }}</td>
                    <td class="py-2 px-4 border-b"> {{ $transaction->created_at->format('d/m/Y h:i A') }}</td>

                    <td class="py-2 px-4 border-b"> {{ $transaction->from }}</td>
                    <td class="py-2 px-4 border-b">{{ $transaction->to}}</td>
                    <td class="py-2 px-4 border-b">  {{ $transaction->debit==0 ? 'Credit':'Debit'}}
                    </td>
                    
                    <td class="py-2 px-4 border-b">{{ $transaction->debit==0 ? $transaction->credit :$transaction->debit}}</td>
                    
                    <td class="py-2 px-4 border-b">{{ $transaction->balance }}</td>



                </tr>
                @endforeach
            </tbody>
        </table>

        
        <div class="mt-4">
            {{ $transactions->links() }}
        </div>
    </div>


    
@endsection
