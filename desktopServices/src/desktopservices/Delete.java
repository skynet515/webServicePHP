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
import java.util.logging.Level;
import java.util.logging.Logger;
 
import org.json.JSONException;

//Convertir los objeton JSOn a cadenas:
import org.json.JSONObject;


public class Delete {

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
            
            String id;
            
            id = "28";
        cliente.excecute("http://localhost:8080/WS_PHP/services/Srestaurante.php?accion=delete&id="+id);
    }
    
}
