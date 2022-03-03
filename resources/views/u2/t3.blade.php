@extends('genericc')

@section('titulo')
TEMA 3 - U2
@endsection

@section('titulotema')
Explicar el proceso de desarrollo de lógica de acceso a datos, lógica de presentación de datos y lógica de negocio o lógica de aplicación.
@endsection

@section('contenido')
Este es un modelo el cual tiene como objetivo la separación de un sistema de software, dividiéndolo en cada parte que lo compone. 
La presentación es la capa web: Esta capa presenta el sistema al usuario y le comunica cierta información al igual que realiza un capturado de información del usuario en una mínima de procesos.
La lógica de negocio es la capa aplicativa: En esta residen los programas que se han ejecutado. Guarda información acerca de las peticiones que ha realizado el usuario y envía las respuestas tras el proceso. 
Los datos son la capa de base de datos: En esta se guardan los datos, en esta se realiza todo el almacenamiento, se encarga de igual forma de recibir peticiones acerca de recuperación de información desde la capa de negocios.
@endsection

@section('temaimagen')
@endsection
