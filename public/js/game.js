
import { config } from './main.js';
import { randomPregunta, obtenerTextoPregunta, obtenerOpcionesPregunta, seleccionPregunta } from './cuestionario.js';

export default class Game extends Phaser.Scene
{
    constructor ()
    {
        super("Game");
    }

    reacomodarPregunta(){
        randomPregunta();
        this.textoBase.text = obtenerTextoPregunta();
        this.textoOpcion1.text = obtenerOpcionesPregunta(0);
        this.textoOpcion2.text = obtenerOpcionesPregunta(1);
        this.textoOpcion3.text = obtenerOpcionesPregunta(2);
        this.textoOpcion4.text = obtenerOpcionesPregunta(3);
    }

    preload (){
        randomPregunta();
        let font =  {fontFamily: 'Consolas', fontStyle: 'bold', fontSize: 35,color: '#000'};
        let font2 =  {fontFamily: 'Consolas', fontStyle: 'bold', fontSize: 20,color: '#FFF'};
        let font3 =  {fontFamily: 'Consolas', fontStyle: 'bold', fontSize: 25,color: '#000'};
        let font4 =  {fontFamily: 'Consolas', fontStyle: 'bold', fontSize: 30,color: '#FFF'};

        this.fondo = this.add.sprite(config.width*0.5,config.height*0.2,'fondo1');
        this.fondo.setScale(config.width*1/this.fondo.width,config.height*0.4/this.fondo.height);

        this.titulo = this.add.text(config.width*0.5,config.height*0.05,'Carrera: Tu vs La ignorancia',font);
        this.titulo.setOrigin(0.5);

        this.texto2 = this.add.text(config.width*0.03,config.height*0.18,'Tu',font2);
        this.texto3 = this.add.text(config.width*0.03,config.height*0.28,'Ignorancia',font2);

        this.carga1 = this.add.sprite(config.width*0.15,config.height*0.2,'carga_verde');
        this.carga2 = this.add.sprite(config.width*0.15,config.height*0.3,'carga_roja');

        this.borde1 = this.add.sprite(config.width*0.5,config.height*0.2,'borde_largo');
        this.borde2 = this.add.sprite(config.width*0.5,config.height*0.3,'borde_largo');

        this.borde1.setScale(config.width*0.7/this.borde1.width,config.height*0.05/this.borde1.height);
        this.borde2.setScale(config.width*0.7/this.borde2.width,config.height*0.05/this.borde2.height);

        this.carga1.setScale(0,config.height*0.05/this.carga1.height);
        this.carga2.setScale(0,config.height*0.05/this.carga2.height);

        this.carga1.scaleT = config.width*0.7/this.carga1.width;
        this.carga2.scaleT = config.width*0.7/this.carga2.width;

        this.carga1.setOrigin(0,0.5);
        this.carga2.setOrigin(0,0.5);

        this.salida = this.add.sprite(config.width*0.9,config.height*0.25,'salida');
        this.salida.setScale(config.width*0.15/this.salida.width,config.height*0.2/this.salida.height);

        this.textoBase = this.add.text(config.width*0.07,config.height*0.45,'¿Cuantos lados tiene un cubo?',font3);
        //this.textoBase.setOrigin(0.5);

        this.opcion1 = this.add.sprite(config.width*0.55,config.height*0.6,'boton_azul_largo');
        this.opcion2 = this.add.sprite(config.width*0.55,config.height*0.7,'boton_azul_largo');
        this.opcion3 = this.add.sprite(config.width*0.55,config.height*0.8,'boton_azul_largo');
        this.opcion4 = this.add.sprite(config.width*0.55,config.height*0.9,'boton_azul_largo');

        this.opcion1.setScale(config.width*0.85/this.opcion1.width,config.height*0.08/this.opcion1.height);
        this.opcion2.setScale(config.width*0.85/this.opcion2.width,config.height*0.08/this.opcion2.height);
        this.opcion3.setScale(config.width*0.85/this.opcion3.width,config.height*0.08/this.opcion3.height);
        this.opcion4.setScale(config.width*0.85/this.opcion4.width,config.height*0.08/this.opcion4.height);

        this.textoOpcion1 = this.add.text(config.width*0.55,config.height*0.6,'1',font4);
        this.textoOpcion2 = this.add.text(config.width*0.55,config.height*0.7,'2',font4);
        this.textoOpcion3 = this.add.text(config.width*0.55,config.height*0.8,'3',font4);
        this.textoOpcion4 = this.add.text(config.width*0.55,config.height*0.9,'4',font4);

        this.textoOpcion1.setOrigin(0.5);
        this.textoOpcion2.setOrigin(0.5);
        this.textoOpcion3.setOrigin(0.5);
        this.textoOpcion4.setOrigin(0.5);

        this.opcion1.setInteractive();
        this.opcion2.setInteractive();
        this.opcion3.setInteractive();
        this.opcion4.setInteractive();

        this.opcion1.on('pointerdown', () => { 
            if(seleccionPregunta(this.carga1,this.carga2,0)){
                this.scene.start('Fin'); 
            }
            this.reacomodarPregunta();
        });
        this.opcion2.on('pointerdown', () => { 
            if(seleccionPregunta(this.carga1,this.carga2,1)){
                this.scene.start('Fin'); 
            }
            this.reacomodarPregunta();
        });
        this.opcion3.on('pointerdown', () => { 
            if(seleccionPregunta(this.carga1,this.carga2,2)){
                this.scene.start('Fin'); 
            }
            this.reacomodarPregunta();
        });
        this.opcion4.on('pointerdown', () => { 
            if(seleccionPregunta(this.carga1,this.carga2,3)){
                this.scene.start('Fin'); 
            }
            this.reacomodarPregunta();
        });

        this.textoBase.text = obtenerTextoPregunta();
        this.reacomodarPregunta();
    }


    create (){
        
    }

    update(total, time){
       
    }
}