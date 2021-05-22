
import { config } from './main.js';


export default class Inicio extends Phaser.Scene
{
    constructor ()
    {
        super("Inicio");
    }

    preload ()
    {
        let font =  {fontFamily: 'Consolas', fontStyle: 'bold', fontSize: 50,color: '#000'};
        let font2 =  {fontFamily: 'Consolas', fontStyle: 'bold', fontSize: 50,color: '#FFF'};

        this.text1 = this.add.text(config.width*0.5,config.height*0.3,'Maratón de conocimientos',font);
        this.text1.setOrigin(0.5);


        this.boton = this.add.sprite(config.width*0.5,config.height*0.8,'boton_verde_largo');
        this.boton.setScale(config.width*0.3/this.boton.width,config.height*0.15/this.boton.height);

        this.text2 = this.add.text(config.width*0.5,config.height*0.8,'Jugar',font2);
        this.text2.setOrigin(0.5);

        this.boton.setInteractive();
        this.boton.on('pointerdown', () => { 
            this.scene.start('Seleccion'); 
        });
    }


    create ()
    {
        
    }
}