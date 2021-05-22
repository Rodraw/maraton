
import {config} from './main.js';

export default class Loader extends Phaser.Scene
{
    constructor ()
    {
        super("Loader");
    }

    preload ()
    {
        let font = {fontFamily: 'Comic Sans MS', fontStyle: 'bold', fontSize: 30, align: 'center',color: '#000000'};

        let text = this.add.text(config.width*0.5,config.height*0.4,'Loading...',font);
        text.setOrigin(0.5);

        let es = this.add.image(config.width*0.1,config.height/2,'barra');
        es.setScale(config.width*0.8/es.width,config.height*0.05/es.height);
        es.setOrigin(0,0)
        es.scaleT = config.width*0.8/es.width;


        this.load.image('boton_verde','img/boton.png');
        this.load.image('boton_azul','img/boton2.png');

        this.load.image('boton_verde_largo','img/boton4.png');
        this.load.image('boton_azul_largo','img/boton3.png');

        this.load.image('fondo1','img/fondo1.png');

        this.load.image('borde_largo','img/boder_largo.png');

        this.load.image('carga_verde','img/carga_verde_larga.png');
        this.load.image('carga_roja','img/carga_roja_larga.png');

        this.load.image('salida','img/salida.png');

        

        this.load.on('progress', (value) => {
            es.setScale(es.scaleT*value,es.scaleY);
        });
                    
        this.load.on('complete', ()=>{
            //this.scene.start("Inicio");
            this.scene.start("Fin");
		},this);
    }

    create ()
    {
    }
}