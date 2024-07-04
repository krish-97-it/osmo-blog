class Newsletter {
  constructor(container) {
    this.container = container
    this.$ = {
      form: container.querySelector('.newsletter__form'),
      error: container.querySelector('.newsletter__error'),
    }

    this.init()
  }

  init() {
    this.initEventListeners()
  }

  initEventListeners() {
    this.$.form.addEventListener('submit', e => this.handleSubmitForm(e))
  }

  handleSubmitForm(e) {
    e.preventDefault()
    this.container.classList.add('newsletter--loading')

    const data = new FormData(this.$.form)
    const email = data.get('email')
    const emailValidator = /^\w+[\w-+\.]*\@\w+([-\.]\w+)*\.[a-zA-Z]{2,}$/; // eslint-disable-line
    const countryApiUrl = 'https://www.playosmo.com/api/info'
    const newsletterApiUrl = 'https://www.playosmo.com/api/v2/newsletter/subscribe/discount'

    if (!email.match(emailValidator)) {
      this.$.error.classList.add('newsletter__error--active')
      return false
    }
    this.$.error.classList.remove('newsletter__error--active')

    const normalizedData = {
      email,
      email_type: 'all',
      referrer: 'blog',
      subscribe: true,
      website_language: 'en-US',
    }

    fetch(countryApiUrl)
    .then(response => {
      normalizedData.country = response.country || 'US'
      fetch(newsletterApiUrl, {
        method: 'POST',
        body: JSON.stringify(normalizedData),
      })
      .then(() => {
        this.container.classList.remove('newsletter--loading')
        this.container.classList.add('newsletter--submitted')
      })
      .catch(() => {
        this.$.error.classList.add('newsletter__error--active')
      })
    })
    .catch(() => {
      this.$.error.classList.add('newsletter__error--active')
    })

    return true
  }
}

export default Newsletter
