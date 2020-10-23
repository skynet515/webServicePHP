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


public class SelectOne {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
            // TODO code application logic here
            HttpClient cliente = new HttpClient(new OnHttpRequestComplete() {
                @Override
                public void onComplete(Response status) {
                                 
                    
                    try {
                        JSONObject json = new JSONObject(status.getResult());
                        String restaurante = (String) json.get("restaurante");
                        String direccion = (String) json.get("direccion");
                        
                        
                        System.out.println(restaurante +" está ubicado en la direccion : "+direccion);
                    } catch (JSONException ex) {
                        Logger.getLogger(DesktopServices.class.getName()).log(Level.SEVERE, null, ex);
                    }
                            
                }
            });
            
        cliente.excecute("http://localhost:8080/WS_PHP/services/Srestaurante.php?accion=select&var=one&id=3");
        
    }
    
}
