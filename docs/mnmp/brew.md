## brew
```
/usr/bin/ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"
```

```
brew search 
brew list
brew info
sudo brew update
brew -v
brew -h
``` 
## composer
```
brew install composer 

composer config -g repo.packagist composer https://mirrors.aliyun.com/composer/
```
## oh my zsh命令行工具
```
sh -c "$(wget https://raw.githubusercontent.com/robbyrussell/oh-my-zsh/master/tools/install.sh -O -)"

```
## install nginx  
```
brew install nginx
brew services start nginx
127.0.0.1:8080
```
## 配置php-fpm
```
location ~ \.php$ {
root          html;
fastcgi_pass  127.0.0.1:9000;
fastcgi_index  index.php;
fastcgi_param  SCRIPT_FILENAME  /scripts$fastcgi_script_name;
include        fastcgi_params;
}
```

`error_log 修改文件`


## mysql8

```
brew install mysql

brew services start mysql  #启动服务

mysql_secure_installation   #使用安全安装

```
###### 添加用户给%权限
```
CREATE user 'root'@'%' IDENTIFIED BY 'tf2019..';
grant all privileges on *.* to 'root'@'%';
```
###### 密码验证修改
```
alter user 'root'@'%' identified with mysql_native_password by 'Gtf2019.';
```
###### 涮新权限
```
flush privileges;
```
## 安装php
```
brew install php

brew services start php
```
###### php-fpm /usr/local/etc/php/7.3/php-fpm.conf
###### /private/etc/php-fpm.conf  error_log

```
killall php-fpm
sudo php-fpm -D
```


## install redis
```
brew install redis
```

###### pecl install redis

## swoole
```
pecl install swoole
```
###### 卸载扩展
###### 删除php.ini 中的 extension=swoole.so  
```
pecl uninstall swoole
```

###### 编译安装swoole
```
wget https://github.com/swoole/swoole-src/archive/v4.4.7.zip
unzip v4.4.7.zip
cd swoole-src-4.4.7
phpize
./configure --enable-async-redis --enable-mysqlnd --enable-openssl --enable-http2
make
```

###### php-config
```
whereis php #安装路径
which php   #运行
--with-php-config=/usr/bin/php
```

###### 错误
```
fatal error: 'openssl/ssl.h' file not found

使用 --with-openssl-dir 参数指定 openssl 

```


## docker 配置同一网
```bash
docker network create \
--subnet 10.0.0.0/24 \
--opt encrypted \
--attachable \
default-network
```

```bash
docker run -d --restart always --name elasticsearch --net default-network  -p 9200:9200 -p 9300:9300 \
-v /Users/gaotiefeng/DockerFile/elasticsearch/data:/usr/share/elasticsearch/data -e ES_JAVA_OPTS="-Xms512m -Xmx512m" \
-e "discovery.type=single-node" elasticsearch:5-alpine

```

```
docker run --name kibana5.6.16 --net default-network -e ELASTICSEARCH_URL=http://elasticsearch:9200 -p 5601:5601 -d kibana:5.6.16  
```
###### 查看正在运行的容器

```bash
docker ps --format "table {{.ID}}\t{{.Image}}\t{{.Status}}\t{{.Names}}"
```
###### 查看安装路径

```bash
brew --prefix openssl
```

###### 安装yarn

```bash
brew install yarn
```

###### 安装php-protobuf
```
pecl install protobuf
```

## 查看端口
```
netstat -AaLlnW
```