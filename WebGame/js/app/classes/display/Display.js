define(['Jquery','Class'], function($, Class){
    //Private variables
    var canvas, width, height, title, graphics;

    var Display = Class.extend({
        init: function(_title, _width, _height){
            title = _title;
            width = _width;
            height = _height;
            createDisplay();
        }
    });

    // Private methods
    function createDisplay(){
        document.title = title;
        var body = document.body;
        body.innerHTML = "<canvas id = 'canvas' width = '"+width+"' height = '"+height+"'></canvas>";
        graphics = document.getElementById("canvas").getContext("2d");
    }

    //Getters(public methods)
    Display.prototype.getTitle = function(){
        return title
    };
    Display.prototype.getHeight = function(){
        return height
    };
    Display.prototype.getWidth = function(){
        return width
    };
    Display.prototype.getGraphics = function(){
        return graphics
    };

    CanvasRenderingContext2D.prototype.myDrawImage = function(asset, _x, _y, _width, _height){
        this.drawImage(asset.sheet, asset.x, asset.y, asset.width, asset.height, _x, _y, _width, _height);
    };

    return Display;
});