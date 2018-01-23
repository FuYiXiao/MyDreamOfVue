import Vue from 'vue'
import Router from 'vue-router'
import dream from '@/components/dream'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'dream',
      component: dream
    }
  ]
})
