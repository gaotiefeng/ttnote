## 安装composer

```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```
## 全局配置
```
mv composer.phar /usr/local/bin/composer
```

## Composer 配置国内镜像

```
#阿里云
composer config -g repo.packagist composer https://mirrors.aliyun.com/composer/
#取消
composer config -g --unset repos.packagist
#项目修改
composer config repo.packagist composer https://mirrors.aliyun.com/composer/
# 华为云
composer config -g repo.packagist composer https://repo.huaweicloud.com/repository/php
# laravel学院
composer config -g repo.packagist composer https://packagist.laravel-china.org
# default
composer config -g repo.packagist composer https://packagist.org
```

###### composer install
composer  killed 
```
free -m
mkdir -p /var/_swap_
cd /var/_swap_
#Here, 1M * 2000 ~= 2GB of swap memory
dd if=/dev/zero of=swapfile bs=1M count=2000
mkswap swapfile
swapon swapfile
echo “/var/_swap_/swapfile none swap sw 0 0” >> /etc/fstab
#cat /proc/meminfo
free -m
```