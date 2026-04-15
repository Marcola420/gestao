@extends('layouts.app')

@section('content')

<h1 style="font-size:22px; font-weight:600; margin-bottom:20px;">
    ✏️ Editar Serviço
</h1>

<div class="card">

<form method="POST" action="{{ route('services.update', $service->id) }}">
    @csrf
    @method('PUT')

    <!-- NOME -->
    <label>Nome do Serviço</label><br>
    <input type="text"
           name="name"
           value="{{ $service->name }}"
           style="width:100%; padding:10px; margin-bottom:15px;">

    <!-- PREÇO -->
    <label>Preço</label><br>
    <input type="number"
           step="0.01"
           name="price"
           value="{{ $service->price }}"
           style="width:100%; padding:10px; margin-bottom:15px;">

    <!-- DESCRIÇÃO -->
    <label>Descrição</label><br>
    <textarea name="description"
              style="width:100%; padding:10px; margin-bottom:15px;">{{ $service->description }}</textarea>

    <button class="btn" type="submit">
        Atualizar Serviço
    </button>

</form>

</div>

@endsection