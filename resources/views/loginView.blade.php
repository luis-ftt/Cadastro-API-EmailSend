<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite(['resources/js/login-register.js'])

    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>
<body class="overflow-hidden">
    <header class="text-3xl flex justify-center border-b border-black">
        <div class="m-3">Página de login</div>
    </header>

<main class="w-screen h-screen flex justify-center items-center" data-aos="fade">
  <div class="w-full flex justify-center">
  <div id="LoginForm" class="transition-transform duration-500 translate-x-0 bg-white w-1/4 h-[50%] border-none rounded-md shadow-md shadow-black flex justify-center items-center">
    <form method="POST" action="{{route('loginForm')}}" class="space-y-4 w-full px-6">
      @csrf
      @if(session('error'))
      <span class="text-red-400 text-shadow-md shadow-black  text-[25px]">{{session('error')}}</span>
      <div></div>
      @endif
      @if($errors->any())
      <span class="text-red-400 text-shadow-md shadow-black  text-[25px]">{{$errors->first()}}</span>
      <div></div>
      @endif
    <label for="email">
        Email:
      <input
        class="flex border max-w-full  border-gray-600 text-gray-800 placeholder-gray-400 text-sm rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150 px-4 py-3 w-[250px]"
        type="email"
        name="email"
        id="email"
        value="{{old('email')}}"
        placeholder="Escreva seu email"
      />
       </label>

        <label for="password">
         Senha:
      <input
        class="flex border max-w-full  border-gray-600 text-gray-800 placeholder-gray-400 text-sm rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150 px-4 py-3 w-[250px]"
        type="password"
        name="password"
        id="password"
        placeholder="Escreva sua senha"
      />
      </label>
      <input
        type="submit"
        value="Enviar"
        class="bg-white text-black px-6 py-2 rounded-full mt-4 block mx-auto hover:bg-blue-600 hover:text-white transition"
      />
      <button type="button" id="toRegister" class="button block mx-auto mt-2 text-blue-700 hover:underline">
        Não tem Conta? Registrar
      </button>
    </form>
  </div>

  <div id="registerForm" class="hidden transition-transform duration-500 translate-x-full bg-white w-1/4 h-[50%] border-none rounded-md shadow-md shadow-black justify-center items-center">
    <form method="POST" action="{{route('registerForm')}}" class="space-y-4 w-full px-6">
      @csrf
      @if(session('error'))
      <span class="text-red-400 text-shadow-md shadow-black  text-[25px]">{{session('error')}}</span>
      <div></div>
      @endif
      @if($errors->any())
      <span class="text-red-400 text-shadow-md shadow-black  text-[25px]">{{$errors->first()}}</span>
      <div></div>
      @endif

      <label for="name">
        Nome:
      <input
        class="flex border max-w-full border-gray-600 text-gray-800 placeholder-gray-400 text-sm rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150 px-4 py-3 w-[250px]"
        type="name"
        name="name"
        id="name"
        value="{{old('name')}}"
        placeholder="Escreva seu nome"
      />
       </label>



    <label for="email">
        Email:
      <input
        class="flex border max-w-full border-gray-600 text-gray-800 placeholder-gray-400 text-sm rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150 px-4 py-3 w-[250px]"
        type="email"
        name="email"
        id="email"
        value="{{old('email')}}"
        placeholder="Escreva seu email"
      />
       </label>

        <label for="password">
         Senha:
      <input
        class="flex border max-w-full  border-gray-600 text-gray-800 placeholder-gray-400 text-sm rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150 px-4 py-3 w-[250px]"
        type="password"
        name="password"
        id="password"
        placeholder="Escreva sua senha"
      />
      </label>

      <label for="password_confirmation">
         Senha:
      <input
        class="flex border max-w-full border-gray-600 text-gray-800 placeholder-gray-400 text-sm rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150 px-4 py-3 w-[250px]"
        type="password"
        name="password_confirmation"
        id="password_confirmation"
        placeholder="Confirme sua senha"
      />
      </label>

      <input
        type="submit"
        value="Enviar"
        class="bg-white max-w-full text-black px-6 py-2 rounded-full mt-4 block mx-auto hover:bg-blue-600 hover:text-white transition"
      />
      <button type="button" id="toLogin" class="button block mx-auto mt-2 text-blue-700 hover:underline">
        Já possui Conta? Entrar na conta.
      </button>
    </form>
  </div>
  </div>
  
</main>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        AOS.init({
        duration: 100,
        easing: 'ease-in-out',
        });
    });
  </script>

</body>
</html>
