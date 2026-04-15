@extends('layouts.app')

@section('content')

<h1 style="font-size:22px; font-weight:600; margin-bottom:20px;">
    ✏️ Editar Pagamento
</h1>

<div class="card">

<form method="POST" action="{{ route('payments.update', $payment->id) }}">
    @csrf
    @method('PUT')

    <!-- CLIENTE -->
    <label>Cliente</label><br>
    <select name="client_id"
            style="width:100%; padding:10px; margin-bottom:15px;">
        @foreach($clients as $client)
            <option value="{{ $client->id }}"
                {{ $payment->client_id == $client->id ? 'selected' : '' }}>
                {{ $client->name }}
            </option>
        @endforeach
    </select>

    <!-- VALOR -->
    <label>Valor</label><br>
    <input type="number"
           step="0.01"
           name="amount"
           value="{{ $payment->amount }}"
           style="width:100%; padding:10px; margin-bottom:15px;">

    <!-- STATUS -->
    <label>Status</label><br>
    <select name="status"
            style="width:100%; padding:10px; margin-bottom:15px;">
        <option value="pendente" {{ $payment->status == 'pendente' ? 'selected' : '' }}>Pendente</option>
        <option value="pago" {{ $payment->status == 'pago' ? 'selected' : '' }}>Pago</option>
    </select>

    <!-- MÉTODO -->
    <label>Método</label><br>
    <select name="method"
            style="width:100%; padding:10px; margin-bottom:15px;">
        <option value="pix" {{ $payment->method == 'pix' ? 'selected' : '' }}>PIX</option>
        <option value="dinheiro" {{ $payment->method == 'dinheiro' ? 'selected' : '' }}>Dinheiro</option>
        <option value="cartao" {{ $payment->method == 'cartao' ? 'selected' : '' }}>Cartão</option>
    </select>

    <button class="btn" type="submit">
        Atualizar Pagamento
    </button>

</form>

</div>

@endsection