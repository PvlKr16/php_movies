// assets/bootstrap.js

// Импорт основных стилей (если есть)
import './styles/app.css'

// Импорт Stimulus
import { Application } from '@hotwired/stimulus'
import { definitionsFromContext } from '@hotwired/stimulus-webpack-helpers'

// Инициализация Stimulus
const application = new Application()

// Автоматическая загрузка всех контроллеров из папки ./controllers
const context = require.context('./controllers', true, /\.js$/)
application.load(definitionsFromContext(context))

// Любые другие глобальные импорты или настройки можно добавить ниже
console.log('Bootstrap loaded')
