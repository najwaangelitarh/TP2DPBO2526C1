public class FilmBioskop extends Film {
    private String studio;
    private int hargaTiket, kapasitas;
    
    public FilmBioskop(String i, String j, int t, String s, String g, int d, String st, int h, int k) {
        super(i, j, t, s, g, d); 
        this.studio = st; 
        this.hargaTiket = h; 
        this.kapasitas = k;
    }
    
    public void printRow() {
        System.out.printf("%-5s %-15s %-6d %-12s %-10s %-7d %-8s %-8d %-5d\n", 
            id, judul, tahunRilis, sutradara, genre, durasi, studio, hargaTiket, kapasitas);
    }
}