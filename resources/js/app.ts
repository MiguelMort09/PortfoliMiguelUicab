import "../css/app.css";
import "./bootstrap";

import {createInertiaApp} from "@inertiajs/vue3";
import {resolvePageComponent} from "laravel-vite-plugin/inertia-helpers";
import {createApp, DefineComponent, h} from "vue";
import PrimeVue from "primevue/config";
import material from './presets/lara';
import {ZiggyVue} from "ziggy-js";


createInertiaApp({
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob<DefineComponent>("./Pages/**/*.vue"),
        ),
    setup({el, App, props}) {
        createApp({render: () => h(App, props)})
            .use(PrimeVue, {
                theme: {
                    preset: material,
                    options: {
                        prefix: 'p',
                        darkModeSelector: 'app-dark',
                        cssLayer: {
                            name: 'primevue',
                            order: 'app-styles, primevue, another-css-library'
                        }
                    }
                }
            })
            .use(ZiggyVue)
            .mount(el);
    },
    progress: {
        color: "#4B5563",
    },
});
