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
    <form method="POST" action="{{route('crudEditPost')}}">
        @csrf
        <div class="flex justify-center">
        <table class="border-collapse border border-gray-300">
            <thead>
            <tr class="bg-gray-200">
                <th class="border border-gray-300 px-4 py-2 text-center">ID</th>
                <th class="border border-gray-300 px-4 py-2 text-center">Nome</th>
                <th class="border border-gray-300 px-4 py-2 text-center">Email</th>
                <th class="border border-gray-300 px-4 py-2 text-center bg-green-400">Salvar Alterações</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="border border-gray-300 px-4 py-2 text-center">{{$usuarios->id}}
                    <input type="hidden" name="id" value="{{ $usuarios->id }}">
                </td>
                <td class="border border-gray-300 px-4 py-2 text-center">
                     <input type="text" id="name" name="name" value="{{$usuarios->name}}" class="border-gray-600 text-gray-800 placeholder-gray-400 text-sm rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150 px-4 py-3 w-[250px]"/>
                </td>
                <td class="border border-gray-300 px-4 py-2 text-center">
                    <input type="text" id="email" name="email" value="{{$usuarios->email}}" class="border-gray-600 text-gray-800 placeholder-gray-400 text-sm rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150 px-4 py-3 w-[250px]"/>
                </td>
                <td>
                    <button type="submit" class="ml-12 border border-black rounded-md cursor-pointer bg-gray-200">
                        Atualizar
                    </button>
                </td>
            </tr>
            </tbody>
        </table>
        </div>
        </form>
</body>
</html>