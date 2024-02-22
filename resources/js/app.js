import './bootstrap';
import { createApp } from 'vue'
import App from "./components/App.vue";
import Form from "./components/Form.vue";
import Details from "./components/Details.vue";
import DetailsCard from "./components/DetailsCard.vue";

const app = createApp()

app.component('details-card', DetailsCard)
app.component('form-busca', Form)
app.component('details-gym', Details)
app.component('app', App)

app.mount('#app')
