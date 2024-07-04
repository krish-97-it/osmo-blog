class Header {
  constructor(container) {
    this.container = container
    this.$ = {
      filters: container.querySelector('.header-filters'),
      trigger: container.querySelector('.header-filters__trigger'),
    }

    this.init()
  }

  init() {
    this.$.trigger.addEventListener('click', () => this.handleClickTrigger())
    window.addEventListener('click', (e) => this.handleClickWindow(e))
  }

  handleClickTrigger() {
    this.$.filters.classList.toggle('header-filters--active')
  }

  handleClickWindow(e) {
    if (e && !this.$.filters.contains(e.target)) {
      this.$.filters.classList.remove('header-filters--active')
    }
  }
}

export default Header
