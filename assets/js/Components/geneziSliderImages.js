import React, { Component } from 'react';
import ReactDOM from 'react-dom'; 
import Products from './Products';

class geneziSliderImages extends Component {
    constructor() {
        super();

        this.state = {
            images: []
        };
    }

    componentDidMount() {
        fetch('/Productos_creados')
            .then(response => response.json())
                .then(products => {
                    this.setState({
                        products
                    });
                }
            );
    }

    


    render() {
        return (
            <div>
                { 
                    this.state.products.map((product, index) => <Products key = {index} product = { product } />)
                }
            </div>
        );
    }
}

export default geneziSliderImages;