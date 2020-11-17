<div class="from-group">
    {!! Form::label('LT_Nombre','Nombre') !!}
    <input type="text" name="LT_Nombre" id="LT_Nombre" class="form-control">
</div>
<div class="from-group">
    {!! Form::label('LT_Descripcion','Descripción') !!}
    <input type="textarea" name="LT_Descripcion" id="LT_Descripcion" class="form-control">
</div>
<div class="from-group">
    {!! Form::label('ID_Distrito','ID Distritos') !!}
    <input type="number" name="ID_Distrito" id="ID_Distrito" class="form-control">
</div>

<div class="from-group">
    {!! Form::label('LT_Hora_Inicio','LT_Hora_Inicio') !!}
    <input type="text" name="LT_Hora_Inicio" id="LT_Hora_Inicio" class="form-control">
</div>

<div class="from-group">
    {!! Form::label('LT_Hora_Fin','LT_Hora_Fin') !!}
    <input type="text" name="LT_Hora_Fin" id="LT_Hora_Fin" class="form-control">
</div>





<div class="form-row">
    <div class="form-group col-md-4">
      {!! Form::label('LT_URL_Map','Enlace de google Maps') !!}
    <input type="text" name="LT_URL_Map" id="LT_URL_Map" class="form-control">
    </div>
    <div class="form-group col-md-4">
       {!! Form::label('LT_Latitud','LT_Latitud') !!}
    <input type="text" name="LT_Latitud" id="LT_Latitud" class="form-control">
    </div>
    <div class="form-group col-md-4">
      {!! Form::label('LT_Longitud','LT_Longitud') !!}
    <input type="text" name="LT_Longitud" id="LT_Longitud" class="form-control">
    </div>
</div>