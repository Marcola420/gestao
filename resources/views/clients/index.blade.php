@extends('layouts.app')

@section('content')

<h1 style="font-size:22px; font-weight:600; margin-bottom:20px;">
    👤 Clientes
</h1>

<a class="btn" href="{{ route('clients.create') }}">+ Novo Cliente</a>

<br><br>

<div class="card">

<table>
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Ações</th>
    </tr>

    @foreach($clients as $client)
        <tr>
            <td>{{ $client->name }}</td>
            <td>{{ $client->email }}</td>
            <td>{{ $client->phone }}</td>
            <td>
                <a href="{{ route('clients.edit', $client->id) }}"
                   style="color:#2563eb; text-decoration:none;">
                    Editar
                </a>
                |
                <form action="{{ route('clients.destroy', $client->id) }}"
                      method="POST"
                      style="display:inline;">
                    @csrf
                    @method('DELETE')

                    <button type="submit"
                            style="background:none; border:none; color:#ef4444; cursor:pointer;">
                        Excluir
                    </button>
                </form>
            </td>
        </tr>
    @endforeach

</table>

</div>

@endsection