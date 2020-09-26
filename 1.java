
/**
 * Write a description of class nomer1 here.
 *
 * @author (your name)
 * @version (a version number or a date)
 */

import java.util.*;
public class nomer1
{
    public static void main(String[] args) throws Exception
    {  

        Scanner input = new Scanner (System.in);

        System.out.println("-------------------------------------------- ");
        System.out.println(" | Mengkonversi Huruf Menjadi Angka Binner | ");
        System.out.println("---------------------------------------------");    

        String konversi;
        System.out.println("Masukkan Kata atau Kalimat yang mau di Konversi :");
        konversi=input.nextLine();
        char[] arrCharStr = konversi.toCharArray();
        System.out.println();   
        System.out.println("Hasil Konversinya Adalah :");
        for (char v : arrCharStr){
            String binner = Integer.toBinaryString(v);
            int konversi_huruf = Integer.parseInt(binner,2);
            char karaktr = (char) konversi_huruf;
            System.out.print(binner + " ");
            
        }
        System.out.println();      
        System.out.println();   
        System.out.println("Terima Kasih");
    }
//Vian Alfalah
}
     
    

