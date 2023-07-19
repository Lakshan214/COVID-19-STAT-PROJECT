// resources/js/app.js
import Vue from 'vue';
import HomeStats from './components/Home/HomeStats.vue';
import HelpGuideList from './components/Help & Guide/HelpGuideList.vue';
import HelpGuideForm from './components/Help & Guide//HelpGuideForm.vue';
import axios from 'axios';

Vue.component('home-stats', HomeStats);
Vue.component('help-guide-list', HelpGuideList);
Vue.component('help-guide-form', HelpGuideForm);


const app = new Vue({
  el: '#app',
  data: {
    helpGuides: [], // Initialize an empty array for help guides
  },
  methods: {
    addHelpGuide(formData) {
      axios.post('/help-guides', formData)
        .then(response => {
          // Handle successful response, if needed
          console.log(response.data);
          // You may update the helpGuides array here based on the response from the server
        })
        .catch(error => {
          // Handle errors, if needed
          console.error(error);
        });
      this.helpGuides.push(formData);
    },
  },
});