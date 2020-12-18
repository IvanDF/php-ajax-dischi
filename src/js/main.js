// IMPORT VUE
import Vue from 'vue';
// IMPORT AXIOS
import axios from 'axios'

console.log('ciao');

const app = new Vue({
    el: '#app',
    data: {
        cds: [],
    },
    created() {

        const url = window.location.href + 'scripts/database.php';
        console.log('ciao Vue');

        axios.get(url)
            .then( response => {
                // handle success
                console.log(response.data);
                this.cds = response.data;
            })
            .catch( error => {
                // handle error
                console.log(error);
            })
    },
});