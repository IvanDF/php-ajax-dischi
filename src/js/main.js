// IMPORT VUE
import Vue from 'vue';
// IMPORT AXIOS
import axios from 'axios'

const app = new Vue({

    el: '#app',

    data: {

        cds: [],
        authors: [],

        searchArtist: 'all',
        url: window.location.href + 'scripts/database.php',

    },

    created() {


        axios.get(this.url)
            .then( response => {
                // handle success
                this.cds = response.data;
                this.authors = response.data;
            })
            .catch( error => {
                // handle error
                console.log(error);
            })
    },
    methods: {
        filter(){
            axios.get(this.url, {
                params: {
                    author: this.searchArtist,
                }
                })
                .then( response => {
                    // handle success;
                    this.cds = response.data;
                })
                .catch( error => {
                    // handle error
                    console.log(error);
                });
        }
    }

});