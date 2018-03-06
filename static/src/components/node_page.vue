<template>
  <div class="wrapper">
    <div class="pub-node">
      <div class="prenode prenode-show-info lever-1">
        <div class="nodewrapper">
          <div class="nodecnt">
            <span class="icon-tip">
              <svg class="icon" aria-hidden="true"><use xlink:href="#icon-zhongyaotixing_Pro"></use></svg>
            </span>
            <span class="word">紧急重要</span>
            <span class="other-icon">
              <svg class="icon" aria-hidden="true"><use xlink:href="#icon-ai-link"></use></svg>
              <svg class="icon" aria-hidden="true"><use xlink:href="#icon-tupian"></use></svg>
              <svg class="icon" aria-hidden="true"><use xlink:href="#icon-bianji1"></use></svg>
              <svg class="icon" aria-hidden="true"><use xlink:href="#icon-jihuadaichuli"></use></svg>
            </span>
            <span class="pack-up-down">
              <svg class="icon btn-show" aria-hidden="true"><use xlink:href="#icon-xiangxia1"></use></svg>
              <svg class="icon btn-hide" aria-hidden="true"><use xlink:href="#icon-z045"></use></svg>
            </span>
          </div>
        </div>
        <div class="otherinfo">
          <Tab/>
        </div>
      </div>
      <div class="prenode lever-2">
        <div class="nodewrapper">
          <div class="nodecnt">
            <span class="icon-tip">
              <svg class="icon" aria-hidden="true"><use xlink:href="#icon-zhongyaotixing_Pro"></use></svg>
            </span>
            <span class="word">学习计划学习计划学习计划学习计划学习计划学习计划学习计划学习计划</span>
            <span class="other-icon">
              <svg class="icon" aria-hidden="true"><use xlink:href="#icon-ai-link"></use></svg>
              <svg class="icon" aria-hidden="true"><use xlink:href="#icon-tupian"></use></svg>
              <svg class="icon" aria-hidden="true"><use xlink:href="#icon-bianji1"></use></svg>
              <svg class="icon" aria-hidden="true"><use xlink:href="#icon-jihuadaichuli"></use></svg>
            </span>
            <span class="pack-up-down">
              <svg class="icon" aria-hidden="true"><use xlink:href="#icon-xiangxia1"></use></svg>
              <svg class="icon" aria-hidden="true"><use xlink:href="#icon-z045"></use></svg>
            </span>
          </div>
        </div>
      </div>
      <div class="prenode lever-3">
        <div class="nodewrapper">
          <div class="nodecnt">
            <span class="word">Java</span>
          </div>
        </div>
      </div>
      <div class="prenode lever-1">
        <div class="nodewrapper">
          <div class="nodecnt">
            <span class="word">不紧急但重要</span>
          </div>
        </div>
      </div>
      <div class="prenode lever-1">
        <div class="nodewrapper">
          <div class="nodecnt">
            <span class="word">紧急不重要</span>
          </div>
        </div>
      </div>
      <div class="prenode lever-1">
        <div class="nodewrapper">
          <div class="nodecnt">
            <span class="word">不紧急不重要</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Tab from './tab'
export default {
  components: {
    Tab
  },
  name: 'dream',
  data () {
    return {
      msg: '首页'
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<!-- <style  lang="scss"></style> -->
<style  lang="scss" scoped>
@import "../scss/_base";
$leverBorderColor: #F00000,#FF6600,#99CC00,#663399,#333399,#CC3399,#006600,#CCFF00;
.pub-node{
  position: relative;
  padding-top:$basePadding;
  padding-bottom:$basePadding;
  .prenode{
    margin-bottom: $basePadding *0.2;
    .nodecnt{
      border:1px solid lighten($baseBgColor,50%);
      border-radius: $basePadding *0.5;
      padding: $basePadding *0.2;
      display: flex;
      justify-content: space-between;
    }
    .otherinfo{
      display: none;
      position: relative; padding: $basePadding *0.2;
      border:1px solid $baseOtherBorderColor;
      border-radius: $basePadding *0.5;
    }
    .icon{
      fill: $baseColor;
      width: $basePadding;
      height: $basePadding;
    }
    .icon-tip{
      display: flex;
      flex-shrink:0;
      height: $basePadding;
    }
    .word{
      flex-grow: 100;
      height: $basePadding *1.2;
      overflow: hidden;
      white-space: nowrap;
      text-overflow: ellipsis;
    }
    .other-icon{
      display: flex;
      flex-shrink:0;
    }
    .pack-up-down{
      display: flex;
      flex-shrink:0;
      .icon{
        cursor: pointer;
        width: $basePadding *2;
      }
      .btn-show{
        display: block;
      }
      .btn-hide{
        display: none;
      }
    }
  }
  .prenode-show-info{
    .otherinfo{
      display: block;
    }
    .pack-up-down{
      .btn-show{
        display: none;
      }
      .btn-hide{
        display: block;
      }
    }
  }
  @for $i from 1 through 8 {
    .lever-#{$i}{
      .nodewrapper{
        padding-left:$basePadding * ($i - 1);
      }
      .nodecnt{
        border-color: nth($leverBorderColor,$i);
      }
    }
  }
}
</style>
