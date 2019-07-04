###docker
- [http://get.daocloud.io/#install-docker](http://get.daocloud.io/#install-docker)
##安装docker
```
curl -sSL https://get.daocloud.io/docker | sh
```
#####拖取镜像/载入镜像
```
docker pull limingxinleo/rbac-api
docker pull limingxinleo/rbac-dashboard
```
#####列出镜像列表
```
docker images
```
#####在docker容器中运行项目
##### [-d 让容器后台运行 -p 将容器内部使用的网络端口映射到我们使用的主机上]
```
docker run -d -p 9601:9501 rbac
```
#####进入容器bash
```
docker exec -it c1dc8b498447 bash
```
##### 运行容器
```
docker restart|stop|start c1dc8b498447
```
#####查看log[ID|名字]
```
docker logs -f c1dc8b498447
```
##### 查看容器进程[ID]
```
docker top c1dc8b498447
```
##### 查看容器[-a 查看所有 -l最后创建的容器]
```
docker ps 
```
##### 删除容器[-f 强制][ID]
```
docker rm 
```
