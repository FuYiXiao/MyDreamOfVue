<template>
  <div id="wrapperCommon">
    <div class="pub-menu">
      <div class="menu" v-bind:class="{ current : parseInt(item.sort)==1}" v-for="item in items" :key="item.id" >
        <svg class="icon" aria-hidden="true" v-for="icon in item.icon_class" :key="icon" >
          <use v-bind:xlink:href="'#' + icon"></use>
        </svg>
        <span class="word" >{{ item.name }}</span>
      </div>
    </div>
    <router-view/>
  </div>
</template>

<script>
import $ from 'jquery'
import vuexStore from './scripts/page_vuex.js'
// import "./scss/index_menu.scss"
export default {
  // name属性可以调用模板本身进行递归，有点像aguments对象,在name全局唯一ID模板里使用v-if进行递归跳出
  // 一是可以递归调用，二是方便调试
  name: 'Begin',
  // store: vuexStore,
  computed: {
    items () {
      return this.$store.state.rootNodeData
    }
  },
  data: function () {
    return {
      items: this.$store.state.rootNodeData
    }
  },
  // 定义事件
  created: function (argument) {
    // 是否隐藏官方的内容
    if ($('#wrapper').length > 0) {
      $('#app').hide()
    }
    vuexStore.dispatch('fetchMsgRootNodeData')
  },
  methods: {
  }
}
</script>

<style  lang="scss">

@import './scss/index_menu.scss'

</style>
