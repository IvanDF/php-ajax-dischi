// IMPORT VUE
import Vue from 'vue';
// IMPORT AXIOS
import axios from 'axios'

const app = new Vue({

    el: '#app',

    data: {

        cds: [],

        searchArtist: 'all',

    },

    created() {

        const url = window.location.href + 'scripts/database.php';

        axios.get(url)
            .then( response => {
                // handle success
                this.cds = response.data;
            })
            .catch( error => {
                // handle error
                console.log(error);
            })
    },

});