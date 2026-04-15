@extends('layouts.app')

@section('content')

<h1 style="font-size:22px; font-weight:600; margin-bottom:20px;">
    📅 Agendamentos
</h1>

<a class="btn" href="{{ route('appointments.create') }}">+ Novo Agendamento</a>

<br><br>

<div class="card">

<table>
    <tr>
        <th>Cliente</th>
        <th>Data</th>
        <th>Serviço</th>
        <th>Status</th>
        <th>Ações</th>
    </tr>

    @foreach($appointments as $appointment)
        <tr>
            <td>{{ $appointment->client->name ?? 'N/A' }}</td>
            <td>{{ $appointment->date }}</td>
            <td>{{ $appointment->service->name ?? 'N/A' }}</td>
            <td>{{ $appointment->status }}</td>
            <td>
                <a href="{{ route('appointments.edit', $appointment->id) }}">Editar</a>
            </td>
        </tr>
    @endforeach

</table>

</div>

@endsection