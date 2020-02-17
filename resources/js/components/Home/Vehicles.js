import React from 'react';

const Vehicle = ({vehicle}) => {
    return(
        <div className="card">
            <div className="card-body">
                <h5 className="card-title">{vehicle.vehicle}  {vehicle.sold ? <span class="badge badge-danger">VENDIDO</span> : ''}</h5>
                <h6 className="card-subtitle mb-2 text-muted">Modelo: {vehicle.model}</h6>
                <h6 className="card-subtitle mb-2 text-muted">Ano: {vehicle.year}</h6>
                <p className="card-text">{vehicle.description}</p>
            </div>
        </div>
    );
}

export default Vehicle;
