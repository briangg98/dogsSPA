const Home = () => import('./components/Home.vue')
const Contacto = () => import('./components/Contacto.vue')

const Mostrar = () => import('./components/dog/Mostrar.vue')
const Crear = () => import('./components/dog/Crear.vue')
const Editar = () => import('./components/dog/Editar.vue')

export const routes = [
    {
        name:'home',
        path: '/',
        component: Home
    },
    {
        name:'contacto',
        path: '/contacto',
        component: Contacto
    },
    {
        name:'mostrarDogs',
        path: '/dogs',
        component: Mostrar
    },
    {
        name:'crearDog',
        path: '/crear',
        component: Crear
    },
    {
        name:'editarDog',
        path: '/editar/:id',
        component: Editar
    }

]