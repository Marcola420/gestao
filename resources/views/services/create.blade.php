@extends('layouts.app')

@section('content')

<h1 style="font-size:22px; font-weight:600; margin-bottom:20px;">
    ✂️ Novo Serviço
</h1>

<div class="card">

<form method="POST" action="{{ route('services.store') }}">
    @csrf

    <!-- NOME -->
    <label>Nome do Serviço</label><br>
    <input type="text"
           name="name"
           placeholder="Ex: Corte, Escova, Barba..."
           style="width:100%; padding:10px; margin-bottom:15px;">

    <!-- PREÇO -->
    <label>Preço</label><br>
    <input type="number"
           step="0.01"
           name="price"
           placeholder="Ex: 50.00"
           style="width:100%; padding:10px; margin-bottom:15px;">

    <!-- DESCRIÇÃO -->
    <label>Descrição</label><br>
    <textarea name="description"
              placeholder="Descreva o serviço..."
              style="width:100%; padding:10px; margin-bottom:15px;"></textarea>

    <button class="btn" type="submit">
        Salvar Serviço
    </button>

</form>

</div>

@endsection