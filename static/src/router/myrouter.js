import Vue from 'vue'
import Router from 'vue-router'
import wrapper from '@/components/wrapper'
import nodePage from '@/components/node_page'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'wrapper',
      component: wrapper
    },
    {
      path: '/node',
      name: 'nodePage',
      component: nodePage
    }
  ]
})
