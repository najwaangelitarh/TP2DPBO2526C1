#include <iostream>
#include <vector>
#include "FilmBioskop.cpp"
using namespace std;

int main() {
    vector<FilmBioskop> listFilm = {
        FilmBioskop("F01", "Interstellar", 2014, "Nolan", "Sci-Fi", 169, "St 1", 50000, 100),
        FilmBioskop("F02", "Inception", 2010, "Nolan", "Action", 148, "St 2", 45000, 80),
        FilmBioskop("F03", "Avatar", 2009, "Cameron", "Fantasy", 162, "St 3", 60000, 120),
        FilmBioskop("F04", "Joker", 2019, "Phillips", "Drama", 122, "St 1", 50000, 100),
        FilmBioskop("F05", "Titanic", 1997, "Cameron", "Romance", 195, "St 2", 40000, 80)
    };

    int n;
    cout << "Tambah berapa data? "; cin >> n;
    for(int i = 0; i < n; i++) {
        string id, jd, sut, gen, std;
        int thn, dur, hrg, kap;
        cout << "\nInput ID, Judul, Tahun: "; cin >> id; getline(cin >> ws, jd); cin >> thn;
        cout << "Input Sutradara, Genre, Durasi: "; getline(cin >> ws, sut); cin >> gen >> dur;
        cout << "Input Studio, Harga, Kapasitas: "; getline(cin >> ws, std); cin >> hrg >> kap;
        listFilm.push_back(FilmBioskop(id, jd, thn, sut, gen, dur, std, hrg, kap));
    }

    cout << "\n" << string(100, '-') << "\n";
    cout << left << setw(5) << "ID" << setw(15) << "Judul" << setw(7) << "Tahun" 
         << setw(15) << "Sutradara" << setw(10) << "Genre" << setw(8) << "Durasi" 
         << setw(10) << "Studio" << setw(10) << "Harga" << setw(10) << "Kapasitas\n";
    cout << string(100, '-') << "\n";
    for(auto f : listFilm) f.printRow();
    
    return 0;
}