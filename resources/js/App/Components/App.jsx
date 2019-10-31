import React from 'react';
import PeopleList from './PeopleList.jsx';

export default class App extends React.Component {
    constructor(props) {
        super(props);
    
    this.state = {
    logged_in: false,
    token: null
    }
}
    render() {
        if(this.state.logged_in == null){
            console.log('it works');
        }
        else if(this.state.logged_in == true){
        return (
            <div>
            <h1>App component</h1>
            <PeopleList />
        </div>);
        }
        else if(this.state.logged_in == false){
        return (<h1>Login form</h1>)
        }

        
    }
}
