<?php
include_once 'ProdukHiburan.php';

class Film extends ProdukHiburan {
    protected $sutradara, $genre, $durasi;
    public function __construct($id, $j, $t, $s, $g, $d) {
        parent::__construct($id, $j, $t); 
        $this->sutradara = $s; 
        $this->genre = $g; 
        $this->durasi = $d;
    }
}
?>