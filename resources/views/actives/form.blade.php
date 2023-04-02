<?php
?>

<div class="mb-3">
    <label for="name" class="form-label">Nombre</label>
    <input required value=" {{ old('name', $active->name) }}" type="text" class="form-control" id="name" name="name">
</div>
<div class="mb-3">
    <label for="brand" class="form-label">Marca</label>
    <input required value=" {{ old('name', $active->brand) }}" type="text" class="form-control" id="brand" name="brand">
</div>
<div class="mb-3">
    <label for="price" class="form-label">Precio</label>
    <input required value=" {{ old('name', $active->price) }}" type="number" class="form-control" id="price" name="price">
</div>
<div class="mb-3" >
    <label for="weight" class="form-label">Peso</label>
    <input required value=" {{ old('name', $active->weight) }}" type="number" class="form-control" id="weight" name="weight">
</div>
<div class="mb-3">
    <label for="quantity" class="form-label">Cantidad</label>
    <input required value=" {{ old('name', $active->quantity) }}" type="number" class="form-control" id="quantity" name="quantity">
</div>
<div class="mb-3">
    <label for="status" class="form-label">Estado</label>
    <input required value=" {{ old('name', $active->status) }}" type="text" class="form-control" id="status" name="status">
</div>
<div class="row justify-content-center">
    <button type="submit" class="btn btn-primary col-3">Aceptar</button>
</div>

