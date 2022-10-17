

<form action="{BASE_URL}editarMarca/{$datosMarca->id_marca}" method="POST" >
    <div class="tabla_inputs">
        <div class="form-group">
            <input class="form-control" name="editar_Nombre_input" id="exampleInputEmail1" aria-describedby="emailHelp" type="text"
             value="{$datosMarca->Nombre}" placeholder="Editar Marca">
        </div>
       
            <button type="submit" class="btn btn-light">Editar</button>
            <a type="button" class="btn btn-light" href="{BASE_URL}tabla">Cancelar</a>
        </div>
    </div>
</form>   
{include file="footer.tpl"}
