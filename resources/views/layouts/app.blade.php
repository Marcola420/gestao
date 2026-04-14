<!DOCTYPE html>
<html>
<head>
    <title>GestorPro</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            overflow-x: hidden;
        }

        .sidebar {
            height: 100vh;
            width: 220px;
            position: fixed;
            background-color: #212529;
            padding-top: 20px;
        }

        .sidebar a {
            color: #ccc;
            display: block;
            padding: 10px 20px;
            text-decoration: none;
        }

        .sidebar a:hover {
            background-color: #343a40;
            color: #fff;
        }

        .content {
            margin-left: 220px;
            padding: 20px;
        }
    </style>
</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <h4 class="text-white text-center">GestorPro</h4>

    <a href="/dashboard">📊 Dashboard</a>
    <a href="/clients">👥 Clientes</a>
    <a href="/services">✂️ Serviços</a>
    <a href="/appointments">📅 Agendamentos</a>
    <a href="/payments">💰 Pagamentos</a>

    <hr class="text-secondary">

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="btn btn-danger w-100">Sair</button>
    </form>
</div>

<!-- CONTEÚDO -->
<div class="content">

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    @yield('content')

</div>

</body>
</html>