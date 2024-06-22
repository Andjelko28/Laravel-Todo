import './bootstrap';
import '../sass/app.scss';
import { createApp } from 'vue';
import routes from './routes';

createApp({})
    .use(routes)
    .mount('#app')
