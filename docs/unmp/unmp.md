## ubuntu

`apt 是ubuntu 高级软件包 apt-get apt-cache`
## 安装php
```bash
sudo apt-get update
sudo apt install software-properties-common
//最新的php构建包
sudo add-apt-repository ppa:ondrej/php
sudo apt install php7.4
php -m

sudo apt install php7.4-mysql
sudo apt install php7.4-fpm
/etc/php/7.4/fpm/pool.d/www.conf->listen 9090
sudo service php7.4-fpm start
```

## pecl
```bash
sudo apt install php-pear
pecl install redis
```

- 工具
`sudo apt-get net-tool`

## 安装nginx
- window10子系统
- 端口问题
- 权限问题
```
sudo apt-get nginx
sudo service nginx start
```