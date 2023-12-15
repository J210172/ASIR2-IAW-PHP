<?php

require_once __DIR__ . '/../Models/ArtistaModel.php';

class ArtistaController {

    public function home() {

        $artistas = ArtistaModel::getArtistas()->fetch_array();

        $layout = ['content' => 'artista-home.php'];
        $data = ['artistas' => $artistas];
        include '../Views/base.php';
    }

}