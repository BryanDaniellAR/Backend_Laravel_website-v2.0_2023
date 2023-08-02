@extends('layouts.app')
@section('content')
<div class="card mt-3">
    <div class="card-header d-inline-flex">
        <h5>Formulario para Editar Extension</h5>
        <a href="{{route('extensions.index')}}" class="btn btn-secondary ms-auto" >Volver</a>
    </div>
    <div class="card-body">
        <form action ="{{route('extensions.update',$id)}}" method ="POST" enctype="multipart/form-data" id="create">
            @method('PUT')
            @csrf
            @include('extensions.partials.form')
        </form>
    </div>
    <div class="card-footer">
        <button class="btn btn-primary" form="create">
            Editar
        </button>
    </div>
</div>
@endsection