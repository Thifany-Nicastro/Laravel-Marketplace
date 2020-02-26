@extends('layouts.app')

@section('content')
<h1>Criar Loja</h1>
<form action="{{route('admin.stores.store')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="">Nome Loja</label>
        <input type="text" name="name" id="" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Descrição</label>
        <input type="text" name="description" id="" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Telefone</label>
        <input type="text" name="phone" id="" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Celular/Whatsapp</label>
        <input type="text" name="mobile_phone" id="" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Slug</label>
        <input type="text" name="slug" id="" class="form-control">
    </div>

    <div>
        <button type="submit" class="btn btn-primary btn-lg">Criar Loja</button>
    </div>
</form>
@endsection