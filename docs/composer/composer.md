__**安装composer**

```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```
##全局配置
```
mv composer.phar /usr/local/bin/composer
```

##Composer 配置国内镜像

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

composer