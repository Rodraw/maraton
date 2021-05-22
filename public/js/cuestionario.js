
import { preguntas1, preguntas2 } from "./preguntas.js";
var indice = 0;

var conteo1 = 0;
var conteo2 = 0;
var limite1 = 8;
var limite2 = 8;
var preguntas = preguntas1;

export function escogerPreguntas1(){
    preguntas = preguntas1;
}

export function escogerPreguntas2(){
    preguntas = preguntas2;
}

export var mensaje = "Bienvenido a maratón";

export function randomPregunta(){
    indice = Math.round(Math.random() * (preguntas.length-1));
}

export function obtenerTextoPregunta(){
    return preguntas[indice].texto;
}

export function obtenerOpcionesPregunta(i){
    return preguntas[indice].opciones[i];
}

export function reiniciarConteos(){
    conteo1 = 0;
    conteo2 = 0;
}

export function seleccionPregunta(barra1,barra2,i){
    if(preguntas[indice].respuesta[i]){
        conteo1++;
        let value = 1 * conteo1 / limite1;
        barra1.setScale(barra1.scaleT*value,barra1.scaleY);
        if(conteo1 == limite1){
            mensaje = "Ganaste el juego";
            return 1;
        }
    }else{
        conteo2++;
        let value = 1 * conteo2 / limite2;
        barra2.setScale(barra2.scaleT*value,barra2.scaleY);
        if(conteo2 == limite2){
            mensaje = "Perdiste...";
            return 1;
        }
    }
    return 0;
}