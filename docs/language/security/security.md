# web安全
`过滤用户数据是Web应用安全的基础`

## CSRF-跨站请求伪造-CSRF/XSRF 

- 攻击者盗用你的信息，用你的信息模拟请求
- 当你登陆网站信息的时候，你用户信息存储到本地cookie中
- 没有退出去访问另外一个危险网站b
- CSRF攻击主要是因为Web的隐式`身份验证机制`

###### 预防CSRF
- 把get修改操作改成post操作
- 服务端生产token,存储，放到用户表单中，提交验证token合法性。`不能暴露token`
- yii2.0 就是表单会有csrf

## XSS-跨站脚本攻击
- 1.反射型xss一般是攻击者通过特定手法（如电子邮件），诱使用户去访问一个包含恶意代码的 URL，
- 当受害者点击这些专门设计的链接的时候，恶意代码会直接在受害者主机上的浏览器执行。
- 2.DOM-based型 不依赖服务器端的数据。
- 3.储存型 攻击者事先将恶意代码上传或存储到漏洞服务器中。受害者浏览包含此恶意代码的页面就会执行。

###### 预防xss
- 避免XSS的方法之一主要是将用户所提供的内容进行过滤
- 对输入数据进行过滤
- 对输出数据进行适当的处理
- 过滤特殊字符
- 使用HTTP头指定类型

######  Go语言提供了HTML的过滤函数： text/template包下面的HTMLEscapeString、JSEscapeString等函数

## sql注入


## 文件上传漏洞
