## 安装

- tomact [http://tomcat.apache.org/download-80.cgi](http://tomcat.apache.org/download-80.cgi)

```
wget http://mirror.bit.edu.cn/apache/tomcat/tomcat-8/v8.5.47/bin/apache-tomcat-8.5.47.tar.gz

tar -zxv -f apache-tomcat-8.5.47.tar.gz 

pwd

#检查是否安装
/software/apache-tomcat-8.5.47/bin/startup.sh
```

- 加入服务

```
vim /etc/rc.d/init.d/tomcat
```

- sh


```
#!/bin/bash
# /etc/rc.d/init.d/tomcat
# init script for tomcat precesses
# processname: tomcat
# description: tomcat is a j2se server
# chkconfig: 2345 86 16
# description: Start up the Tomcat servlet engine.

if [ -f /etc/init.d/functions ]; then
. /etc/init.d/functions
elif [ -f /etc/rc.d/init.d/functions ]; then
. /etc/rc.d/init.d/functions
else
echo -e "\atomcat: unable to locate functions lib. Cannot continue."
exit -1
fi
RETVAL=$?
CATALINA_HOME="/usr/local/kencery/tomcat"   #tomcat安装目录，你安装在什么目录下就复制什么目录
case "$1" in
start)
if [ -f $CATALINA_HOME/bin/startup.sh ];
then
echo $"Starting Tomcat"
$CATALINA_HOME/bin/startup.sh
fi
;;
stop)
if [ -f $CATALINA_HOME/bin/shutdown.sh ];
then
echo $"Stopping Tomcat"
$CATALINA_HOME/bin/shutdown.sh
fi
;;
*)
echo $"Usage: $0 {start|stop}"
exit 1
;;
esac
exit $RETVAL

Linux
```


>chmod 755 /etc/rc.d/init.d/tomcat

- 配置文件 echo $JAVA_HOME

```
vim /software/apache-tomcat-8.5.47/bin/catalina.sh
export JAVA_HOME = /usr/lib/jvm/java-1.8.0-openjdk-1.8.0.161-0.b14.el7_4.x86_64     
export CATALINA_HOME=/software/apache-tomcat-8.5.47                                 
export CATALINA_BASE=/software/apache-tomcat-8.5.47                                 
export CATALINA_TMPDIR=/software/apache-tomcat-8.5.47/temp 
```

- 设置开机启动

```
vim /etc/rc.d/rc.local
export JAVA_HOME=/usr/lib/jvm/java-1.8.0-openjdk-1.8.0.161-0.b14.el7_4.x86_64
export CLASSPATH=.:$JAVA_HOME/jre/lib/rt.jar:$JAVA_HOME/lib/dt.jar:$JAVA_HOME/lib/tools.jar
export PATH=$PATH:$JAVA_HOME/bin
export CATALINA_HOME=/software/apache-tomcat-8.5.47/
```



>tomcat默认的发布web项目的目录是：webapps
