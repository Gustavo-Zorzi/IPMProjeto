<?php

namespace App\View;

use App\View\ViewPadrao;

class ViewProduct extends ViewPadrao
{
    static function getTableHTML(array $a){
        $sHTML = "<form method='post'><table class='table'>
                    <tbody class='table.striped'>
                        <tr>
                            <th scope='col'>#</th>
                            <th scope='col'>Product Name</th>
                            <th scope='col'>Price</th>
                            <th scope='col'>Description</th>
                            <th scope='col'>IMG URL</th>
                            <th scope='col'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-wrench' viewBox='0 0 16 16'>
                                    <path d='M.102 2.223A3.004 3.004 0 0 0 3.78 5.897l6.341 6.252A3.003 3.003 0 0 0 13 16a3 3 0 1 0-.851-5.878L5.897 3.781A3.004 3.004 0 0 0 2.223.1l2.141 2.142L4 4l-1.757.364L.102 2.223zm13.37 9.019.528.026.287.445.445.287.026.529L15 13l-.242.471-.026.529-.445.287-.287.445-.529.026L13 15l-.471-.242-.529-.026-.287-.445-.445-.287-.026-.529L11 13l.242-.471.026-.529.445-.287.287-.445.529-.026L13 11l.471.242z'/>
                                </svg>
                            </th>
                        </tr>";
        foreach($a as $x){
            $sHTML .=
            "
                <tr>
                    <td>$x[proid]</td>
                    <td>$x[proname]</td>
                    <td>R$ $x[proprice]</td>
                    <td>$x[prodesc]</td>
                    <td>$x[proimg]</td>
                    <td>
                    <a href='?pg=pmanager&act=delete&proid=$x[proid]'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
                            <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
                            <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
                        </svg>
                    </a>
                    </td>
                </tr></form>
            ";
            }
            return $sHTML;
    }
}
