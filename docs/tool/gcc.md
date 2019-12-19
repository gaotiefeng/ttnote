## 升级GCC
```yum install centos-release-scl
yum install devtoolset-6
scl enable devtoolset-6 bash
vim /etc/profile 加上 scl enable devtoolset-6 bash
gcc -v
```
## 安装netcat
```
wget https://sourceforge.net/projects/netcat/files/netcat/0.7.1/netcat-0.7.1.tar.gz
tar -zxvf netcat-0.7.1.tar.gz -C /usr/local
cd /usr/local
mv netcat-0.7.1 netcat
cd /usr/local/netcat
./configure
make && make install
```
- 配置
```
vim /etc/profile
# set  netcat path
export NETCAT_HOME=/usr/local/netcat
export PATH=$PATH:$NETCAT_HOME/bin

保存，退出，并使配置生效：
source /etc/profile
nc -help
```
