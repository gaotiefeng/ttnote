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
## 查看设置
```
composer config -gl
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


`composer install composer  killed 内存不足`


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

```
composer self-update
```

>加载文件

```
#使用 dumpautoload 后会优先加载需要的类并提前返回，不然的话 compoesr 只能去动态读取 psr-4 和 prs-0 的内容，这样大大减少了 IO 操作和深层次的循环，提升部分性能问题
composer dump-atoload -o

composer config secure-http false
```

####### kill php
```
ps -ef|grep php|awk -F ' ' '{print $2}'|xargs kill -9
```