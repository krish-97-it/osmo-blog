import FeaturedPosts from './FeaturedPosts'
import Header from './Header'
import Newsletter from './Newsletter'

const components = [
  {
    class: FeaturedPosts,
    namespace: 'FeaturedPosts',
    selector: '.featured-posts',
  },
  {
    class: Header,
    namespace: 'Header',
    selector: '.header',
  },
  {
    class: Newsletter,
    namespace: 'Newsletter',
    selector: '.newsletter',
  },
]

export default components
