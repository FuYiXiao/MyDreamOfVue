// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'

// 官方例子
import App from './App'
import router from './router'

// 本地首页模板
import Begin from './index'
import myRouter from './router/myrouter'
// 页面图标
import './scripts/icon/iconfont.js'

// 设置为false以阻止vue在启动时生成生产提示
Vue.config.productionTip = false

/* eslint-disable no-new */
/*
new Vue({
  el: '#app',
  router,
  components: { App },
  template: '<App/>'
})
*/
new Vue({
  el: '#wrapper',
  // 此处必须要这样写
  router,
  components: { Begin },
  template: '<Begin/>'
})

