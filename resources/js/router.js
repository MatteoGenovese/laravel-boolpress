import VueRouter from 'vue-router';

// importiamo-le-singo.le pagine
import HomePage from './pages/HomePage';
import AboutPage from './pages/AboutPage';
import ContactsPage from './pages/ContactsPage';
import SinglePost from './pages/SinglePost';

// che per ogni pagina avrò: path (uri), name (by name-calls), component di riferimento

const router = new VueRouter({
    mode: 'history',
    routes: [{
            path: '/',
            name: 'HomePage',
            component: HomePage
        },
        {
            path: '/about',
            name: 'AboutPage',
            component: AboutPage
        },
        {
            path: '/contacts',
            name: 'ContactsPage',
            component: ContactsPage
        },
        {
            path: '/posts/:id',
            name: 'SinglePost',
            component: SinglePost
        },
    ]
});

export default router