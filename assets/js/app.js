/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you require will output into a single css file (app.css in this case)
require('../css/app.css');
//require('./jquery.min.js');
require('./admin.js');
require('./autohidingnavbar.min.js');
require('./bootstrap.min.js');
require('./genezi.js');
require('./carrito.js');
require('./main.js');
require('./payment.js');

import React, { Component } from 'react';
import ReactDOM from 'react-dom'; 
import Genezifront from './Components/geneziFront';


if ( document.getElementById('products') ) {
    console.log("loadProducts");
    ReactDOM.render(<Genezifront />, document.getElementById('products'));
}

if ( document.getElementById('shoppingCar') ) {
    console.log("loadSloderimages");
    ReactDOM.render(<geneziSliderImages />, document.getElementById('slider'));
}


// Need jQuery? Install it with "yarn add jquery", then uncomment to require it.
// const $ = require('jquery');

console.log('Hello Webpack Encore! Edit me in assets/js/app.js.........');



