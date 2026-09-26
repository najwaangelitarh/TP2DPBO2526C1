#include <iostream>
using namespace std;

class ProdukHiburan {
protected:
    string id, judul;
    int tahun_rilis;
public:
    ProdukHiburan() {}
    ProdukHiburan(string i, string j, int t) : id(i), judul(j), tahun_rilis(t) {}
};