import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import NProgress from 'nprogress'
import Layout from "./Pages/Shared/Layout.vue";
createInertiaApp({
    resolve: async name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        const pagePath = `./Pages/${name}.vue`;
        const page = pages[pagePath];
        if (!page) {
            throw new Error(`Page not found: ${pagePath}`);
        }
        if (!page.default) {
            throw new Error(`Page ${pagePath} does not have a default export.`);
        }
        if (page.default.layout === undefined) {
            page.default.layout = Layout;
        }
        return page;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el)
    },
    title: title => `My App - ${title}`,
    progress: {
        delay: 250,
        color: '#000000',
        includeCSS: true,
        showSpinner: false,
    },
})

NProgress.start();
