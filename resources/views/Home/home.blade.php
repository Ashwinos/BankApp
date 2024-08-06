@include('Home.head')

@include('Home.navbar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
  
     
    <div class="bg-white shadow-md rounded-lg p-6 w-full max-w-sm">
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
    
    
</body>
</html>


