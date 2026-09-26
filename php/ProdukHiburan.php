<?php
class ProdukHiburan {
    protected $id, $judul, $tahun;
    public function __construct($id, $j, $t) { 
        $this->id = $id; 
        $this->judul = $j; 
        $this->tahun = $t; 
    }
}
?>