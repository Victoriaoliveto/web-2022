<aside>

        <p>DISFRUTÁ DE TU ZONA DE CONFORT
Corré con un retorno de energía increíble en cada paso...</p>

       <P>Filtrar por marca:</p>
        <form action="homeFilter" method="POST">
            <select name="select_marca">
                {foreach from=$marcas item=marca};

                <option value="{$marca->id_marca}">{$marca->Nombre}</option>
                {/foreach}
            </select>
          <button type="submit" class="btn btn-light">Filtrar</button>
  <a type="button" class="btn btn-light" href="{BASE_URL}tabla">Mostrar Todas Las Zapatillas</a>

  
        </form>
    
</aside>