public class nomer3{
    public static void main(String[] args){
        int n,i,j,k;
        n=5;
        System.out.println("Jumlah bintang : " + n);
        for (i=1;i<=n;i++)
         { for (j=1;j<=n;j++){
             if(j==((n/2)+1) && ((i==1)||(i==5)))    {
             System.out.print("*");
             }
             else if (( j==((n/2)+1)|| j==(n/2) || (j==((n/2)+2))) && ((i==2) || (i==4))) {
             System.out.print("*");
             }
             else if ((j==(n/2) || (j==((n/2)+2)) || j==1 || j==5) && i==3) {
             System.out.print("*");} 
             else if(j==(n/2)+1 && i==3){
             System.out.print(" ");
             } 
             else
             {
             System.out.print(" ");
             }
             System.out.print(" ");
          }
             System.out.println(" ");
         }
    }
}