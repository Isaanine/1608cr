<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mural</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    @vite('resources/css/app.css')
</head>

<body class="bg-white overflow-x-hidden">
    <header class="bg-white shadow-lg">
        <div class="flex items-center justify-between">
            <div id="logo" class="flex items-center p-5 bg-customRed rounded-br-lg">
                <p id="plogo" class="text-white font-itim text-5xl">Meu Perfil</p>
            </div>
            <nav id="navbar" class="hidden md:flex items-center space-x-12 gap-14">
                <a href="/ong/account" class="text-customBlue text-2xl font-itim hover:text-customRed hover:underline hover:pb-3">Meus Dados</a>
                <a href="/ong/mural" class="text-customRed text-2xl font-itim hover:text-customRed hover:underline hover:pb-3">Mural</a>
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
            <a href="/ong/account" class="block text-customBlue text-lg font-itim py-2 hover:text-customRed">Meus Dados</a>
            <a href="/ong/mural" class="text-customRed text-lg font-itim hover:text-customRed">Mural</a>
            <a href="/ong/courses" class="block text-customBlue text-lg font-itim py-2 hover:text-customRed">Cursos</a>
            <a href="/ong/volunteer" class="block text-customBlue text-lg font-itim py-2 hover:text-customRed">Voluntários</a>
            <a href="/" class="block text-customBlue text-lg font-itim py-2 hover:text-customRed">Matriculas</a>
        </div>
    </header>

    <main class="p-6">
        <div class="bg-customRed rounded-2xl p-4 max-w-5xl mx-auto flex flex-col shadow-lg">
            <h2 class="text-white text-2xl font-bold">Mural</h2>
            <h3 class="text-white text-xl text-center font-bold">Mensagens do Mural</h3>
            <div class="mt-4 w-full">
                <label for="search" class="text-white font-bold">Para buscar um recado, preencha o campo abaixo:</label>
                <div class="flex flex-row">
                    <input type="text" id="search" name="search" class="w-full mt-2 p-2 rounded" placeholder="Palavra chave: Nome do postador, email e título da postagem">
                    <button class="mt-2 p-2 bg-customBlue2 text-white rounded hover:bg-blue-900 flex items-end">Pesquisar</button>
                </div>
            </div>
        </div>
        <!-- Comentarios -->
        <div class="flex justify-center mt-4">
            <div class="w-full max-w-5xl rounded-xl bg-gray-100 border-2 border-gray-400 py-6 px-4 sm:px-10">
                <div class="flex flex-col">
                    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center">
                        <div class="flex flex-row items-center">
                            <!-- Ícone dos comentários -->
                            <img src="http://127.0.0.1:8000/images/image-gallery.png" alt="Ícone de comentário" class="w-12 h-12 mr-4">
                            <div class="flex flex-col">
                                <label class="text-lg font-bold text-indigo-900">Reunião de pais!!</label>
                                <div class="flex flex-row">
                                    <label class="text-black mr-1">Postado por:</label>
                                    <label class="text-green-500 font-bold">Paulo donizeti</label>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-start sm:items-center mt-4 sm:mt-0 text-center">
                            <label class="text-center">25 de August de 2023,</label>
                            <label class="text-center">10:11</label>
                        </div>
                    </div>
                    <!-- Linhas horizontais -->
                    <div class="my-4">
                        <hr class="border-2 border-gray-400">
                    </div>
                    <div class="flex flex-col justify-between mb-4">
                        <p>Prezados Pais e Responsáveis,</p>
                        <p>Convidamos todos para a nossa reunião de pais, que acontecerá no dia 1º de agosto de 2024, às 19h, no auditório da escola.</p>
                        <p>Discutiremos o progresso dos alunos e planos para o próximo semestre.</p>
                        <p>Contamos com sua presença!</p>
                    </div>
                    <!-- Botões do crud -->
                    <div class="flex sm:flex-row gap-4 mt-4 sm:mt-0 self-center sm:self-start">
                        <button class="bg-green-500 text-lg text-white rounded-lg px-10 py-2 hover:bg-green-900">Curtir</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center mt-4">
            <div class="w-full max-w-5xl rounded-xl bg-gray-100 border-2 border-gray-400 py-6 px-4 sm:px-10">
                <div class="flex flex-col">
                    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center">
                        <div class="flex flex-row items-center">
                            <!-- Ícone dos comentários -->
                            <img src="http://127.0.0.1:8000/images/image-gallery.png" alt="Ícone de comentário" class="w-12 h-12 mr-4">
                            <div class="flex flex-col">
                                <label class="text-lg font-bold text-indigo-900">Reunião de pais!!</label>
                                <div class="flex flex-row">
                                    <label class="text-black mr-1">Postado por:</label>
                                    <label class="text-green-500 font-bold">Paulo donizeti</label>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-start sm:items-center mt-4 sm:mt-0 text-center">
                            <label class="text-center">25 de August de 2023,</label>
                            <label class="text-center">10:11</label>
                        </div>
                    </div>
                    <!-- Linhas horizontais -->
                    <div class="my-4">
                        <hr class="border-2 border-gray-400">
                    </div>
                    <div class="flex flex-col justify-between mb-4">
                        <p>Prezados Pais e Responsáveis,</p>
                        <p>Convidamos todos para a nossa reunião de pais, que acontecerá no dia 1º de agosto de 2024, às 19h, no auditório da escola.</p>
                        <p>Discutiremos o progresso dos alunos e planos para o próximo semestre.</p>
                        <p>Contamos com sua presença!</p>
                    </div>
                    <!-- Botões do crud -->
                    <div class="flex sm:flex-row gap-4 mt-4 sm:mt-0 self-center sm:self-start">
                        <button class="bg-green-500 text-lg text-white rounded-lg px-10 py-2 hover:bg-green-900">Curtir</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center mt-4">
            <div class="w-full max-w-5xl rounded-xl bg-gray-100 border-2 border-gray-400 py-6 px-4 sm:px-10">
                <div class="flex flex-col">
                    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center">
                        <div class="flex flex-row items-center">
                            <!-- Ícone dos comentários -->
                            <img src="http://127.0.0.1:8000/images/image-gallery.png" alt="Ícone de comentário" class="w-12 h-12 mr-4">
                            <div class="flex flex-col">
                                <label class="text-lg font-bold text-indigo-900">Reunião de pais!!</label>
                                <div class="flex flex-row">
                                    <label class="text-black mr-1">Postado por:</label>
                                    <label class="text-green-500 font-bold">Paulo donizeti</label>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-start sm:items-center mt-4 sm:mt-0 text-center">
                            <label class="text-center">25 de August de 2023,</label>
                            <label class="text-center">10:11</label>
                        </div>
                    </div>
                    <!-- Linhas horizontais -->
                    <div class="my-4">
                        <hr class="border-2 border-gray-400">
                    </div>
                    <div class="flex flex-col justify-between mb-4">
                        <p>Prezados Pais e Responsáveis,</p>
                        <p>Convidamos todos para a nossa reunião de pais, que acontecerá no dia 1º de agosto de 2024, às 19h, no auditório da escola.</p>
                        <p>Discutiremos o progresso dos alunos e planos para o próximo semestre.</p>
                        <p>Contamos com sua presença!</p>
                    </div>
                    <!-- Botões do crud -->
                    <div class="flex sm:flex-row gap-4 mt-4 sm:mt-0 self-center sm:self-start">
                        <button class="bg-green-500 text-lg text-white rounded-lg px-10 py-2 hover:bg-green-900">Curtir</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Botão ver mais-->
        <div class="flex justify-center mt-6">
            <details class="mt-6">
                <summary class="cursor-pointer text-black hover:underline">Ver mais...</summary>
                <div class="flex items-center justify-center mt-4">
                    <div class="flex flex-col">
                        <div class="flex justify-center mt-4">
                            <div class="w-full max-w-5xl rounded-xl bg-gray-100 border-2 border-gray-400 py-6 px-4 sm:px-10">
                                <div class="flex flex-col">
                                    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center">
                                        <div class="flex flex-row items-center">
                                            <!-- Ícone dos comentários -->
                                            <img src="http://127.0.0.1:8000/images/image-gallery.png" alt="Ícone de comentário" class="w-12 h-12 mr-4">
                                            <div class="flex flex-col">
                                                <label class="text-lg font-bold text-indigo-900">Reunião de pais!!</label>
                                                <div class="flex flex-row">
                                                    <label class="text-black mr-1">Postado por:</label>
                                                    <label class="text-green-500 font-bold">Paulo donizeti</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col items-start sm:items-center mt-4 sm:mt-0 text-center">
                                            <label class="text-center">25 de August de 2023,</label>
                                            <label class="text-center">10:11</label>
                                        </div>
                                    </div>
                                    <!-- Linhas horizontais -->
                                    <div class="my-4">
                                        <hr class="border-2 border-gray-400">
                                    </div>
                                    <div class="flex flex-col justify-between mb-4">
                                        <p>Prezados Pais e Responsáveis,</p>
                                        <p>Convidamos todos para a nossa reunião de pais, que acontecerá no dia 1º de agosto de 2024, às 19h, no auditório da escola.</p>
                                        <p>Discutiremos o progresso dos alunos e planos para o próximo semestre.</p>
                                        <p>Contamos com sua presença!</p>
                                    </div>
                                    <!-- Botões do crud -->
                                    <div class="flex sm:flex-row gap-4 mt-4 sm:mt-0 self-center sm:self-start">
                                        <button class="bg-green-500 text-lg text-white rounded-lg px-10 py-2 hover:bg-green-900">Curtir</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center mt-4">
                            <div class="w-full max-w-5xl rounded-xl bg-gray-100 border-2 border-gray-400 py-6 px-4 sm:px-10">
                                <div class="flex flex-col">
                                    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center">
                                        <div class="flex flex-row items-center">
                                            <!-- Ícone dos comentários -->
                                            <img src="http://127.0.0.1:8000/images/image-gallery.png" alt="Ícone de comentário" class="w-12 h-12 mr-4">
                                            <div class="flex flex-col">
                                                <label class="text-lg font-bold text-indigo-900">Reunião de pais!!</label>
                                                <div class="flex flex-row">
                                                    <label class="text-black mr-1">Postado por:</label>
                                                    <label class="text-green-500 font-bold">Paulo donizeti</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col items-start sm:items-center mt-4 sm:mt-0 text-center">
                                            <label class="text-center">25 de August de 2023,</label>
                                            <label class="text-center">10:11</label>
                                        </div>
                                    </div>
                                    <!-- Linhas horizontais -->
                                    <div class="my-4">
                                        <hr class="border-2 border-gray-400">
                                    </div>
                                    <div class="flex flex-col justify-between mb-4">
                                        <p>Prezados Pais e Responsáveis,</p>
                                        <p>Convidamos todos para a nossa reunião de pais, que acontecerá no dia 1º de agosto de 2024, às 19h, no auditório da escola.</p>
                                        <p>Discutiremos o progresso dos alunos e planos para o próximo semestre.</p>
                                        <p>Contamos com sua presença!</p>
                                    </div>
                                    <!-- Botões do crud -->
                                    <div class="flex sm:flex-row gap-4 mt-4 sm:mt-0 self-center sm:self-start">
                                        <button class="bg-green-500 text-lg text-white rounded-lg px-10 py-2 hover:bg-green-900">Curtir</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

    </main>
    <!-- footer -->
    <footer class="w-full mt-auto">
        <img class="w-full h-auto" src="http://127.0.0.1:8000/images/footerPurple.png" alt="">
    </footer>
</body>

</html>