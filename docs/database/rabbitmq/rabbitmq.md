###### docker 安装
```
docker run -d --restart=always --name rabbitmq -p 4369:4369 -p 5672:5672 -p 15672:15672 -p 25672:25672 -v /opt/lib/rabbitmq:/var/lib/rabbitmq rabbitmq:management-alpine
```