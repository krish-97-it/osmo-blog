import components from './components/index.js'

class App {
  constructor() {
    this.initComponents()
  }

  initComponents() {
    this.components = {}

    components.forEach(component => {
      this.elems = [...document.querySelectorAll(component.selector)]
      if (this.elems.length > 0) {
        this.components[component.namespace] = []
        this.elems.forEach(elem => {
          this.components[component.namespace].push(new component.class(elem)) // eslint-disable-line
        })
      }
    })
  }
}

document.addEventListener('DOMContentLoaded', () => {
  new App()
})
