<?php
include_once 'Film.php';

class FilmBioskop extends Film {
    private $studio, $harga, $kapasitas, $foto;
    public function __construct($id, $j, $t, $s, $g, $d, $st, $h, $k, $f) {
        parent::__construct($id, $j, $t, $s, $g, $d);
        $this->studio = $st; 
        $this->harga = $h; 
        $this->kapasitas = $k; 
        $this->foto = $f;
    }
    public function getRow() {
        return "<tr><td>{$this->id}</td><td>{$this->judul}</td><td>{$this->tahun}</td>
                <td>{$this->sutradara}</td><td>{$this->genre}</td><td>{$this->durasi}</td>
                <td>{$this->studio}</td><td>{$this->harga}</td><td>{$this->kapasitas}</td>
                <td><img src='{$this->foto}' width='50' alt='foto'></td></tr>";
    }
}
?>