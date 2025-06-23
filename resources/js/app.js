import './bootstrap';
import { createApp } from 'vue';
import Notify from './components/Notify.vue';

const app = createApp({});
app.component('notify', Notify);
app.mount('#app');