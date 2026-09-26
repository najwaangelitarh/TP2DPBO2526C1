public class Film extends ProdukHiburan {
    protected String sutradara, genre;
    protected int durasi;
    
    public Film(String i, String j, int t, String s, String g, int d) {
        super(i, j, t); 
        this.sutradara = s; 
        this.genre = g; 
        this.durasi = d;
    }
}