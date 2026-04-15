<@extends('layouts.app')

@section('content')

<h1 style="font-size:22px; font-weight:600; margin-bottom:20px;">
    ➕ Novo Agendamento
</h1>

<div class="card">

<form method="POST" action="{{ route('appointments.store') }}">
    @csrf

    <!-- CLIENTE -->
    <label>Cliente</label><br>
    <select name="client_id"
            style="width:100%; padding:10px; margin-bottom:15px;">
        @foreach($clients as $client)
            <option value="{{ $client->id }}">{{ $client->name }}</option>
        @endforeach
    </select>

    <!-- DATA -->
    <label>Data do Agendamento</label><br>
    <input type="datetime-local"
           name="appointment_date"
           style="width:100%; padding:10px; margin-bottom:15px;">

    <!-- SERVIÇO (texto mesmo, como você já usa) -->
    <label>Serviço</label><br>
    <input type="text"
           name="service"
           placeholder="Ex: Corte, Escova..."
           style="width:100%; padding:10px; margin-bottom:15px;">

    <!-- STATUS -->
    <label>Status</label><br>
    <select name="status"
            style="width:100%; padding:10px; margin-bottom:15px;">
        <option value="pendente">Pendente</option>
        <option value="concluido">Concluído</option>
        <option value="cancelado">Cancelado</option>
    </select>

    <!-- OBS -->
    <label>Observações</label><br>
    <textarea name="notes"
              placeholder="Observações..."
              style="width:100%; padding:10px; margin-bottom:15px;"></textarea>

    <button class="btn" type="submit">
        Salvar
    </button>

</form>

</div>

@endsection