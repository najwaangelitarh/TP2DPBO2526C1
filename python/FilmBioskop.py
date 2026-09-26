from Film import Film

class FilmBioskop(Film):
    def __init__(self, id_prod, judul, tahun_rilis, sutradara, genre, durasi, studio, harga_tiket, kapasitas):
        super().__init__(id_prod, judul, tahun_rilis, sutradara, genre, durasi)
        self.studio = studio
        self.harga_tiket = harga_tiket
        self.kapasitas = kapasitas

    def print_row(self):
        print(f"{self.id:<5} | {self.judul:<15} | {self.tahun_rilis:<6} | {self.sutradara:<12} | {self.genre:<10} | {self.durasi:<7} | {self.studio:<8} | {self.harga_tiket:<8} | {self.kapasitas:<5}")