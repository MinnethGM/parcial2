@extends('layouts.default')
@section('titulo_pagina','Examen')
@section('titulo','palindromo')
@section('subtitulo','Quien es el palindromo?')
@section('contenido')
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Palindromo</h3>
            </div>
            <div class="box-body">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Palabra</label>
                        <input type="text" id="cadena" class="form-control" name="palabra">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" id="evaluar">Evalua</button>
                    </div>
                <label id="palindromo"></label>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    function doChangePais(event) {
        $.get("/api/polindromo/" + $("#cadena").val(),
        function (data) {
            $("#palindromo").empty();
            for(var i=0; i<data.length; i++){
                $("#palindromo").append('' + data[i] + '');
            }
        });
    }
    $(function () {
        $("#evaluar").click(doChangePais);
    });
</script>    
@endsection