<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - GestorPro</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-slate-900 via-gray-900 to-slate-800">

    <!-- BACKGROUND EFFECT -->
    <div class="absolute w-96 h-96 bg-blue-500/20 rounded-full blur-3xl top-10 left-10"></div>
    <div class="absolute w-96 h-96 bg-purple-500/20 rounded-full blur-3xl bottom-10 right-10"></div>

    <!-- CONTAINER -->
    <div class="relative w-full max-w-md z-10 px-4">

        <!-- CARD -->
        <div class="bg-gray-900 border border-gray-700 shadow-2xl rounded-2xl p-8">

            <!-- LOGO / TITLE -->
            <div class="text-center mb-6">
                <h1 class="text-3xl font-bold text-white">
                    GestorPro
                </h1>
                <p class="text-gray-400 text-sm mt-1">
                    Acesse sua conta
                </p>
            </div>

            <!-- ERRORS -->
            @if ($errors->any())
                <div class="bg-red-500/20 text-red-300 p-3 rounded mb-4 text-sm">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <!-- FORM -->
            <form method="POST" action="/login" class="space-y-5">
                @csrf

                <!-- EMAIL -->
                <div>
                    <label class="text-gray-300 text-sm">Email</label>
                    <input
                        type="email"
                        name="email"
                        placeholder="seuemail@exemplo.com"
                        class="w-full mt-1 px-4 py-3 rounded-lg bg-gray-800 border border-gray-600 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                        required
                    >
                </div>

                <!-- SENHA -->
                <div>
                    <label class="text-gray-300 text-sm">Senha</label>
                    <input
                        type="password"
                        name="password"
                        placeholder="••••••••"
                        class="w-full mt-1 px-4 py-3 rounded-lg bg-gray-800 border border-gray-600 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                        required
                    >
                </div>

                <!-- REMEMBER -->
                <div class="flex items-center justify-between text-sm text-gray-400">
                    <label class="flex items-center gap-2">
                        <input type="checkbox" name="remember" class="rounded bg-gray-700 border-gray-600">
                        Lembrar-me
                    </label>
                </div>

                <!-- BUTTON -->
                <button
                    type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 transition text-white font-semibold py-3 rounded-lg shadow-lg shadow-blue-500/20"
                >
                    Entrar
                </button>
            </form>

        </div>

        <!-- FOOTER -->
        <p class="text-center text-gray-500 text-xs mt-6">
            © {{ date('Y') }} GestorPro
        </p>

    </div>

</body>
</html>