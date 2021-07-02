maven 命令的格式为 mvn [plugin-name]:[goal-name]，可以接受的参数如下。

-D 指定参数，如 -Dmaven.test.skip=true 跳过单元测试；

-P 指定 Profile 配置，可以用于区分环境；

-e 显示maven运行出错的信息；

-o 离线执行命令,即不去远程仓库更新包；

-X 显示maven允许的debug信息；

-U 强制去远程更新snapshot的插件或依赖，默认每天只更新一次。

## maven

创建maven项目：mvn archetype:create 

指定 group： -DgroupId=packageName 

指定 artifact：-DartifactId=projectName

创建web项目：-DarchetypeArtifactId=maven-archetype-webapp  

创建maven项目：mvn archetype:generate

**验证项目是否正确：mvn validate** 

maven 打包：mvn package

只打jar包：mvn jar:jar

生成源码jar包：mvn source:jar

产生应用需要的任何额外的源代码：mvn generate-sources

**编译源代码： mvn compile**

编译测试代码：mvn test-compile

**运行测试：mvn test**

**运行检查：mvn verify**

清理maven项目：mvn clean

生成eclipse项目：mvn eclipse:eclipse

清理eclipse配置：mvn eclipse:clean

生成idea项目：mvn idea:idea

**安装项目到本地仓库：mvn install**

发布项目到远程仓库：mvn:deploy

在集成测试可以运行的环境中处理和发布包：mvn integration-test

显示maven依赖树：mvn dependency:tree

显示maven依赖列表：mvn dependency:list

下载依赖包的源码：mvn dependency:sources

安装本地jar到本地仓库：mvn install:install-file -DgroupId=packageName -DartifactId=projectName -Dversion=version -Dpackaging=jar -Dfile=path

 

## web项目相关命令

启动tomcat：mvn tomcat:run

启动jetty：mvn jetty:run

运行打包部署：mvn tomcat:deploy

撤销部署：mvn tomcat:undeploy

启动web应用：mvn tomcat:start

停止web应用：mvn tomcat:stop

重新部署：mvn tomcat:redeploy

部署展开的war文件：mvn war:exploded tomcat:exploded 


## 配置文件
- pom.xml
`POM( Project Object Model，项目对象模型 ) 是 Maven 工程的基本工作单元，是一个XML文件，包含了项目的基本信息，用于描述项目如何构建，声明项目依赖，等等。`

- settings.xml的作用
- 它是用来设置Maven参数的配置文件。并且，settings.xml是Maven的全局配置文件。settings.xml中包含类似本地仓库、远程仓库和联网使用的代理信息等配置。

- settings.xml文件位置
- settings.xml文件一般存在于Maven的安装目录的conf子目录下面，或者是用户目录的.m2子目录下面。