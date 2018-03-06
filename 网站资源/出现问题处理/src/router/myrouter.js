import Vue from 'vue'
import Router from 'vue-router'
// import wrapper from '@/components/wrapper'
import HelloWorld from '@/components/HelloWorld'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'HelloWorld',
      component: HelloWorld
    }
  ]
})
