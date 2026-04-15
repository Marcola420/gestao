<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>GestorPro</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            margin: 0;
            font-family: system-ui, -apple-system, Inter, sans-serif;
            background: #f8fafc;
            color: #0f172a;
        }

        /* SIDEBAR */
        .sidebar {
            width: 260px;
            min-height: 100vh;
            background: #0f172a;
            padding: 24px;
            border-right: 1px solid #1e293b;
        }

        .sidebar h2 {
            color: #fff;
            margin-bottom: 20px;
            font-size: 18px;
        }

        .sidebar a {
            display: block;
            padding: 10px;
            margin-bottom: 6px;
            color: #cbd5e1;
            text-decoration: none;
            border-radius: 8px;
            border: 1px solid transparent;
            font-size: 14px;
        }

        .sidebar a:hover {
            background: #1e293b;
            color: #fff;
            border-color: #334155;
        }

        /* CONTEÚDO */
        .content {
            flex: 1;
            padding: 30px;
        }

        /* CARD */
        .card {
            background: #fff;
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            padding: 20px;
            box-shadow: 0 1px 2px rgba(0,0,0,0.04);
        }

        /* BOTÃO */
        .btn {
            background: #2563eb;
            color: white;
            padding: 10px 14px;
            border-radius: 10px;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
        }

        .btn:hover {
            background: #1d4ed8;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
        }

        th {
            text-align: left;
            padding: 12px;
            border-bottom: 1px solid #e2e8f0;
            color: #475569;
        }

        td {
            padding: 12px;
            border-bottom: 1px solid #f1f5f9;
        }

        tr:hover {
            background: #f8fafc;
        }
    </style>
</head>

<body>

<div style="display:flex;">

    <!-- SIDEBAR -->
    <div class="sidebar">
        <h2>GestorPro</h2>

        <a href="/dashboard">📊 Dashboard</a>
        <a href="/clients">👤 Clientes</a>
        <a href="/services">✂️ Serviços</a>
        <a href="/appointments">📅 Agendamentos</a>
        <a href="/payments">💰 Pagamentos</a>
    </div>

    <!-- CONTEÚDO -->
    <div class="content">
        @yield('content')
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>
</html>