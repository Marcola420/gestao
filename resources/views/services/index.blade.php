@extends('layouts.app')

@section('content')

<h1 style="font-size:22px; font-weight:600; margin-bottom:20px;">
    ✂️ Serviços
</h1>

<a class="btn" href="{{ route('services.create') }}">+ Novo Serviço</a>

<br><br>

<div class="card">

<table>
    <tr>
        <th>Nome</th>
        <th>Preço</th>
        <th>Ações</th>
    </tr>

    @foreach($services as $service)
        <tr>
            <td>{{ $service->name }}</td>
            <td>R$ {{ number_format($service->price, 2, ',', '.') }}</td>
            <td>
                <a href="{{ route('services.edit', $service->id) }}">Editar</a>
            </td>
        </tr>
    @endforeach

</table>

</div>

@endsection