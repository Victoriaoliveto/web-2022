{include file="header.tpl"}

<form action="{BASE_URL}addMarca" method="POST">
    <div class="tabla_inputs">
        <label>Nombre</label>
        <div class="respuesta">
            <input class="input_Marca" name="input_Marca" type="text" placeholder="Marca">
        </div>
        <div> 
              
            <button type="submit" class="btn btn-light">Agregar</button>
            <a type="button" class="btn btn-light" href="{BASE_URL}tabla">Cancelar</a>
    </div>    
</form>    
{include file="footer.tpl"}