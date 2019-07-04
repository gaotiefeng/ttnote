######安裝swoole扩展
```
git clone https://github.com/swoole/swoole-src.git
cd swoole-src
phpize
./configure --enable-openssl --enable-sockets
           --enable-openssl or --with-openssl-dir=DIR
           --enable-sockets
           --enable-http2
           --enable-mysqlnd
make && make install
extension=your/full/path/swoole.so
```