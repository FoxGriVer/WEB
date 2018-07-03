requirejs.config({
    "baseUrl": "js",
    "paths": {
        //Libs
        "Class": "libs/class",
        "Jquery": "libs/jquery-3.3.1.min",
        //Classes
        "Assets": "app/classes/gfx/Assets",
        "Display": "app/classes/display/Display",
        "Game": "app/classes/Game",
        "GameState": "app/classes/States/GameState",
        "ImageLoader": "app/classes/gfx/ImageLoader",
        "Launcher": "app/classes/Launcher",
        "SpriteSheet": "app/classes/gfx/SpriteSheet",
        "State": "app/classes/States/State"
    }
});

require(['app/main']);