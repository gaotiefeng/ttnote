
## glibc

>简介
glibc是GNU发布的libc库，即c运行库。
glibc是linux系统中最底层的api，
几乎其它任何运行库都会依赖于glibc。
glibc除了封装linux操作系统所提供的系统服务外，
它本身也提供了许多其它一些必要功能服务的实现。
由于 glibc 囊括了几乎所有的 UNIX 通行的标准
，可以想见其内容包罗万象。而就像其他的 UNIX 系统一样，
其内含的档案群分散于系统的树状目录结构中，
像一个支架一般撑起整个操作系统。

```linux
$ strings /lib64/libc.so.6 |grep GLIBC_
//版本
$ ldd --version
```