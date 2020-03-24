### vue

- 前端框架->主要是 数据渲染视图  -> 数据的变化

### 安装 cli

```
npm install -g @vue/cli

vue create my-project

vue ui
```

#### vue-router 路由管理器

```
npm install vue-router --save-dev
```

- 注意main.js 引入 router命名的问题 必须为router [router](https://router.vuejs.org)

- main.js

```vue
import Vue from 'vue'
import App from './App.vue'
import router from './router'

Vue.config.productionTip = false

new Vue({
  router,
  render: h => h(App),
}).$mount('#app')
```

- 添加子路由需要引入 => "<router-view>"

- router/index.js 配置

```vue
import Vue from 'vue';
import VueRouter from 'vue-router';

import link from '@/components/link';

// 使用插件, 用use注册
Vue.use(VueRouter); // 调用一个这个方法

// 路由的数组
const routes = [
    {
        // 访问路径
        path: '/',
        component: () => import('@/views/job/index'),
    },
    {
        // 访问路径
        path: '/user',
        component: link,
        redirect: '/user/index', 
        children: [
            {
                path: 'index',
                meta: {
                    title: '个人中心',
                    needLogin: true
                },
                component:  () => import('@/views/user/index'),
            },
        ]
    }
];

export default new VueRouter({
    mode: 'history',
    routes
});
```




