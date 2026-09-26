from ProdukHiburan import ProdukHiburan

class Film(ProdukHiburan):
    def __init__(self, id_prod, judul, tahun_rilis, sutradara, genre, durasi):
        super().__init__(id_prod, judul, tahun_rilis)
        self.sutradara = sutradara
        self.genre = genre
        self.durasi = durasi