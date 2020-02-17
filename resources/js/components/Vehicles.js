import React from 'react';

const Vehicle = ({vehicle}) => {
    return(
        <div className="card">
            <div className="card-body">
                <h5 className="card-title">{vehicle.vehicle}</h5>
                <p className="card-text">{vehicle.description}</p>
            </div>
        </div>
    );
}

export default Vehicle;
