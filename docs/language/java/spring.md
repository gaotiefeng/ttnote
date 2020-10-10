### 注解
__ @Autowired
>@Autowired 功能就是为我们注入一个定义好的bean,
>这个注释是属于 spring 的容器配置的一个注释，与它同属容器配置的注释还有：
>@Required,@Primary, @Qualifier 等等。
>因此 @Autowired 注释是一个用于容器 ( container ) 配置的注释。
- 构造方法注入
- 依赖注入
```java
    public class Home {
        private IndexClass Index;
        //todo 注入需要的class
        public void Home(class,interface)
        {
            this.class = class;
            this.interface = class;
        }
    }
```
- @Controller

>需要返回页面class @Controller
- @ResponseBody

>返回json等内容到页面，则需要加@ResponseBody注解
- @RestController

>相当于@Controller+@ResponseBody两个注解的结合,
返回json数据不需要在方法前面加@ResponseBody注解了,
但使用@RestController这个注解,视图解析器无法解析jsp,html页面

- @Service
>用于标注业务层组件 Service

_ @Repository 
>用于标注数据访问组件 Dao

- @Component
>泛指组件,当组件不好归类的时候，我们可以使用这个注解进行标注。

- @RequestMapping(value = ("/login"), method = RequestMethod.GET)
>路由-控制或者方法 