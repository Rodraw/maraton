
import Boot from './boot.js';
import Loader from './loader.js';
import Inicio from './inicio.js';
import Game from './game.js';
import Fin from './fin.js';
import Seleccion from './seleccion.js';

export const config = {
    type: Phaser.AUTO,
    width: 1824,
    height: 980,
    scale: {
        mode: Phaser.Scale.FIT,
        parent: 'game_content',
        autoCenter: Phaser.Scale.CENTER_BOTH,
    },
    physics: {
        default: 'arcade',
        arcade: {
            debug: false
        }
    },
    backgroundColor: '#C0F7F7',
    scene: [ Boot, Loader, Inicio, Seleccion, Game, Fin]
};

export const game = new Phaser.Game(config);