@extends('menu')
@section('content')
<form action="guardar" method="post">
@csrf
Nombre:<input type="text" name="nombre"><br>
Apellido:<input type="text" name="apellido"><br>
Telefono:<input type="text" name="telefono"><br>
<input type="submit" name="bte" value="Guardar">
</form>
@if (isset($mensaje))
{{$mensaje}}

@endif
    
@endisset


    
@endsection