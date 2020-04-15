supervisor

进程管理工具(Supervisor) 
>Supervisor是用Python开发的一个client/server服务，是Linux/Unix系统下的一个进程管理工具，不支持Windows系统。它可以很方便的监听、启动、停止、重启一个或多个进程。用Supervisor管理的进程，当一个进程意外被杀死，supervisort监听到进程死后，会自动将它重新拉起，很方便的做到进程自动恢复的功能，不再需要自己写shell脚本来控制。

## 安装
```linux
yum install supervisor

```

<div style="color: blue">配置文件</div>

```linux
/etc/supervisord.conf
```

>/etc/supervisor/conf.d/
<div style="color: blue">conf文件</div>

```linux
[program:MGToastServer] ;程序名称，终端控制时需要的标识
command=dotnet MGToastServer.dll ; 运行程序的命令
directory=/root/文档/toastServer/ ; 命令执行的目录
autorestart=true ; 程序意外退出是否自动重启
stderr_logfile=/var/log/MGToastServer.err.log ; 错误日志文件
stdout_logfile=/var/log/MGToastServer.out.log ; 输出日志文件
environment=ASPNETCORE_ENVIRONMENT=Production ; 进程环境变量
user=root ; 进程执行的用户身份
stopsignal=INT
```

## go beego
```
# 新建一个应用并设置一个名称，这里设置为 beego
[program:beego]
# 设置命令在指定的目录内执行
directory=/www/go/beego
# 这里为您要管理的项目的启动命令
command=go run main.go
# 以哪个用户来运行该进程
user=root
# supervisor 启动时自动该应用
autostart=true
# 进程退出后自动重启进程
autorestart=true
# 进程持续运行多久才认为是启动成功
startsecs=1
# 重试次数
startretries=3
# stderr 日志输出位置
stderr_logfile=/www/go/beego/runtime/stderr.log
# stdout 日志输出位置
stdout_logfile=/www/go/beego/runtime/stdout.log
```

## 启动supervisor
```
supervisord -c /etc/supervisord.d/supervisord.conf
```

## 命令
<div style="color: blue">命令</div>

```linux
supervisorctl restart <application name> ;重启指定应用
supervisorctl stop <application name> ;停止指定应用
supervisorctl start <application name> ;启动指定应用
supervisorctl restart all ;重启所有应用
supervisorctl stop all ;停止所有应用
supervisorctl start all ;启动所有应用
supervisorctl update ;重新加载配置文件
supervisorctl reload ;重新启动所有程序
```