define(['Class','Game'],function(Class, Game){
    var Launcher = Class.extend({
        init: function(_title, _width, _heigth){
            var game = new Game(_title, _width, _heigth);
            game.start();
        }
    });

    return Launcher;
});