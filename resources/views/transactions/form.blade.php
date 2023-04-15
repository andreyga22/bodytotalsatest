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
<div class="row justify-content-center">
    <button type="submit" class="btn btn-primary col-3">Aceptar</button>
</div>

