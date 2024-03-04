<div class="pagination">
    <?php
        $links_to_show = 5; // Cantidad de enlaces de paginación a mostrar alrededor de la página actual
        $start = max(1, $pagina_actual - floor($links_to_show / 2));
        $end = min($total_paginas, $start + $links_to_show - 1);
        
        // Agregar enlaces para navegar hacia adelante y hacia atrás
        if ($pagina_actual > 1) {
            echo "<a href='?pagina=".($pagina_actual - 1)."'>Anterior</a> ";
        }

        for ($i = $start; $i <= $end; $i++) {
            echo "<a href='?pagina=".$i."' ".($i==$pagina_actual ? "class='active'" : "").">".$i."</a> ";
        }
        
        
        if ($pagina_actual < $total_paginas) {
            echo "<a href='?pagina=".($pagina_actual + 1)."'>Siguiente</a> ";
        }
    ?>
</div>