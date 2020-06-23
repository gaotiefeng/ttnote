## ubuntu
```bash
uname -a //内核
cat /etc/issue
cat /etc/lsb-release
cat /pro/version
```

`apt 是ubuntu 高级软件包 apt-get apt-cache`
## 安装php
```bash
sudo apt-get update
sudo apt install software-properties-common
//最新的php构建包
sudo add-apt-repository ppa:ondrej/php
sudo apt install php7.4 php7.4-dev php7.4-mysql
php -m

sudo apt install php7.4-mysql
sudo apt install php7.4-fpm
sudo apt -y install php7.4-curl php7.4-json php7.4-mbstring php7.4-xml php7.4-intl php7.4-gd php7.4-bz2 php7.4-bcmath
//等等......
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

## 安装mysql
```bash
sudo apt-get install mysql-server
sudo service mysql start
sudo netstat -tap | grep mysql
mysql -u root -p

```

## 安装redis
```bash
sudo pecl install redis
```

## 安装node/npm/bower
```bash
sudo apt install node
sudo apt install npm
npm install -g bower
```

## pip
```bash
sudo apt-get install python3-pip
```