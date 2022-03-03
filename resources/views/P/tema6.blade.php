@extends('genericc')

@section('titulo')
TEMA 6 - U1
@endsection

@section('titulotema')
Identificar las ventajas y desventajas de la arquitectura cliente/servidor.
@endsection

@section('contenido')
Ventajas
Centralización del control
Escalabilidad
Mantenimiento Fácil
Redes C/S los demás clientes no tienen acceso a las IP`S por lo tanto es mas difícil el rastreo y/o hackeo de usuarios<br>
Desventajas 
Congestión del trafico, Pasa cuando una gran cantidad de clientes envia peticiones simultaneas al mismo servidor
Paradigma clásico no tiene la robustez de una red P2P. Cuando un servidor está caído, las peticiones de los clientes no pueden ser satisfechas
El software y el hardware de un servidor son generalmente muy determinantes
El cliente no dispone de los recursos que puedan existir en el servidor
@endsection

@section('temaimagen')
@endsection
