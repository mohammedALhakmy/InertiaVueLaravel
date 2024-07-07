import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import NProgress from 'nprogress'

createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        return pages[`./Pages/${name}.vue`]
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el)
    },
    progress: {
        delay: 250,
        color: '#c79322',
        includeCSS: true,
        showSpinner: false,
    },
})
NProgress.start();
