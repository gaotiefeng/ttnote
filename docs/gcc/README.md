- 升级GCC
```yum install centos-release-scl
yum install devtoolset-6
scl enable devtoolset-6 bash
vim /etc/profile 加上 scl enable devtoolset-6 bash
gcc -v
```