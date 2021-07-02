### 官网下载地址

https://nodejs.org/en/download/

### 进行安装目录：cd /opt/software

### 下载二进制包：
```
yum install -y wget

wget https://nodejs.org/dist/v12.18.2/node-v12.18.2-linux-x64.tar.xz 
```

### 解压
```
tar xf node-v12.18.2-linux-x64.tar.xz

# cd node-v10.9.0-linux-x64/                  // 进入解压目录
# ./bin/node -v

rm -rf node-v12.18.2-linux-x64.tar.xz
```
 

### 编辑环境变量文件

```
vi /etc/profile

export NODE_HOME=/opt/software/node-v10.15.1-linux-x64

export PATH=$PATH:${NODE_HOME}/bin

 ```

### 保存环境变量

```
source /etc/profile

node -v

npm -v
```

### 因为国内墙的原因，可以使用cnpm代替npm

```
npm install -g cnpm --registry=https://registry.npm.taobao.org
```