<aside>

        <h2>DISFRUTÁ DE TU ZONA DE CONFORT
Corré con un retorno de energía increíble en cada paso...</h2>

       <h2>Filtrar por marca:</h2>
        <form action="homeFilter" method="POST">
            <select name="select_marca"  class="custom-select" id="inputGroupSelect01">
                {foreach from=$marcas item=marca};

                <option value="{$marca->id_marca}">{$marca->Nombre}</option>
                {/foreach}
            </select>
          <button type="submit" class="btn btn-light">Filtrar</button>
  <a type="button" class="btn btn-light" href="{BASE_URL}tabla">Mostrar Todas Las Zapatillas</a>

  
        </form>
    
</aside>