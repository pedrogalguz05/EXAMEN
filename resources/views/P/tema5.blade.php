@extends('genericc')

@section('titulo')
TEMA 5 - U1
@endsection

@section('titulotema')
econocer las características de la arquitectura Cliente/Servidor.
@endsection

@section('contenido')
Servicios: se trata de una relación entre procesos en maquinas diferentes, el proceso servidor proporciona servicios, el cliente consume servicios. El mecanismo proporciona una separación clara de funciones basada en la idea de un servicio. 
Recursos compartidos: Hay una relación 1 a n entre el servidor y los clientes. Los clientes siempre inician el diálogo pidiendo servicios. Los servidores esperan pasivamente las peticiones de los clientes. Un servidor puede atender a muchos clientes al mismo tiempo y regular sus accesos a los recursos compartidos
Protocolos asimétricos:  Hay una relación 1 a n entre el servidor y los clientes. Los clientes siempre inician el diálogo pidiendo servicios. Los servidores esperan pasivamente las peticiones de los clientes.
Independencia de la ubicación: El software cliente/servidor ideal es independiente del hardware y del sistema operativo.
Comunicación de mensajes: Los clientes y servidores interactúan utilizando un mecanismo de paso de mensajes. El mensaje es el soporte para las peticiones de servicios y las respuestas
Encapsulación de servicios: El servidor es un especialista. Un mensaje le dice al servidor que servicio se solicita; es tarea del servidor determinar como realizar el trabajo. Los servidores se pueden actualizar sin afectar a los clientes siempre y cuando no se modifique su interfaz.
Escalabilidad e integridad: El código y los datos del servidor se mantienen centralizados, con lo que es menos costoso su mantenimiento y controlar la integridad de los datos compartidos.
@endsection

@section('temaimagen')
@endsection
