import React from 'react';
import {Route, Switch} from 'react-router-dom';
import Home from './components/Home/Home';
import Detail from './views/Detail/Detail';


const Main = props => (
<Switch>
   <Route exact path='/' component={Home}/>
   <Route path={`/veiculo/${props.id}'`} component={Detail}/>
</Switch>
);
export default Main;
