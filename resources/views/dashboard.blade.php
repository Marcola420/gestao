@extends('layouts.app')

@section('content')


<h1 style="font-size:22px; font-weight:600; margin-bottom:20px;">
    📊 Dashboard
</h1>

<!-- CARDS -->
<div style="display:grid; grid-template-columns: repeat(3, 1fr); gap:20px;">

    <div class="card">
        <p style="color:#64748b; font-size:14px;">Total de Clientes</p>
        <h1 style="font-size:28px;">{{ $totalClients }}</h1>
    </div>

    <div class="card">
        <p style="color:#64748b; font-size:14px;">Agendamentos</p>
        <h1 style="font-size:28px;">{{ $totalAppointments }}</h1>
    </div>

    <div class="card">
        <p style="color:#64748b; font-size:14px;">Faturamento</p>
        <h1 style="font-size:28px;">
            R$ {{ number_format($totalRevenue, 2, ',', '.') }}
        </h1>
    </div>

</div>

<br>

<!-- GRAFICO -->
<div class="card">
    <h3 style="margin-bottom:15px;">📈 Faturamento Mensal</h3>

    <canvas id="grafico" height="100"></canvas>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {

    const ctx = document.getElementById('grafico');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun'],
            datasets: [{
                label: 'Faturamento',
                data: [
                    1200,
                    1900,
                    3000,
                    2500,
                    3200,
                    {{ $totalRevenue ?? 0 }}
                ],
                backgroundColor: [
                    '#2563eb',
                    '#3b82f6',
                    '#60a5fa',
                    '#1d4ed8',
                    '#93c5fd',
                    '#2563eb'
                ],
                borderRadius: 6
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

});
</script>

@endsection