@include('Home.head')

@include('Home.navbar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-md rounded-lg p-6 w-full max-w-sm">
        <h1 class="text-xl font-semibold mb-4">Transfer Money</h1>
        <form>
            <div class="mb-4">
                <label class="block text-gray-600 text-sm font-semibold mb-2" for="email">Email address</label>
                <input class="appearance-none border border-gray-300 rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" id="email" type="email" placeholder="Enter email">
            </div>
            <div class="mb-4">
                <label class="block text-gray-600 text-sm font-semibold mb-2" for="amount">Amount</label>
                <input class="appearance-none border border-gray-300 rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" id="amount" type="text" placeholder="Enter amount to transfer">
            </div>
            <button class="w-full bg-blue-700 hover:bg-blue-800 text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="submit">
                Transfer
            </button>
        </form>
    </div>
</body>
</html>


