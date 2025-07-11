<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="overflow-hidden">
    <header class="text-3xl flex justify-center border-b border-black">
        <div class="m-3">Estudando</div>
    </header>
    <main class="w-screen h-screen flex justify-center items-center">
        <div class="bg-blue-100 w-1/2 h-[80%] border-none rounded-md shadow-md shadow-black flex justify-center items-center">
        <a href="{{route('loginView')}}" class="border border-black rounded-full p-3 bg-blue-400 hover:bg-blue-500 hover:text-[17px] transition-all duration-75 ease">Entrar no Site</a>
        </div>
    </main>
</body>
</html>
