import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Axios from 'axios';

import Vehicles from './Vehicles';

export default class App extends Component {

    constructor(props) {
        super(props);
        this.state = {
            vehicles: []
        }
    }
    componentDidMount() {
        Axios.get('/api/veiculo').then(response => {
            this.setState({
                vehicles : response.data
            })
        })
    }

    render() {
        const { vehicles } = this.state;
        return (
            <div className="container">

                    {vehicles.map(vehicle => (
                        <div key={vehicle.id}> <Vehicles vehicle={vehicle} /></div>

                    )

                    )}

            </div>
        );
    }
}

if (document.getElementById('app')) {
    ReactDOM.render(<App />, document.getElementById('app'));
}
