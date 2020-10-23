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
public class Cadena {
    public String cadena(String palabra){
        
        String[] $array = palabra.split(" ");
        palabra = "";
        for(String var: $array){
            palabra = palabra +"G%G"+ var;
        }
        return palabra; 
        
    }
    
}
