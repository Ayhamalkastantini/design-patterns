import React, { Component } from 'react';
import ReactDOM from "react-dom";
import XTable from "./Table";
import ProjectList from "./projects/ProjectsList";
import CustomPoup from "./CustomPopup";
import Popup from "reactjs-popup";
class AppComponents extends Component {
    constructor(props){
        super(props);
        this.state = { showPopup: false };
    }
    togglePopup() {
        this.setState({
            showPopup: !this.state.showPopup
        });
    }
    render() {
        return (
            <div>
                <ProjectList />
                <XTable />

            </div>
        );
    }
}
export default AppComponents;
ReactDOM.render(<AppComponents />, document.getElementById('AppComponents'))
