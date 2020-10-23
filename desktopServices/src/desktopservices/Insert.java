/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package desktopservices;
/**
 *
 * @author ale_a
 */
import com.devazt.networking.HttpClient;
import com.devazt.networking.OnHttpRequestComplete;
//traer datos desde el ws
import com.devazt.networking.Response;

//Convertir los objeton JSOn a cadenas:



public class Insert {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
                
        Cadena cn = new Cadena();
            // TODO code application logic here
            HttpClient cliente = new HttpClient(new OnHttpRequestComplete() {
                @Override
                public void onComplete(Response status) {
                                 
                    System.out.println(status.getResult());
                   
                }
            });
            
            String rest, direc, tel;
            
            String $rest = "Los Fundadores";
            String $direc = "Calle Arce, Local 54321, Pol. A";
            
            tel = "2255-1232";    
            rest = cn.cadena($rest);
            direc = cn.cadena($direc);
            
        cliente.excecute("http://localhost:8080/WS_PHP/services/Srestaurante.php?accion=insert&rest="+rest+"&direc="+direc+"&tel="+tel);
    }
    
}
