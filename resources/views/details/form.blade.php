<?php
?>

<div class="mb-4">
    <label for="idActive" class="form-label">Activo</label>
    <select name="idActive" id="idActive" required class="form-control">
        @foreach($actives as $active)
            <option value="{{ $active->id }}" {{ $active->id === $detail->idActive ? 'selected' :  ''}} >{{ $active->name }}</option>
        @endforeach
    </select>
</div>
<div class="mb-4">
    <label for="idTransaction" class="form-label">Transaccion</label>
    <select name="idTransaction" id="idTransaction" required class="form-control">
        @foreach($transactions as $transaction)
            @if($transaction->type === "venta")
                @if(session()->has('newId'))
                    {{ session()->get('newId') }}
                    <option value="{{ $transaction->id }}" {{ $transaction->id === session()->get('newId') ? 'selected' :  ''}} >{{ $transaction->id }}</option>
                @else
                    <option value="{{ $transaction->id }}" {{ $transaction->id === $detail->idTransaction ? 'selected' :  ''}} >{{ $transaction->id }}</option>
                @endif
            @endif
        @endforeach
    </select>
</div>


<div class="mb-3">
    <label for="quantity" class="form-label">Cantidad</label>
    <input required value="{{old('quantity', $active->quantity)}}" type="number" class="form-control" id="quantity" name="quantity">
</div>
<div class="row justify-content-center">
    <button type="submit" class="btn btn-primary col-3">Aceptar</button>
</div>

