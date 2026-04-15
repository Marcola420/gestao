<h1>Editar Agendamento</h1>

<form method="POST" action="{{ route('appointments.update', $appointment->id) }}">
    @csrf
    @method('PUT')

    <input type="datetime-local" name="appointment_date" value="{{ $appointment->appointment_date }}">

    <input type="text" name="service" value="{{ $appointment->service }}">

    <select name="status">
        <option value="pendente" @selected($appointment->status == 'pendente')>Pendente</option>
        <option value="concluido" @selected($appointment->status == 'concluido')>Concluído</option>
        <option value="cancelado" @selected($appointment->status == 'cancelado')>Cancelado</option>
    </select>

    <textarea name="notes">{{ $appointment->notes }}</textarea>

    <button type="submit">Atualizar</button>
</form>