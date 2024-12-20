import "../css/app.css";
import "./bootstrap";

import {createInertiaApp} from "@inertiajs/vue3";
import {resolvePageComponent} from "laravel-vite-plugin/inertia-helpers";
import {createApp, DefineComponent, h} from "vue";
import PrimeVue from "primevue/config";
import InputText from "primevue/inputtext";
import Textarea from "primevue/textarea";
import Toast from "primevue/toast";
import ToastService from "primevue/toastservice";
import {ZiggyVue} from "../../vendor/tightenco/ziggy";
import Timeline from "primevue/timeline";
import Card from "primevue/card";

createInertiaApp({
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob<DefineComponent>("./Pages/**/*.vue"),
        ),
    setup({el, App, props, plugin}) {
        createApp({render: () => h(App, props)})
            .use(plugin)
            .use(ZiggyVue)
            .use(PrimeVue, {theme: "none"})
            .use(ToastService)
            .component("InputText", InputText)
            .component("Textarea", Textarea)
            .component("Timeline", Timeline)
            .component("Toast", Toast)
            .component("Card", Card)
            .mount(el);
    },
    progress: {
        color: "#4B5563",
    },
});
