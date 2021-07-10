import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Item from './Item';
 
/* An example React component */
class Main extends Component {
    constructor() {
        super();
        this.state = {
            items: [],
            currentItem: null
        }
    }

    componentDidMount() {
        
        fetch('/item/all')
            .then( response => {
                return response.json();
            })
            .then( items => {
                this.setState({items});
            })
    }
    
    renderItems() {
        return this.state.items.map(item => {
            return (
                // <li key={item.id}>
                //     {item.title}
                // </li>
                <div className="feature col  border  border-primary m-1 mb-3"  key={item.id} onClick={() =>this.handleClick(item)} >  
                    <h3  >
                    {item.title}
                    </h3>
                    <a href={item.id} className="icon-link ">
                    Цена: {item.price}
                     </a>
                </div>
            )
        })
    }

    handleClick(item) {
        this.setState({currentItem:item});
        // console.log(item);
    }

    render() {
        return (
            <div className="row g-4 py-5 row-cols-1 row-cols-lg-4">
                
                { this.renderItems() }

                <Item item={this.state.currentItem} />
               
            </div>
        
        );
    }
}
 
export default Main;
 
/* The if statement is required so as to Render the component on pages that have a div with an ID of "root";  
*/
 
if (document.getElementById('root')) {
    ReactDOM.render(<Main />, document.getElementById('root'));
}