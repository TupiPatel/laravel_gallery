import React, { Component } from 'react'
import ReactDOM from 'react-dom'
import { BrowserRouter, Route, Switch } from 'react-router-dom'
import Navbar from './Navbar'
import Gallery from './Gallery'


class App extends Component {

  render () {
    return (
      <BrowserRouter  >
        <div>
               
          <Switch>
          <Route path="/" render={(props) => (
                    <Navbar {...props}/>
                )}/>
            <Route exact path="/" component={Gallery}/>
          </Switch>
        </div>
      </BrowserRouter>
    )
  }
}
//export default withRouter(App);
ReactDOM.render(<App />, document.getElementById('app'))