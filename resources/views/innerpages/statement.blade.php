@include('Home.head')

@include('Home.navbar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statement of Account</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-md rounded p-6">
        <h2 class="text-xl font-bold mb-4">Statement of account</h2>
        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">#</th>
                    <th class="py-2 px-4 border-b">DATETIME</th>
                    <th class="py-2 px-4 border-b">AMOUNT</th>
                    <th class="py-2 px-4 border-b">TYPE</th>
                    <th class="py-2 px-4 border-b">DETAILS</th>
                    <th class="py-2 px-4 border-b">BALANCE</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="py-2 px-4 border-b">1</td>
                    <td class="py-2 px-4 border-b">18-08-2018 10:45 AM</td>
                    <td class="py-2 px-4 border-b">2000.00</td>
                    <td class="py-2 px-4 border-b">Credit</td>
                    <td class="py-2 px-4 border-b">Deposit</td>
                    <td class="py-2 px-4 border-b">2000.00</td>
                </tr>
                <tr>
                    <td class="py-2 px-4 border-b">2</td>
                    <td class="py-2 px-4 border-b">19-08-2018 12:24 PM</td>
                    <td class="py-2 px-4 border-b">1500.00</td>
                    <td class="py-2 px-4 border-b">Credit</td>
                    <td class="py-2 px-4 border-b">Transfer from friend@gmail.com</td>
                    <td class="py-2 px-4 border-b">3500.00</td>
                </tr>
                <tr>
                    <td class="py-2 px-4 border-b">3</td>
                    <td class="py-2 px-4 border-b">20-08-2018 11:12 AM</td>
                    <td class="py-2 px-4 border-b">500.00</td>
                    <td class="py-2 px-4 border-b">Debit</td>
                    <td class="py-2 px-4 border-b">Withdraw</td>
                    <td class="py-2 px-4 border-b">3000.00</td>
                </tr>
                <tr>
                    <td class="py-2 px-4 border-b">4</td>
                    <td class="py-2 px-4 border-b">21-08-2018 05:24 PM</td>
                    <td class="py-2 px-4 border-b">1000.00</td>
                    <td class="py-2 px-4 border-b">Debit</td>
                    <td class="py-2 px-4 border-b">Transfer to spouse@gmail.com</td>
                    <td class="py-2 px-4 border-b">1000.00</td>
                </tr>
                <tr>
                    <td class="py-2 px-4 border-b">5</td>
                    <td class="py-2 px-4 border-b">22-08-2018 12:35 PM</td>
                    <td class="py-2 px-4 border-b">300.00</td>
                    <td class="py-2 px-4 border-b">Debit</td>
                    <td class="py-2 px-4 border-b">Withdraw</td>
                    <td class="py-2 px-4 border-b">700.00</td>
                </tr>
            </tbody>
        </table>
        <div class="mt-4">
            <nav class="flex justify-center">
                <ul class="inline-flex items-center -space-x-px">
                    <li>
                        <a href="#" class="py-2 px-3 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700">«</a>
                    </li>
                    <li>
                        <a href="#" class="py-2 px-3 leading-tight text-blue-600 bg-blue-50 border border-gray-300 hover:bg-blue-100 hover:text-blue-700">1</a>
                    </li>
                    <li>
                        <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">2</a>
                    </li>
                    <li>
                        <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">3</a>
                    </li>
                    <li>
                        <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700">»</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</body>
</html>

 

