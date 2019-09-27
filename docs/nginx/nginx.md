#### 换源Remi
```
sudo rpm --import https://rpms.remirepo.net/RPM-GPG-KEY-remi
sudo rpm -ivh http://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm
sudo rpm -ivh https://mirrors.tuna.tsinghua.edu.cn/remi/enterprise/remi-release-7.rpm
```
***安装 nginx***
>替换“centos” 为 “rhel” 或 “OS”, depending on the distribution used, 替换 “OSRELEASE” 为 “6” 或 “7”, for 6.x or 7.x versions, respectively.
```
$ vim /etc/yum.repos.d/nginx.repo
[nginx]
name=nginx repo
baseurl=http://nginx.org/packages/centos/8/$basearch/
gpgcheck=0
enabled=1
```
## 安装
```
yum install nginx
yum install nginx-all-modules
service nginx start
```
## 开机自启动
```angular2
systemctl enable nginx.service
```
## 安装mariadb
```
yum --enablerepo=remi install mariadb-server
rpm -q mariadb mariadb-server
```
### 启动mariadb
```
systemctl start|stop mariadb（service mariadb start|stop）
mysql_secure_installation
```
## 安装php
```
yum --enablerepo=remi install php72 php72-php-devel php72-php-fpm php72-php-gd php72-php-pdo php72-php-mysql php72-php-xml php72-php-mbstring php72-php-phalcon php72-php-zip php72-php-opcache
yum --enablerepo=remi install php72-php-redis php72-php-pecl-swoole4  php72-php-process php72-php-pecl-mongodb php72-php-bcmath

ln -s /usr/bin/php72 /usr/local/bin/php && \
ln -s /opt/remi/php72/root/bin/phpize /usr/local/bin/phpize && \
ln -s /opt/remi/php72/root/bin/php-config /usr/local/bin/php-config && \
ln -s /opt/remi/php72/root/sbin/php-fpm /usr/local/sbin/php-fpm
```
### fpm修改
```
vim /etc/opt/remi/php72/php-fpm.d/www.conf
user = nginx
group = nginx

vim /etc/opt/remi/php72/php-fpm.conf
daemonize = yes
pid = /var/opt/remi/php72/run/php-fpm/php-fpm.pid
```
### 启动
```
systemctl start php72-php-fpm.service
```
## 安裝swoole扩展
```
git clone https://github.com/swoole/swoole-src.git
cd swoole-src
phpize
./configure --enable-openssl --enable-sockets
           --enable-openssl or --with-openssl-dir=DIR
           --enable-sockets
           --enable-http2
           --enable-mysqlnd
make && make install
extension=your/full/path/swoole.so
```