'use strict';

var util = require('util');

function makeSpriteObj() {
    var pathOptions = [],
        z,
        path = [
          'index',
        ];
    for (z = 0; z < path.length; z++) {
        pathOptions.push({
          src: 'src/sprites/'+ path[z] +'/*.{png,gif,jpg}',
          destImage: 'src/images/sp-'+ path[z] +'.png',
          destCSS: 'src/scss/vars/sp-'+ path[z] +'.scss',
          padding: 2,
          imgPath:'../images/sp-'+ path[z] +'.png',
          algorithm: 'binary-tree'
        });
    }

    return pathOptions;
}



module.exports = makeSpriteObj();