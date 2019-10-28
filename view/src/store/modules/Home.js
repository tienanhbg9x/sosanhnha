import axios from "axios"
const Home = () => {
    return {
        state: {
            home_news: null,
            token: null,

        },
        getters: {

        },
        mutations: {
            retrieveToken(state, token) {
                state.token = token
            }
        },
        actions: {
            retrieveToken(context, credentials) {
                axios.post('/login',{
                    username: credentials.username,
                    password: credentials.password
                })
                    .then(response =>{
                        const token = response.data.access_token
                        localStorage.setItem('access_token',token)
                        context.commit('retrieveToken',token)
                    })
                    .catch(error => {
                        console.log(error)
                    })
            }
        }
    }
};

export default Home;