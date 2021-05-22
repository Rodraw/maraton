
export default class Boot extends Phaser.Scene
{
    constructor ()
    {
        super("Boot");
    }

    preload ()
    {
        this.load.image('borde','img/fuel_bar_border.png');
        this.load.image('barra','img/next.png');
    }

    create ()
    {
        this.scene.start('Loader');
    }
}