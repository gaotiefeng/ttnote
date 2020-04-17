
## linux命令
- `d 文件类型`
- `r-读-4` `w-写-2` `x-执行-1`

## 进程操作


## 内存操作


## 磁盘操作


## 文件操作
```
chown -R 777 文件名
```

- 使用 `netstat -an | grep 端口`，查看端口是否已经被打开处于 Listening 状态

## ab 压测

```bash
ab -n 800 -c 800 http://go.tfuu.cn/user/list/
```

[!ab](ab.jpeg)

```
Complete requests 完成请求数
Failed requests 失败请求数
Requests per second 吞吐量-每秒请求数
```