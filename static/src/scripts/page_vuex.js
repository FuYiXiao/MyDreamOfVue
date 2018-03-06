import $ from 'jquery'
import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)
var UrlList
if (process.env.NODE_ENV === 'production') {
  UrlList = {}
} else {
  UrlList = {
    rootDataUrl: '/MVC/index.php/search_data/root_data/'
  }
}

export default new Vuex.Store({
  state: {
    // 根目录数据
    rootNodeData: []
  },
  // 改变
  mutations: {
    // 根目录数据
    changeRootNodeData (state, data) {
      state.rootNodeData = data
    }
  },
  // 异步改变
  actions: {
    // 根目录数据
    fetchMsgRootNodeData (context) {
      $.ajax({
        type: 'GET',
        url: UrlList.rootDataUrl,
        dataType: 'json',
        success: function (data) {
          context.commit('changeRootNodeData', data)
        }
      })
    }
  }
})
