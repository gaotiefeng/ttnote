######在gRPC里，客户端可以直接调用不同机器上的服务应用的方法，就像是本地对象一样，
######所以创建分布式应用和服务就很简单了。
######在很多RPC(Remote Procedure Call Protocol)系统里，
######gRPC是基于定义一个服务，指定一个可以远程调用的带有参数和返回类型的的方法。
######在服务端，服务实现这个接口并且运行gRPC服务处理客户端调用。
######在客户端，有一个stub提供和服务端相同的方法。

###### 安装
```
https://github.com/protocolbuffers/protobuf/releases/tag/v3.6.1

tar zxvf protobuf-all-3.6.1.tar.gz

sudo ./configure

sudo make

sudo make check

sudo make install

protoc --version
```

###### 卸载
```
sudo rm /usr/local/bin/protoc
```

###### php安装protobuf
```
pecl install protobuf
```