## docker安装
- [http://get.daocloud.io/#install-docker](http://get.daocloud.io/#install-docker)安装docker

```
curl -sSL https://get.daocloud.io/docker | sh
```

- <div style="color: chocolate">拖取镜像/载入镜像</div>
 
```
docker pull limingxinleo/rbac-api
docker pull limingxinleo/rbac-dashboard
```
- <div style="color: chocolate"> 列出镜像列表</div>
 
```
docker images
```

- <div style="color: chocolate">生成镜像</div>

```
docker build . -t 
```
- <div style="color: chocolate">在docker容器中运行项目</div>

-  [-d 让容器后台运行 -p 将容器内部使用的网络端口映射到我们使用的主机上]
-  -v 宿主机目录：容器目录  --privileged=true  权限问题  目录777

```
docker run -d -p 9601:9501 rbac
```

- 进入容器bash

```
docker exec -it c1dc8b498447 bash
```

- 运行容器

```
docker restart|stop|start c1dc8b498447
```

- 查看log[ID|名字]

```
docker logs -f c1dc8b498447
```
- 查看容器进程[ID]

```
docker top c1dc8b498447
```

- 查看容器[-a 查看所有 -l最后创建的容器]

```
docker ps 
```

- 删除容器[-f 强制][ID]

```
docker rm 
```

## docker 配置同一网
```
docker network create \
--subnet 10.0.0.0/24 \
--opt encrypted \
--attachable \
default-network
```
```
docker run -d --restart always --name elasticsearch --net default-network  -p 9200:9200 -p 9300:9300 \
-v /Users/gaotiefeng/DockerFile/elasticsearch/data:/usr/share/elasticsearch/data -e ES_JAVA_OPTS="-Xms512m -Xmx512m" \
-e "discovery.type=single-node" elasticsearch:5-alpine

```

```
docker run --name kibana5.6.16 --net default-network -e ELASTICSEARCH_URL=http://elasticsearch:9200 -p 5601:5601 -d kibana:5.6.16  
```
## 查看正在运行的容器
```
docker ps --format "table {{.ID}}\t{{.Image}}\t{{.Status}}\t{{.Names}}"
```



