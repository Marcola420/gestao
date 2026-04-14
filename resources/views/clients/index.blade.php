@extends('layouts.app')

@section('content')

<h2>Clientes</h2>

<a href="{{ route('clients.create') }}" class="btn btn-primary mb-3">Novo Cliente</a>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>

    @foreach($clients as $client)
    <tr>
        <td>{{ $client->name }}</td>
        <td>{{ $client->email }}</td>
        <td>
            <a href="{{ route('clients.edit', $client) }}" class="btn btn-warning">Editar</a>

            <form action="{{ route('clients.destroy', $client) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Excluir</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{{ $clients->links() }}

@endsection