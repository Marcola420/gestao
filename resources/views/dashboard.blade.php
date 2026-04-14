@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <h2 class="mb-4">📊 Dashboard</h2>

    <div class="row">

        <!-- CLIENTES -->
        <div class="col-md-4">
            <div class="card bg-primary text-white mb-3">
                <div class="card-body">
                    <h5>Total de Clientes</h5>
                    <h2>{{ $totalClients ?? 0 }}</h2>
                </div>
            </div>
        </div>

        <!-- AGENDAMENTOS -->
        <div class="col-md-4">
            <div class="card bg-success text-white mb-3">
                <div class="card-body">
                    <h5>Agendamentos</h5>
                    <h2>{{ $totalAppointments ?? 0 }}</h2>
                </div>
            </div>
        </div>

        <!-- FATURAMENTO -->
        <div class="col-md-4">
            <div class="card bg-warning text-dark mb-3">
                <div class="card-body">
                    <h5>Faturamento</h5>
                    <h2>R$ {{ $totalRevenue ?? 0 }}</h2>
                </div>
            </div>
        </div>

    </div>

    <!-- GRÁFICO -->
    <div class="card mt-4">
        <div class="card-body">
            <h5>📈 Faturamento Mensal</h5>
            <canvas id="chart"></canvas>
        </div>
    </div>

</div>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const ctx = document.getElementById('chart');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun'],
            datasets: [{
                label: 'Faturamento (R$)',
                data: [500, 800, 1200, 900, 1500, 2000],
                borderWidth: 1
            }]
        }
    });
</script>

@endsection