{include file="header.tpl"}

 {include file="filtro.tpl"}
<!-- lista de tareas -->
<ul class="list-group">
    {foreach from=$zapatillas item=$zapatilla}
        <li class='
                list-group-item d-flex justify-content-between align-items-center'>
               
            <span> <b>MODELO</b>-<b>{$zapatilla->Modelo}</b> - <b>PRECIO</b> {$zapatilla->Precio|truncate:25}
              <b>STOCK</b>-{$zapatilla->Stock} <a>uniddaes</a></span>
            <div class="ml-auto">
                  <a href='{BASE_URL}verMasZapas/{$zapatilla->id_}' type='button' class='btn btn-danger'>Ver Mas Informacion</a> 
             {if isset($smarty.session.USER_EMAIL)}
                <a href='{BASE_URL}delete/{$zapatilla->id_}' type='button' class='btn btn-danger'>Borrar</a>
                 {/if}
                     {if isset($smarty.session.USER_EMAIL)}
                  <td><a type="button" href="{BASE_URL}formularioEditarZapatilla/{$zapatilla->id_}" class="btn btn-light">Editar<i class="far fa-edit"></i></a></td

                                  {/if}
                   
            </div>          

        </li>
    {/foreach}

    </ul>

</ul>
{include file="tablaMarcas.tpl"}
        </article>
        <aside>
        {if isset($smarty.session.USER_EMAIL)}
               <form action="{BASE_URL}formularioZapa" method="GET">
                <button type="submit" class="btn btn-light">Insertar zapatilla</button>     
           
            </form>
            <form action="{BASE_URL}formularioInsertarMarca" method="GET">
                <button type="submit" class="btn btn-light">Insertar Marca</button>
            
            </form>
             {/if}
        </aside>      


{include file="footer.tpl"}
