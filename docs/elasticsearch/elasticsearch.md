######elasticsearch
```
docker run -d --restart always --name elasticsearch -p 9200:9200 -p 9300:9300 \
-v /mnt/elasticsearch/data:/usr/share/elasticsearch/data -e ES_JAVA_OPTS="-Xms512m -Xmx512m" \
-e "discovery.type=single-node" elasticsearch:5-alpine
```
### kibana
```
docker pull kibana:5.6.11

docker images

docker run --name kibana5.6.11 -e ELASTICSEARCH_URL=http://192.168.41.99:9200 -p 5601:5601 -d 388661dcd03e

```
########http://192.168.1.1:5601
### 安装es  官网下载
```
wget https://artifacts.elastic.co/downloads/elasticsearch/elasticsearch-7.2.0-linux-x86_64.tar.gz
```
######运行
```
cd elasticsearch &&
bin/elasticsearch
```
######问题//不能用root用户、给用户设置权限
```
Exception in thread "main" java.nio.file.AccessDeniedException: /usr/local/elasticsearch/config/jvm.options
	at java.base/sun.nio.fs.UnixException.translateToIOException(UnixException.java:90)
	at java.base/sun.nio.fs.UnixException.rethrowAsIOException(UnixException.java:111)
	at java.base/sun.nio.fs.UnixException.rethrowAsIOException(UnixException.java:116)
	at java.base/sun.nio.fs.UnixFileSystemProvider.newByteChannel(UnixFileSystemProvider.java:219)
	at java.base/java.nio.file.Files.newByteChannel(Files.java:373)
	at java.base/java.nio.file.Files.newByteChannel(Files.java:424)
	at java.base/java.nio.file.spi.FileSystemProvider.newInputStream(FileSystemProvider.java:420)
	at java.base/java.nio.file.Files.newInputStream(Files.java:158)
	at org.elasticsearch.tools.launchers.JvmOptionsParser.main(JvmOptionsParser.java:61)
```
###配置
```
vim /etc/elasticsearch/elasticsearch.yml
http.port: 9200
network.host: 0.0.0.0
```
####安装kibana//创建etc/yum.repos.d/kibana.repo
```
[kibana-7.x]
name=Kibana repository for 7.x packages
baseurl=https://artifacts.elastic.co/packages/7.x/yum
gpgcheck=1
gpgkey=https://artifacts.elastic.co/GPG-KEY-elasticsearch
enabled=1
autorefresh=1
type=rpm-md
```
```
yum makecache
sudo yum install kibana
vi /etc/sysctl.conf
fs.file-max=655350
vm.max_map_count=655360
vi /etc/security/limits.conf
* soft nofile 655350
* hard nofile 655350
server.port: 5602
server.host: "0.0.0.0"
```
