{include file="header.tpl"}

<form action="{BASE_URL}addZapa" method="POST">
    <div class="tabla_inputs">
        <label>Modelo</label>
        <div class="respuesta">
            <input class="Modelo" name="Modelo" type="text" placeholder="Modelo">
        </div>
        <label>Precio</label>
        <div class="respuesta">
            <input class="Precio" name="Precio" type="text" placeholder="Precio">
        </div>
        <label>Stock/a</label>
        <div class="respuesta">
            <input class="Stock" name="Stock" type="text" placeholder="Stock/a">
        </div>

      ///  <form action="addImagen" method="POST" enctype="multipart/form-data">

        <input type="file" name="input_name" id="imageToUpload">
    
        </form>
        
        <label>Marca</label>
        <div class="respuesta">
            <select name="select_marca">';
                {foreach from=$marcas item=marca}
                    <option value="{$marca->id_marca}">{$marca->Nombre}</option>
                {/foreach}
            </select>
        </div>
        <div>
         
   <button type="submit" class="btn btn-light">Agregar</button>
            <a type="button" class="btn btn-light" href="{BASE_URL}tabla">Cancelar</a>
        
          
        </div>
    </div>    
</form>    
{include file="footer.tpl"}
