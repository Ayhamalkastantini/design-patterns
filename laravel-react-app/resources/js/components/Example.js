import React, { Component } from 'react';
import FooComponent from './foo-component';
import BarComponent from './bar-component';
class MyComponent extends Component {
    components = {
        foo: FooComponent,
        bar: BarComponent
    };
    render() {
        const TagName = this.components[this.props.tag || 'foo'];
        return <TagName />
    }
}
export default MyComponent;
// if (document.getElementById('example')) {
//     ReactDOM.render(<Example />, document.getElementById('example'));
// }
