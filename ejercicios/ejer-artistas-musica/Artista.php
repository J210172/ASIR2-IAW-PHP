<?php

include_once('db-connexion.php');

class Artista {
    
    private int $id;
    private string $nombre;
    private string $descripcion;
    private int $num_albums;
    private bool $aragones;
    private mysqli $mysqli;


    public function __constructor(string $nombre='', string $descripcion='', int $num_albumes=0, bool $aragones=false, int|null $id=null) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->num_albumes = $num_albumes;
        $this->aragones = $aragones;
    }
    public static function new(string $nombre='', string $descripcion='', int $num_albumes=0, bool $aragones=false, int|null $id=null): static {
        return new static($nombre, $descripcion, $num_albumes, $aragones, $id);
    }
    public static function fromArray($array): static {
        return new static(...$array);
    }
    

    
    /**
     * Operations to query the table of artists
     */
    
    public static function getArtistas(): mysqli_result {
        $mysqli = make_connection();
        return $mysqli->query('SELECT * FROM grupos_musica');
    }
    
    // TODO: Implement this function
    public static function getArtista(int $id): mysqli_result {}

    
    /**
     * Basic Operations for self
     */

    // TODO: Implement this function
    public function save(): self {}
    
    // TODO: Implement this function
    public function update(): self {}
    
    // TODO: Implement this function
    public function delete(): self {}
    
    // TODO: Implement this function
    public function clone(): self {}

    


    public function getID(): int {
        return $this->id;
    }

    public function setID(int $id) {
        $this->id = $id;
    }

    public function getNombre(): int {
        return $this->id;
    }

    public function setNombre(int $nombre) {
        $this->nombre = $nombre;
    }

    public function getDescripcion(): string {
        return $this->descripcion;
    }

    public function setDescripcion(int $descripcion) {
        $this->descripcion = $descripcion;
    }

    public function getNumAlbums(): int {
        return $this->num_albums;
    }

    public function setAragones(bool $aragones) {
        $this->aragones = $aragones;
    }

    public function isAragones(): int {
        return $this->aragones;
    }

}