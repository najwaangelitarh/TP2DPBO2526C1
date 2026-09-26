#include "ProdukHiburan.cpp"

class Film : public ProdukHiburan {
protected:
    string sutradara, genre;
    int durasi;
public:
    Film() {}
    Film(string i, string j, int t, string s, string g, int d) 
        : ProdukHiburan(i, j, t), sutradara(s), genre(g), durasi(d) {}
};