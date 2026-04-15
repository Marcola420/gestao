@extends('layouts.app')

@section('content')

<h1 style="font-size:22px; font-weight:600; margin-bottom:20px;">
    💰 Pagamentos
</h1>

<a class="btn" href="{{ route('payments.create') }}">+ Novo Pagamento</a>

<br><br>

<div class="card">

<table>
    <tr>
        <th>Cliente</th>
        <th>Valor</th>
        <th>Status</th>
        <th>Método</th>
        <th>Ações</th>
    </tr>

    @foreach($payments as $payment)
        <tr>
            <td>{{ $payment->client->name ?? 'N/A' }}</td>
            <td>R$ {{ number_format($payment->amount, 2, ',', '.') }}</td>
            <td>
                <span style="padding:4px 8px; border-radius:8px; background:#e2e8f0;">
                    {{ $payment->status }}
                </span>
            </td>
            <td>{{ $payment->method }}</td>
            <td>
                <a href="{{ route('payments.edit', $payment->id) }}">Editar</a>
            </td>
        </tr>
    @endforeach

</table>

</div>

@endsection