import React from 'react';

export default class PeopleList extends React.Component {
    constructor(props) {
        super(props);

        this.state = {
            loading: false,
            loaded: false,
            data: []
        };

        this.url = 'http://www.mi6.test/api/person';
    }

        componentDidMount() {
            this.loadData();
        }


        loadData() {
            if (this.url) {
                this.setState({ 
                    loading: true,
                    loaded: false,
                    data: []
                })
    
                fetch(this.url)
                    .then(response => response.json())
                    .then(data => {
                            this.setState({ 
                            loaded: true,
                            data: data
                        })
                    })
                    .finally(this.setState({
                        loading: false
                    }));
            }
        }

        render(){

            let show = 'Loading';
            if (this.state.data.length > 0 ){
                show = this.state.data.map((oneData)=>{
                    return <div key={oneData.id}>{oneData.name}
                                <img src={oneData.image.url}></img>
                            </div>
                         
                });
            }
        
        return(
            <div>{show}</div>
        )

        }

    }






















        /* render() {

            let content = (
                 <div className="message">
                    <div className="loader"><div></div><div></div><div></div><div></div></div>
                    Loading
                </div>
                <div>loading</div>
            )
            if (!this.state.loading && this.state.loaded) {
    
                let list_items = [];
                for (let item of this.state.data) {
                    list_items.push((
                        <li>
                            { item.name }                            
                            <div className="rating">{ item.rating.toFixed(1) }</div>
                        </li>
                    ))
                }
    
                content = (
                    <>
                        <ul>
                            {
                                this.state.data.map((item) => (
                                    <li>
                                        { item.name }                            
                                        <div className="rating">{ item.rating.toFixed(1) }</div>
                                    </li>
                                )) 
                            }
                        </ul>
                    </>
                )
            }
            
            return (
                <section className="top-rated">
    
                    <h2>Top rated movies & shows</h2>
    
                    { content }
    
                </section>
            );
        }


 */

    