@extends('livewire.modulos-admin.home')
@section('content')
    @livewire('modulos-admin.navbar')
    @livewire('modulos-admin.nuevo-trabajador.edit-user', ['user' => $user])
@endsection