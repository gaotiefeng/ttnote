######安裝swoole扩展
```
git clone https://github.com/swoole/swoole-src.git
cd swoole-src
phpize
./configure
make && make install
extension=your/full/path/swoole.so
```