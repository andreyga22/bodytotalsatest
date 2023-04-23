<?php
?>

<div class="mb-3">
    <label for="type" class="form-label">Tipo</label>
    <input required value=" {{ old('type', $transaction->type) }}" type="text" class="form-control" id="type" name="type">
</div>
<div class="mb-3">
    <label for="price" class="form-label">Precio</label>
    <input required value=" {{ old('price', $transaction->price) }}" type="number" class="form-control" id="price" name="price">
</div>
<div class="mb-3" >
    <label for="date" class="form-label">Fecha</label>
    <input required value=" {{ old('date', $transaction->date) }}" type="date" class="form-control" id="date" name="date">
</div>
<div class="mb-4">
    <label for="idClient" class="form-label">Cliente</label>
    <select name="idClient" id="idClient" required class="form-control">
        @foreach($clients as $client)
            <option value="{{ $client->id }}" {{ $client->id === $transaction->idClient ? 'selected' :  ''}} >{{ $client->firstName }}</option>
        @endforeach
    </select>
</div>
<div class="mb-4">
    <label for="idEmployee" class="form-label">Empleado</label>
    <select name="idEmployee" id="idEmployee" required class="form-control">
        @foreach($employees as $employee)
            <option value="{{ $employee->id }}" {{ $employee->id === $transaction->idEmployee ? 'selected' :  ''}} >{{ $employee->firstName }}</option>
        @endforeach
    </select>
</div>

<div class="row justify-content-center">
    <button type="submit" class="btn btn-primary col-3">Aceptar</button>
</div>

