###安装redis
```
yum --enablerepo=remi install redis
vim /etc/redis.conf
requirepass yourpassword
service redis start
```