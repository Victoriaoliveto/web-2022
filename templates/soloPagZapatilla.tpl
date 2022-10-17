
{include file="header.tpl"}

<div class="zapatilla">

<section class="especificacionZapatilla">
    <ul class="list-group list-group-flush font-weight-bold">
        <li class="list-group-item">Modelo: {$zapatilla->Modelo}</li>
        <li class="list-group-item">Precio: {$zapatilla->Precio}</li>
        <li class="list-group-item">Stock: {$zapatilla->Stock}</li>
        <li class="list-group-item">Marca: {$zapatilla->Nombre}</li>
        <li class="list-group-item">Descripcion: {$zapatilla->Descripcion}</li>
        {if $zapatilla->imagen!==null}
            <li class="list-group-item"><img src="{$zapatilla->imagen}"></li>           
        {/if}
    </ul>
</section>

   
    
    <a type="button" class="btn btn-light" href="{BASE_URL}tabla">Volver</a>
</div>


{include file="footer.tpl"}