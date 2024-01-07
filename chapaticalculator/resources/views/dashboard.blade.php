<html>
<head>

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Mono&family=Poppins:wght@200&display=swap" rel="stylesheet">    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/htmx.org@1.9.10" integrity="sha384-D1Kt99CQMDuVetoL1lrYwg5t+9QdHe7NLX/SoJYkXDFfX37iInKRy5xLSi8nO7UC" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>

<body class="m-0 p-0 bg-blue-100">


<div class="text-center mt-5">
    <p>-------------------------------------</p>
    <p style="font-family: Poppins" class="text-2xl">Chapo History &#128514;</p>
    <a href="/" style="font-family: Calibri" class="text-lg underline decoration-2">Home</a>
</div>
<div class="flex mt-5">
    <div class="relative overflow-x-auto shadow-md w-[300px] rounded-lg ml-[300px] mt-5">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <caption class="text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800 py-[10px] pl-[70px]"> Chapatis Eaten: {{ $totalChapatis }}</caption>
            <thead class="text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th class="px-6 py-3">Date</th>
                <th class="px-6 py-3">Chapatis Eaten</th>
            </tr>
            </thead>
            <tbody>
            @foreach($latestEntries as $entry)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-4 text-center">{{ $entry->created_at->format('d-m-Y') }}</td>
                    <td class="px-6 py-4 text-center">{{ $entry->number_input }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="text-center mt-5 text-center ml-[100px] mt-10">
        <p class="text-xl font-semibold mb-2">Your Streak!</p>

        <div class=" w-16 h-16 inline-block rounded-full p-3 border-4 {{ $streak > 0 ? 'border-green-500' : 'border-red-500' }}">
            <span class="text-lg" style="color: {{ $streak > 0 ? 'green' : 'red' }};">{{ $streak }}</span>
        </div>
    </div>
</div>

<div class="text-center mt-[10px] mr-4">
    <p>---------------------------------------------</p>
    <p class="text-xl">Grateful for Mr and Mrs Hyphens for their unending support</p>
</div>




</body>
</html>
<x-success></x-success>
