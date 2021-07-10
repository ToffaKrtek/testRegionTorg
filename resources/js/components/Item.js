import React, { Component } from "react";

const Item = ({item}) => {
    const divStyle = {"position": "fixed", "right": "10px", "paddingLeft": "40px"};
    if (window.innerWidth < "600") {
        divStyle.bottom = "5px";
    };
    let data = () => {
        
    }
    function handleClose(){
       item= null;
    }

if (!item) {
    return (<div style={divStyle} className="feature col  m-1 mb-3"> 
                {/* <div className="border  border-primary  bg-dark text-white vh-30 w-10 p-2">
                    <h2>Выберите лот</h2>
                    <p> Достаточно кликнуть по интересующему лоту в списке </p>
                </div> */}
     </div>)
}
return (
        <div style={divStyle} className="feature col-md-3 m-1 mb-3">
            <div className="border  border-primary  bg-dark text-white  vh-50 w-10 p-2">
               
                <h2>{item.title} </h2> 
                
              
                <p><b>Описание:</b><br /> {item.description} </p>
                <p><b>Цена:</b> {item.price} </p>
                <div className="col-md-12 row">
                    <div className="col-md-8">
                        <button className="btn btn-primary mb-3">Оставить заявку</button>
                    </div>
                    <div className="col-md-4">
                        <button className="btn btn-primary mb-3" onClick={() => { handleClose(); console.log(csrf_token)}}>Закрыть</button>
                    </div>
                </div>
            </div>
        </div>
)
};
export default Item;