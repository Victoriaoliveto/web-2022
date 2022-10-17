<!DOCTYPE html>
<html lang="en">
<head>
    <base href="'.BASE_URL.'">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title> - Super Star</title>
</head>
<body>
<form action="{BASE_URL}editarZapatilla{$datosZapatillas->id_}" method="POST" >
    <div class="tabla_inputs">
        <div class="form-group">
        
            <input class="form-control" name="editar_Modelo_input" id="exampleInputEmail1" aria-describedby="emailHelp" type="text"
             value="{$datosZapatillas->Modelo}" placeholder="Editar Modelo">
        </div>
        <div class="form-group">
            <input class="form-control" name="editar_Precio_input" id="exampleInputEmail1" aria-describedby="emailHelp" type="text" 
            value="{$datosZapatillas->Precio}" placeholder="Editar Precio">
        </div>
        <div class="form-group">


            <input class="form-control" name="editar_Stock_input" id="exampleInputEmail1" aria-describedby="emailHelp" type="text" 
            value="{$datosZapatillas->Stock}" placeholder="Editar Stock">
        </div>
    
        <label>Marca</label>
        <div class="input-group mb-3">
            <select name="editar_Marca_select" class="custom-select" id="inputGroupSelect01">;
                {foreach from=$marcas item=marca}
                    {if $marca->Nombre eq $datosZapatillas->Nombre}
                       <option value="{$marca->id_marca}" selected="{$marca->Nombre}">{$marca->Nombre}</option> 
                    {else}
                    <option value="{$marca->id_marca}">{$marca->Nombre}</option>
                    {/if}
                {/foreach}
            </select>
        </div>
       
            <button type="submit" class="btn btn-light">Editar</button>
            <a type="button" class="btn btn-light" href="{BASE_URL}tabla">Cancelar</a>
        </div>

</form>   


{include file="footer.tpl"}