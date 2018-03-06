<template>
  <div class="pub-table">
    <div class="table-header">
      <div class="pre-tab current">
        <svg class="icon" aria-hidden="true"><use xlink:href="#icon-maozi"></use></svg>
        <span class="word">概要</span>
      </div>
      <div class="pre-tab ">
        <svg class="icon" aria-hidden="true"><use xlink:href="#icon-ai-link"></use></svg>
        <span class="word">链接</span>
      </div>
      <div class="pre-tab">
        <svg class="icon" aria-hidden="true"><use xlink:href="#icon-bianji1"></use></svg>
        <span class="word">备注</span>
      </div>
      <div class="pre-tab">
        <svg class="icon" aria-hidden="true"><use xlink:href="#icon-tupian"></use></svg>
        <span class="word">图片</span>
      </div>
      <div class="pre-tab">
        <svg class="icon" aria-hidden="true"><use xlink:href="#icon-jihuadaichuli"></use></svg>
        <span class="word">文章</span>
      </div>
      <div class="pre-tab">
        <svg class="icon" aria-hidden="true"><use xlink:href="#icon-jihuadaichuli"></use></svg>
        <span class="word">操作</span>
      </div>
    </div>
    <div class="table-cnt">
    </div>
  </div>
</template>

<script>
export default {
  name: 'tab',
  data () {
    return {
      msg: '首页'
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<!-- <style  lang="scss"></style> -->
<style  lang="scss"  >
@import "../scss/_base";
.pub-table{
  .table-header{
    display: flex;
  }
  .pre-tab{
    cursor: pointer;
    flex-grow: 1;
    display: flex;
    justify-content:center;
    padding-top: $basePadding * 0.2;
    padding-bottom: $basePadding * 0.2;
    background-image:linear-gradient(to top,$baseBgColor,lighten($baseBgColor,20%));
    &.current{
      background-image:linear-gradient(to top,$baseBgColor,lighten($baseBgColor,50%));
      color:$baseSepColor;
      .icon{
        fill: $baseSepColor;
      }
    }
    .icon{
      width: $basePadding;
      height: $basePadding;
      fill:$baseColor;
    }
  }

}
</style>
