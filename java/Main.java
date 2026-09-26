import java.util.Scanner;
import java.util.ArrayList;

public class Main {
    public static void main(String[] args) {
        ArrayList<FilmBioskop> listFilm = new ArrayList<>();
        listFilm.add(new FilmBioskop("F01", "Interstellar", 2014, "Nolan", "Sci-Fi", 169, "St 1", 50000, 100));
        listFilm.add(new FilmBioskop("F02", "Inception", 2010, "Nolan", "Action", 148, "St 2", 45000, 80));
        listFilm.add(new FilmBioskop("F03", "Avatar", 2009, "Cameron", "Fantasy", 162, "St 3", 60000, 120));
        listFilm.add(new FilmBioskop("F04", "Joker", 2019, "Phillips", "Drama", 122, "St 1", 50000, 100));
        listFilm.add(new FilmBioskop("F05", "Titanic", 1997, "Cameron", "Romance", 195, "St 2", 40000, 80));

        Scanner sc = new Scanner(System.in);
        System.out.print("Tambah berapa data? ");
        int n = sc.nextInt(); sc.nextLine();

        for(int i=0; i<n; i++) {
            System.out.print("ID: "); String id = sc.nextLine();
            System.out.print("Judul: "); String jd = sc.nextLine();
            System.out.print("Tahun: "); int thn = sc.nextInt(); sc.nextLine();
            System.out.print("Sutradara: "); String sut = sc.nextLine();
            System.out.print("Genre: "); String gen = sc.nextLine();
            System.out.print("Durasi: "); int dur = sc.nextInt(); sc.nextLine();
            System.out.print("Studio: "); String std = sc.nextLine();
            System.out.print("Harga: "); int hrg = sc.nextInt();
            System.out.print("Kapasitas: "); int kap = sc.nextInt(); sc.nextLine();
            listFilm.add(new FilmBioskop(id, jd, thn, sut, gen, dur, std, hrg, kap));
        }

        System.out.println("-".repeat(95));
        System.out.printf("%-5s %-15s %-6s %-12s %-10s %-7s %-8s %-8s %-5s\n", 
            "ID", "Judul", "Tahun", "Sutradara", "Genre", "Durasi", "Studio", "Harga", "Kap");
        System.out.println("-".repeat(95));
        for(FilmBioskop f : listFilm) {
            f.printRow();
        }
    }
}