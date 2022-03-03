@extends('genericc')

@section('titulo')
TEMA 1 - U2
@endsection

@section('titulotema')
Reconocer los conceptos de presentación distribuida, presentación remota, lógica o proceso distribuido, acceso a datos remotos y bases de datos distribuidas.
@endsection

@section('contenido')
Presentación distribuida: Es un tipo de capa la cual se distribuye entre el cliente y el servidor, haciendo que el cliente se acople o modifique a la presentación que ofrece el servidor.<br><img src="images/imagen1.png" alt="" /><br>
Presentación remota: En este tipo de capa se realizan las validaciones de los datos, los formatos de salida etc. Esta se ejecuta en cliente, mientras que el acceso a la BD se encuentra en el servidor.<br><img src="images/imagen2.png" alt="" /><br>
Proceso distribuido:  La capa de presentación se encuentra en el cliente, mientras que el acceso a la BD se encuentra dentro del servidor, haciendo que su lógica de negocios ocupe tanto el servidor como el cliente de la misma manera. <br><img src="images/imagen3.png" alt="" /><br>
Base de datos remota: En este modelo la BD se encuentra en el servidor, mientras que la capa de negocio y de presentación se encuentra en el servidor. <br><img src="images/imagen4.png" alt="" /><br>
Base de datos distribuida: En este modelo la base de datos se encuentra tanto en el cliente como en el servidor, y las capas de negocio y de presentación se encuentran dentro del cliente únicamente. <br><img src="images/imagen5.png" alt="" /><br>
@endsection

@section('temaimagen')
@endsection
