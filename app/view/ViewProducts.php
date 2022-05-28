<?php

namespace App\View;

use App\View\ViewPadrao;

class ViewProducts extends ViewPadrao{

    static function getCards(array $a){
        $cards = '';
        
        if ($a <> null){
        foreach ($a as $key => $row){
            $cards .= "<div class='card' style='width: 18rem;'>
            <img src='$row[proimg]' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>$row[proname]</h5>
              <p class='card-text'>$row[prodesc]</p>
              <p class='card-text'>$row[proprice]</p>
              <a href='#' class='btn btn-primary'>Add cart</a>
            </div>
        </div>";
     
        }
        return $cards;
    }
        else{
            $cards = 'None';
            return $cards;
        }
        
    }
        
}
