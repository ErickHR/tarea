const axios = require('axios').default;

export default {

    async axiosGet( url ){
        try {
            const response = await axios.get( url )
            return response.data.data
        } catch (error) {
            return []
        }
    },

    axiosPost( url, body ){
        return axios.post( url, body )
    },

    axiosPut( url, body ){
        return axios.put( url, body )
    },

    axiosDelete( url ){
        return axios.delete( url )
    },

}
