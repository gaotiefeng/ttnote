## php-fpm

## php-fpm监控
_fpm.conf配置文件_
```
pm.status_path = /status
systemctl restart php-fpm
```

_nginx配置_
```
server {
        listen 9000;
        location ~ /status {
            fastcgi_pass 127.0.0.1:9000;
            fastcgi_param  SCRIPT_FILENAME  $document_root$fastcgi_script_name;
            include fastcgi_params;
        }
}
systemctl restart nginx
```


```
pool:                 www
process manager:      dynamic
start time:           06/Aug/2020:09:12:57 +0800
start since:          2
accepted conn:        1
listen queue:         0
max listen queue:     0
listen queue len:     128
idle processes:       4
active processes:     1
total processes:      5
max active processes: 1
max children reached: 0
slow requests:        0
```