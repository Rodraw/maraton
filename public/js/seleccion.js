import { config } from './main.js';
import { escogerPreguntas1, escogerPreguntas2} from './cuestionario.js';

export default class Seleccion extends Phaser.Scene
{
    constructor ()
    {
        super("Seleccion");
    }

    preload (){
        let font =  {fontFamily: 'Consolas', fontStyle: 'bold', fontSize: 50,color: '#000'};
        let font2 =  {fontFamily: 'Consolas', fontStyle: 'bold', fontSize: 40,color: '#FFF'};

        this.text1 = this.add.text(config.width*0.5,config.height*0.1,'Seleccione tema',font);
        this.text1.setOrigin(0.5);

        this.boton1 = this.add.sprite(config.width*0.5,config.height*0.4,'boton_azul_largo');
        this.boton2 = this.add.sprite(config.width*0.5,config.height*0.6,'boton_azul_largo');
        
        this.boton1.setScale(config.width*0.4/this.boton1.width,config.height*0.15/this.boton1.height);
        this.boton2.setScale(config.width*0.4/this.boton2.width,config.height*0.15/this.boton2.height);

        this.boton1.setInteractive();
        this.boton2.setInteractive();

        this.textButon1 = this.add.text(config.width*0.5,config.height*0.4,'Algebra',font2);
        this.textButon2 = this.add.text(config.width*0.5,config.height*0.6,'Calculo',font2);
        this.textButon1.setOrigin(0.5);
        this.textButon2.setOrigin(0.5);
        
        this.boton1.on('pointerdown', () => { 
            escogerPreguntas1();
            this.scene.start('Game'); 
        });
        this.boton2.on('pointerdown', () => { 
            escogerPreguntas2();
            this.scene.start('Game'); 
        });
    }


    create (){
        
    }

    update(total, time){
       
    }
}