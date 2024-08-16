<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <script src=" {{ asset('js/script.js') }} "></script>
    @vite('resources/css/app.css')

</head>

<body class="bg-gray-100 overflow-x-hidden margin-auto">
    <!-- Header  -->
    <header class="bg-white shadow-lg">
        <div class="flex items-center justify-between">
            <div id="logo" class="flex items-center p-5 bg-customRed rounded-br-lg">
                <p id="plogo" class="text-white font-itim text-5xl">Meu Perfil</p>
            </div>
            <nav id="navbar" class="hidden md:flex items-center space-x-12 gap-14">
                <a href="/aluno/account" class="text-customRed text-2xl font-itim hover:text-red-700 hover:underline hover:pb-3">Meus Dados</a>
                <a href="/aluno/mural" class="text-customBlue text-2xl font-itim hover:text-red-700 hover:underline hover:pb-3">Mural</a>
                <a href="/aluno/chat" class="text-customBlue text-2xl font-itim hover:text-red-700 hover:underline hover:pb-3">Chat</a>
            </nav>
            <div id="userAction" class="hidden md:flex items-center space-x-2 mr-3">
                <a href="#" class="text-gray-600 hover:text-customRed">
                    <img id="userImg" class="h-10 mr-2" src="{{ asset('images/icons/userIconRed.png') }}" alt="">
                </a>
            </div>
            <div id="mobile-nav" class="md:hidden mr-5">
                <button id="mobile-menu-toggle" class="focus:outline-none">
                    <img class="h-10" src="{{ asset('images/icons/taskbarRed.png') }}" alt="">
                </button>
            </div>
        </div>
        <div id="mobile-menu" class="hidden bg-white py-2 px-4">
            <a href="#" class="block text-customRed text-lg font-itim py-1 hover:text-customRed">Meus Dados</a>
            <a href="/aluno/mural" class="text-customBlue text-lg font-itim hover:text-customRed">Mural</a>
            <a href="/aluno/chat" class="block text-customBlue text-lg font-itim py-1 hover:text-customRed">Chat</a>
        </div>
    </header>


    <!-- End Header -->
    @php
    $aluno = Session::get('aluno');
    @endphp

    <div id="ProfileImage" class="relative w-screen h-52 mb-4 md:mb-10">
        <div class="relative inset-0 bg-customBrown w-full h-52 md:h-40 lg:h-52 sm:h-32">
            <!-- diminui a altura em telas menores -->
            <div class="absolute bottom-4 sm:right-4 mx-10 right-2">
                <a href="" class="text-gray-600 hover:text-purple-900">
                    <img src="{{ asset('images/icons/EditIcon.png') }}" alt="Logo" class="w-10 h-10 sm:w-6 sm:h-6">
                </a>
            </div>
        </div>
        <div id="ProfileIcon" class="z-10 absolute bottom-0 left-0 translate-y-1/2 md:mx-12 mx-4 my-3">
            <div
                class="border-2 border-black rounded-full w-24 h-24 sm:w-32 sm:h-32 md:w-40 md:h-40 lg:w-48 lg:h-48 xl:w-56 xl:h-56 flex justify-center items-center">
                <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                    class="rounded-full w-20 h-20 sm:w-28 sm:h-28 md:w-36 md:h-36 lg:w-44 lg:h-44 xl:w-52 xl:h-52 object-cover">
            </div>
        </div>
    </div>


    <!-- END Home Profile-->

    <!--Divider Menu-->
    <div class="my-6  w-11/12 flex justify-between items-center relative">
        <div class="flex-1 flex justify-center">
            <p class="font-itim font-bold sm:text-4xl">{{ $aluno->Nome }}</p>
        </div>

    </div>
    <div class="flex justify-center">
        <div id="Divider" class="w-11/12 h-1 bg-gray-400 "></div>
    </div>
    <!--END Divider Menu-->


    <!--RULE MURAL-->
    <div class="w-full h-80  flex justify-center items-center my-14">
        <div id="gridCourses"
            class="my-20 bg-customBrown md:w-8/12 w-full rounded-4xl p-10 flex flex-wrap justify-between h-10/12">
            <div class="w-1/2">
                <p class="font-itim text-3xl md:text-6xl font-bold">Mural</p>
            </div>
            <p class="font-itim text-2xl mt-5 md:text-4xl ">Para postar seu recado, preencha corretamente todos os
                <br>campos, logo abaixo:
            </p>
        </div>
    </div>
    <!--End RULE MURAL-->

    <!-- Form Mural-->
    <div class="w-full h-80 shadow-sm flex justify-center items-center my-14">
        <div class="container mx-auto p-6">
            <form class="w-10/12 mx-auto">
                <div class="mb-4">
                    <label for="nome" class="block text-black text-lg font-bold mb-2">Nome</label>
                    <input type="text" id="nome" name="nome"
                        class="shadow appearance-none border-4 rounded-full border-customRed w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-black text-lg font-bold mb-2">Email</label>
                    <input type="email" id="email" name="email"
                        class="shadow appearance-none border-4 rounded-full border-customRed w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="assunto" class="block text-black text-lg font-bold mb-2">Assunto</label>
                    <input type="text" id="assunto" name="assunto"
                        class="shadow appearance-none border-4 rounded-full border-customRed w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="mensagem" class="block text-black text-lg font-bold mb-2">Deixe o seu Recado</label>
                    <textarea class="mt-1 block w-full border-4 border-customRed  rounded-xl px-6 py-3"></textarea>
                </div>
                <button type="submit"
                    class="bg-customRed hover:bg-red-700 text-white font-bold py-2 px-10 rounded-full focus:outline-none focus-shadow-outline">Enviar</button>
            </form>
        </div>
    </div>
    <!-- END Form Mural-->

    <div class="container mx-auto py-12 px-4 flex flex-col items-center">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Mensagens do Mural</h2>
        <div class="w-10/12 flex flex-col items-start">
            <p class="text-black mb-4 text-xl">Para buscar um recado, preencha o campo abaixo:</p>
            <div class="flex items-center mb-4 w-full">
                <input type="text" id="search"
                    class="w-full px-4 py-2 rounded-l-lg border-2 border-customBrown focus:ring focus:ring-blue-300 focus:ring-opacity-50"
                    placeholder="Nome do postador, email e título da postagem">
                <button
                    class="bg-customBrown hover:bg-blue-300 text-white font-bold py-2.5 px-4 rounded-r-lg focus:outline-none focus:shadow-outline"
                    type="button">Pesquisar</button>
            </div>
        </div>
    </div>

    <div class="h-72 flex justify-center items-center">
        <div class="border rounded-md p-4  w-10/12 md:w-6/12">
            <div class="flex justify-between items-center">
                <h2 class="text-lg font-bold text-blue-500">Reunião de pais!!</h2>
                <div class="text-sm text-gray-500">
                    <p>25 de August de 2023, </p>
                    <p>10:11</p>
                </div>
            </div>
            <p class="text-sm text-gray-500 mt-2">Postado por <span class="font-medium text-green-500">Paulo
                    donizeti</span></p>
            <p class="font-medium mt-4">Prezados Pais e Responsáveis,</p>
            <p>Convidamos todos para a nossa reunião de pais, que acontecerá no dia 1º de agosto de 2024, às 19h, no
                auditório da escola.</p>
            <p>Discutiremos o progresso dos alunos e planos para o próximo semestre.</p>
            <p class="font-medium">Contamos com sua presença!</p>
            <div class="text-sm text-gray-500 mt-4 flex justify-end">
                <a href="#" class="underline">10 Curtidas</a>
            </div>
        </div>
    </div>

    <!-- Teacher Footer Image -->
    <footer>
        <div class="max-w-full max-h-20">
            <!-- Image -->
            <img src="{{ asset('images/Finalback-Red.png') }}" alt=""
                class="relative inset-0 w-full h-full object-fit ">
        </div>
    </footer>
    <!-- END Teacher Footer Image -->
</body>

</html>