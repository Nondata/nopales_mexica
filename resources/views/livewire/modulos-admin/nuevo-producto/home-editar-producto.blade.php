@extends('livewire.modulos-admin.home')
@section('content')
    @livewire('modulos-admin.navbar')
    @livewire('modulos-admin.nuevo-producto.edit-producto', ['producto' => $producto])
@endsection