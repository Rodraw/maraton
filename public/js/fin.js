
import { config } from './main.js';
import { mensaje,reiniciarConteos } from './cuestionario.js';


export default class Fin extends Phaser.Scene
{
    constructor ()
    {
        super("Fin");
    }

    preload ()
    {
        let font =  {fontFamily: 'Consolas', fontStyle: 'bold', fontSize: 60,color: '#000'};
        let font2 =  {fontFamily: 'Consolas', fontStyle: 'bold', fontSize: 50,color: '#FFF'};

        this.titulo = this.add.text(config.width*0.5,config.height*0.3,mensaje,font);
        this.titulo.setOrigin(0.5);

        this.boton1 = this.add.sprite(config.width*0.5,config.height*0.6,'boton_verde_largo');
        this.boton1.setScale(config.width*0.4/this.boton1.width,config.height*0.15/this.boton1.height);
        this.boton1.setInteractive();

        this.boton1.on('pointerdown', () => { 
            this.scene.start('Inicio'); 
        });

        this.texto = this.add.text(config.width*0.5,config.height*0.6,'Jugar',font2);
        this.texto.setOrigin(0.5);

        reiniciarConteos();
    }

    create ()
    {
        

    }
}