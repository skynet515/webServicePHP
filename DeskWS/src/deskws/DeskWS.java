/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package deskws;
/**
 *
 * @author ale_a
 */
import com.devazt.networking.HttpClient;
import com.devazt.networking.OnHttpRequestComplete;
//traer datos desde el ws
import com.devazt.networking.Response;

//

public class DeskWS {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
            // TODO code application logic here
            HttpClient cliente = new HttpClient(new OnHttpRequestComplete() {
                @Override
                public void onComplete(Response status) {
                                 
                    if(status.isSuccess()){
                    
                        System.out.println(status.getResult());
                    }
                }
            });
            
        cliente.excecute("http://localhost:8080/WS_PHP/services/Srestaurante.php");
        
    }
    
}
