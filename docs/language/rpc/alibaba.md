## spring cloud alibaba

## zookeeper
    一个为分布式应用提供一致性服务的软件，提供的功能包括：配置维护、域名服务、分布式同步、组服务等。

### 原理
    ZooKeeper是以Fast Paxos算法为基础的，Paxos 算法存在活锁的问题，即当有多个proposer交错提交时，有可能互相排斥导致没有一个proposer能提交成功，而Fast Paxos做了一些优化，通过选举产生一个leader (领导者)，只有leader才能提交proposer，具体算法可见Fast Paxos。因此，要想弄懂ZooKeeper首先得对Fast Paxos有所了解。
    ZooKeeper的基本运转流程：
    1、选举Leader。
    2、同步数据。
    3、选举Leader过程中算法有很多，但要达到的选举标准是一致的。
    4、Leader要具有最高的执行ID，类似root权限。
    5、集群中大多数的机器得到响应并接受选出的Leader。

## dubbo 开源分布式服务框架
    应用可通过高性能的 RPC 实现服务的输出和输入功能

### 核心部件
    Remoting: 网络通信框架，实现了 sync-over-async 和 request-response 消息机制.
    RPC: 一个远程过程调用的抽象，支持负载均衡、容灾和集群功能
    Registry: 服务目录框架用于服务的注册和服务事件发布和订阅

### 原理
    Provider暴露服务方称之为“服务提供者”。
    Consumer调用远程服务方称之为“服务消费者”。
    Registry服务注册与发现的中心目录服务称之为“服务注册中心”。
    Monitor统计服务的调用次数和调用时间的日志服务称之为“服务监控中心”。
    (1) 连通性：
    注册中心负责服务地址的注册与查找，相当于目录服务，服务提供者和消费者只在启动时与注册中心交互，注册中心不转发请求，压力较小
    监控中心负责统计各服务调用次数，调用时间等，统计先在内存汇总后每分钟一次发送到监控中心服务器，并以报表展示
    服务提供者向注册中心注册其提供的服务，并汇报调用时间到监控中心，此时间不包含网络开销
    服务消费者向注册中心获取服务提供者地址列表，并根据负载算法直接调用提供者，同时汇报调用时间到监控中心，此时间包含网络开销
    注册中心，服务提供者，服务消费者三者之间均为长连接，监控中心除外
    注册中心通过长连接感知服务提供者的存在，服务提供者宕机，注册中心将立即推送事件通知消费者
    注册中心和监控中心全部宕机，不影响已运行的提供者和消费者，消费者在本地缓存了提供者列表
    注册中心和监控中心都是可选的，服务消费者可以直连服务提供者
    (2) 健壮性：
    监控中心宕掉不影响使用，只是丢失部分采样数据
    数据库宕掉后，注册中心仍能通过缓存提供服务列表查询，但不能注册新服务
    注册中心对等集群，任意一台宕掉后，将自动切换到另一台
    注册中心全部宕掉后，服务提供者和服务消费者仍能通过本地缓存通讯
    服务提供者无状态，任意一台宕掉后，不影响使用
    服务提供者全部宕掉后，服务消费者应用将无法使用，并无限次重连等待服务提供者恢复
    (3) 伸缩性：
    注册中心为对等集群，可动态增加机器部署实例，所有客户端将自动发现新的注册中心
    服务提供者无状态，可动态增加机器部署实例，注册中心将推送新的服务提供者信息给消费者

## nacos 注册中心
    - 注册中心解决了服务发现的问题
    -  在没有注册中心时候，服务间调用需要知道被调方的地址或者代理地址。
    -  当服务更换部署地址，就不得不修改调用当中指定的地址或者修改代理配置。
    -  而有了注册中心之后，每个服务在调用别人的时候只需要知道服务名称就好，继续地址都会通过注册中心同步过来。
  ### 安装nacos
  - [https://gitee.com/mirrors/Nacos](https://gitee.com/mirrors/Nacos)
    - sql导入
    - 配置文件修改 sql修改
    - java8环境安装
    - sh startup.sh -m standalone （单机启动）
    - http://localhost:8848/nacos/index.html#/login
```sh
## unbutun
## https://www.oracle.com/ 下载jdk-8u291-linux-x64.tar.gz
## 环境配置
## 加载配置
sudo update-alternatives --install /usr/bin/java java /usr/lib/jvm/jdk1.8.0_291/bin/java 100
## 选择配置
update-alternatives --config java
```
  #### 问题
       1. HmacSHA256算法不可用（openjdk 改为 oraclejdk）
        `caused: Unable to obtain JCA MAC algorithm 'HmacSHA256': Algorithm HmacSHA256 not available;caused: Algorithm HmacSHA256 not available;`
       2. bash -f ./startup.sh -m standalone

## apollo [阿波罗](https://ctripcorp.github.io/apollo/#/zh/usage/apollo-user-guide)

