@extends('layouts.app')

@section('content')

<h2>Novo Cliente</h2>

<form action="{{ route('clients.store') }}" method="POST">
@csrf

<input type="text" name="name" placeholder="Nome" class="form-control mb-2" required>
<input type="text" name="phone" placeholder="Telefone" class="form-control mb-2">
<input type="email" name="email" placeholder="Email" class="form-control mb-2">
<textarea name="notes" placeholder="Observações" class="form-control mb-2"></textarea>

<button class="btn btn-success">Salvar</button>

</form>

@endsection