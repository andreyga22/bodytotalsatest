<?php
?>

<div class="mb-4">
    <label for="type" class="form-label">Tipo</label>
    <select name="type" id="type" required class="form-control">
        <option value="matricula" selected>Matricula</option>
        <option value="mensualidad">Mensualidad</option>
        <option value="venta">Venta</option>
    </select>
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


<script lang="javascript">
    let type = document.getElementById("type");
    type.addEventListener('change', function handleChange(event) {
        if (event.target.value === "venta") {
            console.log("venta");
            let boton = document.getElementById("boton");
            boton.innerHTML = "Siguiente";
        } else {
            let boton = document.getElementById("boton");
            boton.innerHTML = "Aceptar";
        }
    });
</script>

<div class="row justify-content-center">
    <button type="submit" class="btn btn-primary col-3" id="boton">Aceptar</button>
</div>

