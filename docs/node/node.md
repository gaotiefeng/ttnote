### 官网下载地址：https://nodejs.org/en/download/


### 进行安装目录：cd /opt/software (如果目录不存在，请先创建目录)

### 下载二进制包：wget https://nodejs.org/dist/v10.15.1/node-v10.15.1-linux-x64.tar.xz (下载地址去官网查询最新的，wget命令如果不存在，请先安装wget：yum install -y wget)

### 解压：tar xvJf node-v10.15.1-linux-x64.tar.xz

### 删除二进制包：rm -rf node-v10.15.1-linux-x64.tar.xz

 

### 编辑环境变量文件：vi /etc/profile，添加内容如下：

```
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