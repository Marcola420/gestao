@extends('layouts.app')

@section('content')

<h2>Editar Cliente</h2>

<form action="{{ route('clients.update', $client) }}" method="POST">
@csrf
@method('PUT')

<input type="text" name="name" value="{{ $client->name }}" class="form-control mb-2" required>
<input type="text" name="phone" value="{{ $client->phone }}" class="form-control mb-2">
<input type="email" name="email" value="{{ $client->email }}" class="form-control mb-2">
<textarea name="notes" class="form-control mb-2">{{ $client->notes }}</textarea>

<button class="btn btn-success">Atualizar</button>

</form>

@endsection