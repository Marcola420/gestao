@extends('layouts.app')

@section('content')

<h1 style="font-size:22px; font-weight:600; margin-bottom:20px;">
    💰 Novo Pagamento
</h1>

<div class="card">

<form method="POST" action="{{ route('payments.store') }}">
    @csrf

    <!-- CLIENTE -->
    <label>Cliente</label><br>
    <select name="client_id"
            style="width:100%; padding:10px; margin-bottom:15px;">
        @foreach($clients as $client)
            <option value="{{ $client->id }}">{{ $client->name }}</option>
        @endforeach
    </select>

    <!-- VALOR -->
    <label>Valor</label><br>
    <input type="number"
           step="0.01"
           name="amount"
           placeholder="Ex: 150.00"
           style="width:100%; padding:10px; margin-bottom:15px;">

    <!-- STATUS -->
    <label>Status</label><br>
    <select name="status"
            style="width:100%; padding:10px; margin-bottom:15px;">
        <option value="pendente">Pendente</option>
        <option value="pago">Pago</option>
    </select>

    <!-- MÉTODO -->
    <label>Método de Pagamento</label><br>
    <select name="method"
            style="width:100%; padding:10px; margin-bottom:15px;">
        <option value="pix">PIX</option>
        <option value="dinheiro">Dinheiro</option>
        <option value="cartao">Cartão</option>
    </select>

    <button class="btn" type="submit">
        Salvar Pagamento
    </button>

</form>

</div>

@endsection