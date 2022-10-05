<?php
    function paginado(int $cant, int $current_pag, int $cant_per_pag){
        
         $quantity_pages = ceil ($cant / $cant_per_pag);

        $result = array(
            'quantity' => $quantity_pages, 
            'current' => $current_pag, 
            'previous' => ($current_pag > 1) ? ($current_pag -1) : null, 
            'next' => ($current_pag < 1) ? ($current_pag +1) : null, 
            'first' => ($current_pag < 1) ? 1 : null, 
            'last' => ($current_pag < $quantity_pages) ? ($current_pag -1) : null
        );
        return $result;
    }

    function cantPages(int $cant,int $cant_per_pag){
        $quantity_pages = ceil ($cant / $cant_per_pag);
        return $quantity_pages;
    }
