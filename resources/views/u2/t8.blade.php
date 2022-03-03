@extends('genericc')

@section('titulo')
TEMA 8 - U2
@endsection

@section('titulotema')
Identificar problemas de actualización y mantenimiento de aplicaciones multinivel.
@endsection

@section('contenido')
Todas las modificaciones de la aplicación deben ser transferidas a todos los clientes. 
Par solucionar dichos problemas se utiliza la arquitectura de tres niveles: 
Capa de presentación: Esta capa se encarga de recibir datos y eliminarlos para mostrarlos de una manera adecuada.
Capa de los datos: Esta se encarga de gestionar los datos de la aplicación. 
Capa lógica de la aplicación: Esta capa es el código que el usuario utiliza para recabar datos que se habían perdido. 
Al pasar de un sistema de tres niveles a multinivel es sencillo ya que solo extienden la capa de lógica de datos, haciendo que interactúen múltiples aplicaciones. 
@endsection

@section('temaimagen')
@endsection
