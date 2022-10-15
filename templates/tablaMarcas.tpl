
<!-- lista de marcas -->
<ul class="list-group">
<p>Marcas</p>
    {foreach from=$marcas item=$marca}
        <li class='list-group-item d-flex justify-content-between align-items-cent'>
            <span> <b>{$marca->Nombre}</b> </span>
            <div class="ml-auto">
                {if isset($smarty.session.USER_EMAIL)}  
                <a href='{BASE_URL}delMarca/{$marca->id_marca}' type='button' class='btn btn-danger'>Borrar</a>
                 <td><a type="button" href="{BASE_URL}formularioEditarMarca/{$marca->id_marca}" class="btn btn-light">Editar<i class=
                 "far fa-edit"></i></a></td
                   {/if}
            </div>
        </li>
    {/foreach}
</ul>