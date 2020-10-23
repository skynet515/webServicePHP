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
import org.json.JSONArray;
import table.TblRest;

public class SelectAll {

    /**
     * @param args the command line arguments
     */
    public void listRest() {
        TblRest tbl = new TblRest();
        
        HttpClient cliente = new HttpClient(new OnHttpRequestComplete() {
            @Override
            public void onComplete(Response status) {
                if (status.isSuccess()) {
                    try {
                        String i="";
                        JSONObject json = new JSONObject(status.getResult());
                        
                        for (int x = 0;; x++) {
                            Object[] obj = new Object[4];
                            i = String.valueOf(x);
                            obj[0] = json.getJSONObject(i).get("idrestaurante").toString();
                            obj[1] = json.getJSONObject(i).get("restaurante").toString();
                            obj[2] = json.getJSONObject(i).get("direccion").toString();
                            obj[3] = json.getJSONObject(i).get("tel").toString();
                            tbl.model.addRow(obj);  
                        }
                        
                    } catch (JSONException ex) {
                        
                    }
                }
            }
            
            private void get(String idrestaurante) {
                throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
            }
        });
        tbl.tblr();
        cliente.excecute("http://localhost:8080/WS_PHP/services/Srestaurante.php?accion=select&var=all");

    }

}
