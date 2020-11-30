@extends('layouts.admin')
@section('title','Registro de obras')
@section('breadcrumb')
<li class="breadcrumb-item active">
    <a href="{{route('parks.index')}}">Registro de obras</a>
</li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Registro de obras</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                title="Collapse">
                <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
        </div>
    </div>
    <form enctype="multipart/form-data" id="fupForm" >
        <div class="card-body ">

            <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="OBR_Nombre" id="OBR_Nombre" class="form-control">
            </div>
            <div class="form-group">
                <label>Descripción</label>
                <input type="text" name="OBR_Descripcion" id="OBR_Descripcion" class="form-control">
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">

                    
                      <label for="">Tipo de obra </label>
                      <select class="form-control" name="ID_Tipo" id="ID_Tipo">
                        <option>-- Seleccione un tipo de obra --</option>
                        <option value="1">Transporte</option>
                      </select>
                


                </div>
                <div class="col-md-3 mb-3">
                    <label>Fecha de inicio</label>
                    <input type="text" name="OBR_Fecha_Inicio" id="OBR_Fecha_Inicio" class="form-control">
                </div>
                <div class="col-md-3 mb-3">
                    <label>Fecha de fin</label>
                    <input type="text" name="OBR_Fecha_Fin" id="OBR_Fecha_Fin" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label>Monto</label>
                <input type="text" name="OBR_Monto" id="OBR_Monto" class="form-control">
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-6">
                    <label>Coordenadas x</label>
                    <input type="text" name="OBR_Coordenada_X" id="OBR_Coordenada_X" class="form-control">
                </div>
                <div class="col-md-6 mb-6">
                    <label>Coordenadas y</label>
                    <input type="text" name="OBR_Coordenada_Y" id="OBR_Coordenada_Y" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label>Duración dela obra en días</label>
                <input type="text" name="OBR_Dias_Calendarios" id="OBR_Dias_Calendarios" class="form-control">
            </div>


            <div class="form-group">
                
                

                <label for="">Imagen</label>
                <input type="file" class="form-control-file" name="OBR_Foto" id="OBR_Foto">
            </div>


        </div>

        <input type="submit" name="submit" class="btn btn-danger submitBtn" value="SAVE"/>

    </form>
</div>
@endsection

@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>





$(document).ready(function(e){
    $("#fupForm").on('submit', function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'https://smartcityhyo.tk/api/Obra/Insert_obra.php', 
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $('.submitBtn').attr("disabled","disabled");
                $('#fupForm').css("opacity",".5");
            },
            success: function(msg){
                $('.statusMsg').html('');
                if(msg == 'ok'){
                    $('#fupForm')[0].reset();
                    $('.statusMsg').html('<span style="font-size:18px;color:#34A853">Form data submitted successfully.</span>');
                }else{
                    $('.statusMsg').html('<span style="font-size:18px;color:#EA4335">Some problem occurred, please try again.</span>');
                }
                $('#fupForm').css("opacity","");
                $(".submitBtn").removeAttr("disabled");
            }
        });
    });
    
    //file type validation
    $("#file").change(function() {
        var file = this.files[0];
        var imagefile = file.type;
        var match= ["image/jpeg","image/png","image/jpg"];
        if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]))){
            alert('Please select a valid image file (JPEG/JPG/PNG).');
            $("#file").val('');
            return false;
        }
    });
});






</script>
@endsection
