<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar-se</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <script src=" {{ asset('js/script.js') }} "></script>
    @vite('resources/css/app.css')
</head>

<body class="overflow-auto">
    <div class="relative min-h-screen flex items-center justify-center  bg-center">
        <div class="bg-white w-[500px] my-5 mx-5 px-8 py-10 rounded-3xl shadow-md border border-gray-300 relative z-10">
            <a href="/signup">
                <button class="w-20 -translate-y-4 -translate-x-3 flex items-center py-1.5 px-6 space-x-2 hover:bg-gray-200 hover:rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-log-out" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M11 5l-7 7l7 7" />
                        <path d="M19 12h-14" />
                    </svg>
                </button>
            </a>
            <div class="flex justify-center mb-6">
                <img src="{{ asset('images/logo.png') }}" alt="Logo Crescer Sabendo" class="h-16">
            </div>
            <h2 class="text-center text-3xl font-bold mb-6">Seja bem-vindo!!</h2>
            <form action="/createong" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700">Nome da ONG</label>
                    <input type="text" required name="nome_ong" class="w-full p-2 rounded-xl border-2 border-purple-900 h-12 focus:outline-none">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">CNPJ </label>
                    <input type="text" required maxlength="18" name="cnpj_ong" class="w-full p-2 rounded-xl border-2 border-purple-900 h-12 focus:outline-none">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Quem responde pela ONG</label>
                    <input type="text" name="resp_ong" class="w-full p-2 rounded-xl border-2 border-purple-900 h-12 focus:outline-none">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">CEP</label>
                    <input type="text" maxlength="10" required name="cep" class="w-full p-2 rounded-xl border-2 border-purple-900 h-12 focus:outline-none">
                </div>
                <div class="grid grid-cols-2 gap-5 mb-4 ">
                    <div>
                        <label class="block text-gray-700">Estado</label>
                        <input type="text" maxlength="2" required name="estado" class="w-full p-2 rounded-xl border-2 border-purple-900 h-12 focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-gray-700">Cidade</label>
                        <input type="text" required name="cidade" class="w-full p-2 rounded-xl border-2 border-purple-900 h-12 focus:outline-none">
                    </div>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Zona</label>
                    <input type="text" required name="zona" class="w-full p-2 rounded-xl border-2 border-purple-900 h-12 focus:outline-none">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Complemento</label>
                    <input type="text" required name="complemento" class="w-full p-2 rounded-xl border-2 border-purple-900 h-12 focus:outline-none">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Endereço</label>
                    <input type="text" required name="endereco" class="w-full p-2 rounded-xl border-2 border-purple-900 h-12 focus:outline-none">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Comprovante de endereço</label>
                    <input type="file" required name="compro_endereco" class="w-full p-2 rounded-xl border-2 border-purple-900 h-12 focus:outline-none">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Telefone</label>
                    <input type="text" maxlength="15" required name="telefone" class="w-full p-2 rounded-xl border-2 border-purple-900 h-12 focus:outline-none">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Link para doação</label>
                    <input type="text" required name="link_doacao" class="w-full p-2 rounded-xl border-2 border-purple-900 h-12 focus:outline-none">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Descreva as atividades, os projetos realizados e o publico alvo da ONG</label>
                    <textarea name="ativ_ong" class="w-full p-2 rounded-xl border-2 border-purple-900 h-24 focus:outline-none"></textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Email</label>
                    <input type="text" required name="email" class="w-full p-2 rounded-xl border-2 border-purple-900 h-12 focus:outline-none">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Senha</label>
                    <input type="text" required name="senha" class="w-full p-2 rounded-xl border-2 border-purple-900 h-12 focus:outline-none">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Confirmar Senha</label>
                    <input type="text" required name="c_senha" class="w-full p-2 rounded-xl border-2 border-purple-900 h-12 focus:outline-none">
                </div>
                <button type="submit" class="w-full bg-purple-900 text-white p-2 rounded-xl text-lg font-semibold hover:bg-purple-700">Cadastrar-se</button>
            </form>
            @if ($errors->any())
            <div class="mt-4">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li class="text-red-500">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>

        <img src="{{ asset('images/signInBack.png') }}" alt="Background" class="absolute inset-0 w-full h-full  z-0">
    </div>
</body>

</html>