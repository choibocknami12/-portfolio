import { createApp } from 'vue'
import App from './App.vue'
import vuetify from './plugins/vuetify'
import { loadFonts } from './plugins/webfontloader'
import 'bootstrap-icons/font/bootstrap-icons.css'; 

loadFonts()

createApp(App)
  .use(vuetify)
  .mount('#app')
