from FilmBioskop import FilmBioskop

data_film = [
    FilmBioskop("F01", "Interstellar", 2014, "Nolan", "Sci-Fi", 169, "St 1", 50000, 100),
    FilmBioskop("F02", "Inception", 2010, "Nolan", "Action", 148, "St 2", 45000, 80),
    FilmBioskop("F03", "Avatar", 2009, "Cameron", "Fantasy", 162, "St 3", 60000, 120),
    FilmBioskop("F04", "Joker", 2019, "Phillips", "Drama", 122, "St 1", 50000, 100),
    FilmBioskop("F05", "Titanic", 1997, "Cameron", "Romance", 195, "St 2", 40000, 80)
]

n = int(input("Tambah berapa data? "))
for _ in range(n):
    print("Masukkan Data Baru:")
    id_prod = input("ID: ")
    judul = input("Judul: ")
    tahun = int(input("Tahun Rilis: "))
    sutradara = input("Sutradara: ")
    genre = input("Genre: ")
    durasi = int(input("Durasi (menit): "))
    studio = input("Studio: ")
    harga = int(input("Harga Tiket: "))
    kapasitas = int(input("Kapasitas: "))
    data_film.append(FilmBioskop(id_prod, judul, tahun, sutradara, genre, durasi, studio, harga, kapasitas))

print("-" * 105)
print(f"{'ID':<5} | {'Judul':<15} | {'Tahun':<6} | {'Sutradara':<12} | {'Genre':<10} | {'Durasi':<7} | {'Studio':<8} | {'Harga':<8} | {'Kapasitas':<5}")
print("-" * 105)
for f in data_film:
    f.print_row()