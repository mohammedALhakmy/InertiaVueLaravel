import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import NProgress from 'nprogress'
import Layout from "./Shared/Layout.vue";

createInertiaApp({
    resolve:async name => {
        const pages =await import.meta.glob('./Pages/**/*.vue', { eager: true })
        const page = pages[`./Pages/${name}.vue`];
        if (page.default.layout === undefined){
            page.default.layout = Layout;
        }
        return page;
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
