### vue

- 前端框架->主要是 数据渲染视图  -> 数据的变化

## 安装 cli

```
npm install -g @vue/cli

vue create my-project

vue ui
```

## vue-router 路由管理器

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

- router 路由跳转的几种方式

```vue

query => get
this.$router.push({name:'home',query: {id:'1'}})  

params => post
this.$router.push({name:'home',params: {id:'1'}})  
```

```html5

<router-link :to="{name:'home', params: {id:1}}">  
<router-link :to="{name:'home', query: {id:1}}">

```

## vue-axios

>从浏览器中创建 XMLHttpRequest
>从 node.js 发出 http 请求
>支持 Promise API
>拦截请求和响应
>转换请求和响应数据
>取消请求
>自动转换JSON数据
>客户端支持防止 CSRF/XSRF

- 按装axios

```bash
npm install axios --save
#axios post 请求参数处理qs
npm install qs --save-dev
```

- 创建http.js
```vue
import axios from 'axios'
import Qs from 'qs'

// 创建axios实例
const service = axios.create({
  baseURL: 'http://localhost:9501', // api的base_url
  timeout: 5000                  // 请求超时时间
})

// request拦截器
service.interceptors.request.use(config => {
  if (config.method === 'post' && typeof config.data === 'string') {
    config.data = Qs.stringify(config.data)
  }

  // config.headers['Content-Type'] = 'application/json'
  // config.headers['Content-Type'] = 'application/x-www-form-urlencoded;charset=utf-8'
  // config.headers['Content-Type'] = 'multipart/form-data'
  return config
}, error => {
  console.log(error) // for debug
  Promise.reject(error)
})
// respone拦截器
service.interceptors.response.use(
  response => {
    let res = response.data
    if (res.code !== 0) {
      alert(res.code)
    }
    return Promise.resolve(res)
  },
  error => {
    console.log('err' + error)// for debug
    
    return Promise.reject(error)
  }
)
export default service
```


- cookie
```
npm install js-cookie --save
```





