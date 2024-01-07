<html>
<head>

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@200&display=swap" rel="stylesheet">    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/htmx.org@1.9.10" integrity="sha384-D1Kt99CQMDuVetoL1lrYwg5t+9QdHe7NLX/SoJYkXDFfX37iInKRy5xLSi8nO7UC" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>


<body class="m-0 p-0 bg-blue-100">
    <div class="mt-[30px] text-center">
        <p>-------------------------</p>
        <h2 style="font-family: Poppins" class="text-2xl mt-[10px]">a chapati a day keeps the doctor away &copy</h2>
        <a href="/dashboard" style="font-family: Calibri" class="text-lg underline decoration-2">Dashboard</a>
    </div>
    <div class="w-16 h-16 rounded-full overflow-hidden ml-[25px] mt-[5px]transform hover:rotate-180 transition-transform duration-300">
        <img src="img/chapati.jpeg" class="w-full h-full object-cover" alt="Chapati">
    </div>
    <div class="w-16 h-16 rounded-full overflow-hidden ml-[90%] mt-[5px] transform hover:rotate-180 transition-transform duration-300">
        <img src="img/chapati.jpeg" class="w-full h-full object-cover" alt="Chapati">
    </div>

    <div>
        <form  method="post" action="/add" class="text-center" id="chapatiForm">
            @csrf
            <input type="number" name="number_input" placeholder="Chapo ngapi boss?" class="p-5 rounded-xl" required>

                <button type="submit"
                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                   <span class="material-symbols-outlined">
add
</span>
                </button>

        </form>
    </div>

        <div class="w-16 h-16 rounded-full overflow-hidden ml-[25px] mt-[5px] transform hover:rotate-180 transition-transform duration-300">
        <img src="img/chapati.jpeg" class="w-full h-full object-cover" alt="Chapati">
    </div>
    <div class="w-16 h-16 rounded-full overflow-hidden ml-[90%] mt-[5px] transform hover:rotate-180 transition-transform duration-300">
        <img src="img/chapati.jpeg" class="w-full h-full object-cover" alt="Chapati">
    </div>
    <div class="text-center" >
        <p>-------------------------------------</p>
        <p style="font-family: 'Open Sans'" class="text-xl">pictures courtesy of <a href="https://twitter.com/chapatimistress" class="underline decoration-2">Chapati Mistress</a></p>
    </div>


</body>
</html>


