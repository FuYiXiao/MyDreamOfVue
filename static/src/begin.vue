<template>
  <div id="wrapperCommon">
    <div class="pub-menu">
      <div class="menu">
        <svg class="icon" aria-hidden="true">
          <use xlink:href="#icon-jiaoya"></use>
        </svg>
        <span class="word">路在脚下</span>
      </div>
      <div class="menu">
        <svg class="icon" aria-hidden="true">
          <use xlink:href="#icon-daolu"></use>
        </svg>
        <span class="word">理想之路</span>
      </div>
      <div class="menu current">
        <svg class="icon" aria-hidden="true">
          <use xlink:href="#icon-shenghuo"></use>
        </svg>
        <span class="word">生活点滴</span>
      </div>
      <div class="menu">
        <svg class="icon" aria-hidden="true">
          <use xlink:href="#icon-xiaolianchenggong"></use>
        </svg>
        <span class="word">化繁为简</span>
      </div>
    </div>
    <router-view/>
  </div>
</template>

<script>

import $ from 'jquery'
// import "./scss/index_menu.scss"
export default {
  // name属性可以调用模板本身进行递归，有点像aguments对象,在name全局唯一ID模板里使用v-if进行递归跳出
  // 一是可以递归调用，二是方便调试
  name: 'Begin',
  // 定义事件
  created: function (argument) {
    // 是否隐藏官方的内容
    if ($('#wrapper').length > 0) {
      $('#app').hide()
    }
  }
}
</script>

<style  lang="scss">

@import './scss/index_menu.scss'
</style>
