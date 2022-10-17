{include file="header.tpl"}

<div class="zapatilla">
    <h2 class="zapatilla">{$zapatilla->Modelo}</h2>
    <h2>Modelo</h2>
    <p>{$zapatilla->Modelo}</p>
    <h2>Precio</h2>
    <p>{$zapatilla->Precio}</p>
    <h2>Stock</h2>
    <p>{$zapatilla->Stock}</p>
    <h2>Marca</h2>
    <p>{$zapatilla->Nombre}</p>
    <h2>Descripcion</h2>
    <p>{$zapatilla->Descripcion}</p>
    <h2>Imagen</h2>
    <p>{$zapatilla->imagen}</p>
    <a type="button" class="btn btn-light" href="{BASE_URL}tabla">Volver</a>
</div>
{include file="footer.tpl"}
