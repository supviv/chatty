
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


Vue.component('chat-message', require('./components/ChatMessage.vue'));
Vue.component('chat-log', require('./components/ChatLog.vue'));
Vue.component('chat-composer', require('./components/ChatComposer.vue'));
Vue.component('chat-name', require('./components/ChatName.vue'));

const app = new Vue({
    el: '#app',
    data:{
    	 messages: []
    },
    methods: {
    	addMessage(message){
    		// add to existing messages
    		this.messages.push(message); 
    		//and persist to database 
    		axios.post('messages', message);
    	}
    },

    created() {
        axios.get('/messages').then(response => {
            this.messages = response.data;
        });
    }
});
