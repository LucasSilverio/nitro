<?php

namespace App\helpers;

class Flash
{
    public function setFlash($indice, $mensagem)
    {
        if (!isset($_SESSION['flash'][$indice])) {
            $_SESSION['flash'][$indice] = $mensagem;
        }
    }

    public function clear()
    {
        unset($_SESSION['flash']);
    }

    // public function getFlash($indice, $style="color:red")
    // {
    //     if (isset($_SESSION['flash'][$indice])) {
    //         $flash = $_SESSION['flash'][$indice];
    //         unset($_SESSION['flash'][$indice]);

    //         return "<span style='$style' >". $flash. "</span>";
    //     }
    // }
}