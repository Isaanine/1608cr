<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 overflow-x-hidden">
    <header class="bg-white shadow-lg">
        <div class="flex items-center justify-between">
            <div id="logo" class="flex items-center p-5 bg-customRed rounded-br-lg">
                <p id="plogo" class="text-white font-itim text-5xl">Meu Perfil</p>
            </div>
            <nav id="navbar" class="hidden md:flex items-center space-x-12 gap-14">
                <a href="/ong/account" class="text-customRed text-2xl font-itim hover:text-customRed hover:underline hover:pb-3">Meus Dados</a>
                <a href="/ong/mural" class="text-customBlue text-2xl font-itim hover:text-customRed hover:underline hover:pb-3">Mural</a>
                <a href="/ong/courses" class="text-customBlue text-2xl font-itim hover:text-red-700 hover:underline hover:pb-3">Cursos</a>
                <a href="/ong/volunteer" class="text-customBlue text-2xl font-itim hover:text-red-700 hover:underline hover:pb-3">Voluntários</a>
                <a href="/" class="text-customBlue text-2xl font-itim hover:text-red-700 hover:underline hover:pb-3">Matriculas</a>
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
            <a href="/ong/account" class="block text-customRed text-lg font-itim py-2 hover:text-customRed">Meus Dados</a>
            <a href="/ong/mural" class="text-customBlue text-lg font-itim hover:text-customRed">Mural</a>
            <a href="/ong/courses" class="block text-customBlue text-lg font-itim py-2 hover:text-customRed">Cursos</a>
            <a href="/ong/volunteer" class="block text-customBlue text-lg font-itim py-2 hover:text-customRed">Voluntários</a>
            <a href="/" class="block text-customBlue text-lg font-itim py-2 hover:text-customRed">Matriculas</a>
        </div>
    </header>

    <div class="h-full bg-gray-100 p-8">
        <div class="bg-white rounded-lg shadow-xl pb-8 relative">
            <div x-data="{ openSettings: false }" class="absolute right-12 mt-4 rounded">
                <button @click="openSettings = !openSettings" class="border border-gray-400 p-2 rounded text-gray-300 hover:text-gray-300 bg-gray-100 bg-opacity-10 hover:bg-opacity-20" title="Settings">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                    </svg>
                </button>
                <div x-show="openSettings" @click.away="openSettings = false" class="bg-white absolute right-0 w-40 py-2 mt-1 border border-gray-200 shadow-2xl" style="display: none;">
                    <div class="py-2 border-b">
                        <p class="text-gray-400 text-xs px-6 uppercase mb-1">Opções</p>
                        <button class="w-full flex items-center px-6 py-1.5 space-x-2 hover:bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536M4 20h4.586a1 1 0 00.707-.293l9.414-9.414a1 1 0 00-1.414-1.414L8 18.293A1 1 0 007.293 19H4a1 1 0 01-1-1v-3.586a1 1 0 01.293-.707l9.414-9.414a1 1 0 011.414 1.414L5.414 15.586A1 1 0 005 16v4z" />
                            </svg>
                            <span class="text-sm text-gray-700">Editar Perfil</span>
                        </button>
                    </div>
                    <div class="py-2">
                        <p class="text-gray-400 text-xs px-6 uppercase mb-1">Conta</p>
                        <a href="{{ route('logout') }}">
                            <button class="w-full flex items-center py-1.5 px-6 space-x-2 hover:bg-gray-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M13 5l7 7l-7 7" />
                                    <path d="M5 12h14" />
                                </svg>
                                <span class="text-sm text-gray-700">Sair</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-full h-[250px]">
                <img src="https://vojislavd.com/ta-template-demo/assets/img/profile-background.jpg" class="w-full h-full rounded-tl-lg rounded-tr-lg">
            </div>
            <div class="flex items-center flex-col mt-10">
                @php
                $ong = Session::get('ong');
                @endphp
                @if($ong)
                <div class="flex items-center space-x-2">
                    <p class="text-2xl">{{ $ong->Nome }}</p>
                </div>
                @else
                <p class="text-xl">Não há ONG</p>
                @endif
            </div>
        </div>

        <!-- Ajuda -->
        <section class="bg-white py-10 rounded-xl mt-10">
            <div class="container mx-auto text-center">
                <h3 class="text-xl font-bold mb-4">Escolha abaixo forma pela qual deseja ajudar a ONG!</h3>
                <div class="flex flex-wrap justify-center gap-4">
                    @if($ong)
                    <div class="border-solid border-2 border-red-500 p-6 rounded-lg w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
                        <p class="text-sm m-5">Contribua para o futuro da nossa ONG fazendo uma doação financeira e nos ajude a continuar com o nosso trabalho.</p>
                        <a href="{{ $ong->Linkdoacao }}" class="inline-block py-1 text-xs text-white bg-red-500 px-8 hover:bg-red-600 rounded-lg">Doar</a>
                    </div>

                    <div class="border-solid border-2 border-red-500 p-6 rounded-lg w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
                        <p class="text-sm m-3">Se você prefere fazer doações de materiais ou alimentos, ficaremos muito gratos! Entre em contato conosco pelo nosso e-mail para mais detalhes.</p>
                        <a href="mailto:{{ $ong->Email }}" class="inline-block py-1 text-xs text-white bg-red-500 px-8 hover:bg-red-600 rounded-lg">Mandar E-mail</a>
                    </div>

                    <div class="border-solid border-2 border-red-500 p-6 rounded-lg w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
                        <p class="text-sm m-3">Junte-se a nós como voluntário e faça a diferença! Existem diversas áreas dentro da nossa ONG onde você pode oferecer sua ajuda e transformar vidas.</p>
                        <a href="#_" class="inline-block py-1 text-xs text-white bg-red-500 px-8 hover:bg-red-600 rounded-lg">Voluntariar-se</a>
                    </div>
                    @endif
                </div>
            </div>
        </section>

        <!-- Cursos e Professores Section -->
        <section class="py-10">
            <div class="container mx-auto flex flex-col lg:flex-row lg:space-x-8">
                <!-- Cursos Ofertados -->
                <div class="w-full lg:w-2/3 bg-white p-6 rounded-lg shadow-lg">
                    <h4 class="text-xl font-bold mb-4">Cursos Ofertados</h4>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4">
                        
                        @foreach ($cursos as $curso)
                        <div x-data="{ open: false }" class="bg-gray-300 p-4 rounded-lg relative">
                            <div class="cursor-pointer" @click="open = true">
                                <p class="text-center">Imagem do Curso</p>
                                <p class="text-center">{{ $curso->Nome }}</p>

                            </div>

                            <!-- Modal -->
                            <div x-show="open" @click.away="open = false" class="fixed inset-0 flex items-center justify-center z-50">
                                <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md relative flex-col sm:flex-row">
                                    <div class="flex justify-between items-center mb-4">
                                        <h4 class="text-lg font-bold">{{ $curso->Nome }}</h4>
                                        <!-- Close Button -->
                                        <button @click="open = false" class="text-black-500 hover:text-black-800 rounded-full p-2 text-lg font-bold">
                                            X
                                        </button>
                                    </div>

                                    <!-- Imagem do curso -->
                                    <div class="sm:w-1/3">
                                        <div class="bg-gray-300 w-full h-full rounded-md flex items-center justify-center">
                                            <p class="text-gray-500">IMAGEM</p>
                                        </div>
                                    </div>
                                    <h2 class="text-xl font-bold text-gray-800 mb-2">{{ $curso->Nome }}</h2>
                                    <p class="text-blue-600 text-base font-medium">
                                        Sobre: <span class="text-gray-800 font-semibold">{{ $curso->Sobre }}</span>
                                    </p>
                                    <p class="text-blue-600 text-base font-medium">
                                        Horário: <span class="text-gray-800 font-semibold">{{ $curso->Horario }}</span>
                                    </p>
                                    <p class="text-blue-600 text-base font-medium">
                                        Dias: <span class="text-gray-800 font-semibold">{{ $curso->Dias }}</span>
                                    </p>
                                    <p class="text-blue-600 text-base font-medium">
                                        Itens Aula: <span class="text-gray-800 font-semibold">{{ $curso->Itens_Aula }}</span>
                                    </p>
                                    <a href="#" class="block text-center bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Matricule-se</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- Cursos Ofertados -->
            </div>
        </section>
    </div>
</body>
</html>
