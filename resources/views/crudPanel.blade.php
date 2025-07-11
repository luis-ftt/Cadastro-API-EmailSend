<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @vite(['resources/js/email-filter.js']);
</head>
<body>
    <div> Bem vindo! {{$dados->name}} 
            <a href="{{route('logout')}}" class="text-blue-900 underline">Sair da conta</a>
    </div>
    <form method="GET" action="{{route('crudPanel')}}">
    <div class="flex justify-center">
        <input class="border border-black rounded-md p-1 mb-5"
        type="text" 
        id="search" 
        value="{{$search ?? ''}}"
        name="search" placeholder="Pesquisar pelo nome "/>
    </div>
    </form>
        <div class="flex justify-center">
        <table class="border-collapse border border-gray-300">
            <thead>
            <tr class="bg-gray-200">
                <th class="border border-gray-300 px-4 py-2 text-center">ID</th>
                <th class="border border-gray-300 px-4 py-2 text-center">Nome</th>
                <th class="border border-gray-300 px-4 py-2 text-center">Email</th>
                <th class="border border-gray-300 px-4 py-2 text-center bg-gray-400">Editar</th>
                <th class="border border-gray-300 px-4 py-2 text-center bg-red-400">Excluir</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
            <tr>
                <td class="border border-gray-300 px-4 py-2 text-center">{{$usuario->id}}</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{$usuario->name}}</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{$usuario->email}}</td>
                <td class="border border-gray-300 px-4 py-2 text-center"><a href="{{route('crudEditar', $usuario->id)}}"> Editar </a></td>
                <td class="border border-gray-300 px-4 py-2 text-center"><a href="{{route('crudExcluir', $usuario->id)}}" onclick="return confirm('Excluir : {{$usuario->name}} email: {{$usuario->email}}? ' )"> Excluir </a></td>

            </tr>
            @endforeach
            </tbody>
        </table>
        </div>
                <div class="mt-4 flex justify-center">
                {{ $usuarios->appends(['search' => $search])->links() }}
        </div>

        <div class="flex flex-col items-center gap-2 mt-5">
            <span>Buscar por emails específicos / Treinar o Fetch no JS</span>
            <div>

            <form method="GET" action="" id="emailForm" class="flex flex-col items-center gap-2">
            <select class="border border-black" id="emailFilter">
                <option value=""></option>
                <option value="gmail">gmail</option>
                <option value="hotmail">hotmail</option>

            </select>
                    <input
                type="submit"
                value="Enviar"
                class="bg-blue-500 text-black px-6 py-2 rounded-full mt-4 block mx-auto hover:bg-blue-600 hover:text-white transition"
            />
            </form>

            <div id="result"></div>
            </div>
            <div class="mt-5">

            <form method="POST" action="{{route('sendMail')}}">
                @csrf
                <input type="text" id="msg" name="msg" placeholder="Enviar Email de suporte" class="border border-black rounded-md p-3"> 
                <button type="submit" class="border border-black rounded-md bg-gray-200">Enviar</button>
            </form>
        </div>
        </div>

        
</body>
</html>