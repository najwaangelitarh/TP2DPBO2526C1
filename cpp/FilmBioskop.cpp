#include "Film.cpp"
#include <iomanip>

class FilmBioskop : public Film {
private:
    string studio;
    int harga_tiket, kapasitas;
public:
    FilmBioskop(string i, string j, int t, string s, string g, int d, string st, int h, int k)
        : Film(i, j, t, s, g, d), studio(st), harga_tiket(h), kapasitas(k) {}
    
    void printRow() {
        cout << left << setw(5) << id << setw(15) << judul << setw(7) << tahun_rilis 
             << setw(15) << sutradara << setw(10) << genre << setw(8) << durasi 
             << setw(10) << studio << setw(10) << harga_tiket << setw(10) << kapasitas << "\n";
    }
};