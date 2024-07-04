class FeaturedPosts {
  constructor(container) {
    this.container = container
    this.$ = {
      buttons: container.querySelectorAll('.featured-posts__button'),
      posts: container.querySelectorAll('.featured-posts__posts'),
    }

    this.init()
  }

  init() {
    this.initEventListeners()
  }

  initEventListeners() {
    this.$.buttons.forEach(button => {
      button.addEventListener('click', e => this.handleButtonClick(e))
    })
  }

  handleButtonClick(e) {
    const id = e.currentTarget.getAttribute('data-id')
    this.$.buttons.forEach(button => {
      if (button.getAttribute('data-id') === id) {
        button.classList.remove('featured-posts__button--disabled')
      } else {
        button.classList.add('featured-posts__button--disabled')
      }
    })
    this.$.posts.forEach(posts => {
      if (posts.getAttribute('data-id') === id) {
        posts.classList.remove('featured-posts__posts--disabled')
      } else {
        posts.classList.add('featured-posts__posts--disabled')
      }
    })
  }
}

export default FeaturedPosts
