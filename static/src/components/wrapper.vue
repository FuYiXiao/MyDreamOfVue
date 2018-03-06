<template>
<div class="pub-wrapper">
  <div class="plate-container">
    <div class="pre-page">
    </div>
  </div>
  <div class="plate-side plate-side-show">
    <span class="btn-showhide">
      <svg class="icon icon-show" aria-hidden="true"><use xlink:href="#icon-icon--"></use></svg>
      <svg class="icon icon-hide" aria-hidden="true"><use xlink:href="#icon-icon--1"></use></svg>
    </span>
    <div class="menubox">
      <div class="pre-menu current">搜索</div>
      <div class="pre-menu">显示</div>
      <div class="pre-menu">
        列表
      </div>
    </div>
    <div class="menucnt">
    </div>
  </div>
</div>
</template>

<script>
// import $ from 'jquery'
export default {
  created: function (argument) {
  }
}
</script>

<style  lang="scss">
@import "../scss/_base";
.pub-wrapper{
  position: relative;
  left: 0px; top: 0px;
  height: 100%;
  .plate-side{
    position: fixed;
    top: 0;
    right: 0;
    width: 0;
    height: 100vh;
    padding-bottom: $basePadding *3;
    z-index: $zIndex - 1;
    .icon{
      cursor: pointer;
      fill: $baseColor;
      width: $basePadding * 2;
      height: $basePadding * 2;
    }
    .btn-showhide{
      position: fixed;
      right: 0px;
      bottom:  $basePadding *3;
      width: $basePadding * 2;
      height: $basePadding * 2;
      overflow: hidden;
      .icon-hide{
        display: none;
      }
    }
    .menubox{
      display: none;
      position: fixed; right: 0px;
      bottom:  $basePadding * 6;
      width: $basePadding * 2; text-align: center;
      background-color: lighten($baseBgColor,10%);
      .pre-menu{
        cursor: pointer; width: 2em; padding:1em 0.5em;
        line-height: 1.2em; font-size: 1em;
        border-top: 1px solid $baseBgColor;
        &:frist-clild{
          border-top:none;
        }
        &.current{
          background-color: lighten($baseBgColor,30%);
        }
      }
    }
    &.plate-side-show{
      width: 100%;
      .btn-showhide{
        .icon-hide{
          display: block;
        }
        .icon-show{
          display: none;
        }
      }
      .menubox{
        display: block;
      }
    }
  }
  .pre-page{
    width: 100%;
    min-height: 500px;
  }
}
</style>
