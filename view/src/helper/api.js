import axios from 'axios'

export async function ApiGet(url, data={}) {
    var params = [];
    var i = 0
    Object.keys(data).forEach(key=>{
        params[++i]=`${key}=${data[key]}`;
    });
    params = params.join('&');
    return axios.get(`${process.env.VUE_APP_API_URL}v2/${url}?${params}`,data).then(response=>{
        return   response.data;
    }).catch(error=>{
        console.error(error.response);
        throw error.response;
    })
}

export async function ApiPost(url, data) {
    return axios.post(`${process.env.VUE_APP_API_URL}v2/${url}`,data).then(response=>{
        return   response.data;
    }).catch(error=>{
        console.error(error.response);
        throw error.response;
    })
}

export async function ApiPut(url, data={}) {
    var params = [];
    var i = 0
    Object.keys(data).forEach(key=>{
        params[++i]=`${key}=${data[key]}`;
    });
    params = params.join('&');
    return axios.put(`${process.env.VUE_APP_API_URL}v2/${url}?${params}`,data).then(response=>{
        return   response.data;
    }).catch(error=>{
        console.error(error.response);
        throw error.response;
    })
}