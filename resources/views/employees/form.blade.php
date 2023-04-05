<div class="mb-3">
    <label for="firstName" class="form-label">Primer Nombre:</label>
    <input required value="{{old('name', $employee->firstName)}}" type="text" class="form-control" id="firstName" name="firstName">
</div>

<div class="mb-3">
    <label for="secondName" class="form-label">Segundo Nombre:</label>
    <input required value="{{old('name', $employee->secondName)}}" type="text" class="form-control" id="secondName" name="secondName">
</div>

<div class="mb-3">
    <label for="firstLastName" class="form-label">Primer Apellido:</label>
    <input required value="{{old('name', $employee->firstLastName)}}" type="text" class="form-control" id="firstLastName" name="firstLastName">
</div>

<div class="mb-3">
    <label for="secondLastName" class="form-label">Segundo Apellidos:</label>
    <input required value="{{old('name', $employee->secondLastName)}}" type="text" class="form-control" id="secondLastName" name="secondLastName">
</div>

<div class="mb-3">
    <label for="age" class="form-label">Edad:</label>
    <input required value="{{old('name', $employee->age)}}" type="number" class="form-control" id="age" name="age">
</div>

<div class="mb-3">
    <label for="nationalId" class="form-label">Cedula:</label>
    <input required value="{{old('name', $employee->nationalId)}}" type="number" class="form-control" id="nationalId" name="nationalId">
</div>

<div class="mb-3">
    <label for="status" class="form-label">Estado:</label>
    <input required value="{{old('name', $employee->status)}}" type="text" class="form-control" id="name" name="status">
</div>

<div class="row justify-content-center">
    <button type="submit" class="btn btn-primary col-3">Aceptar</button>
</div>
