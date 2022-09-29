import VueRouter from 'vue-router';

// importiamo-le-singo.le pagine
import About from './pages/About';
import Home from './pages/Home';
import Contacts from './pages/Contacts';
import SinglePost from './pages/SinglePost';

// che per ogni pagina avrò: path (uri), name (by name-calls), component di riferimento

const router = new VueRouter({
    mode: 'history',
    routes: [{
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/about',
            name: 'about',
            component: About
        },
        {
            path: '/about',
            name: 'about',
            component: Home
        },
        {
            path: '/contacts',
            name: 'contacts',
            component: Contacts
        },
        {
            path: '/posts/:id',
            name: 'singlePost',
            component: SinglePost
        },
    ]
});

export default router