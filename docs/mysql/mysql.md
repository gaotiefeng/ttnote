##mysql

###安装包处理
##下载mysql包
  ```
  https://dev.mysql.com/downloads/mysql/mysql-5.7.26-linux-glibc2.12-x86_64.tar.gz
  ```
###解压包
  `tar -zxvf mysql-5.7.26-linux-glibc2.12-x86_64.tar.gz`
  
  `mv mysql-5.7.26-linux-glibc2.12-x86_64.tar.gz /usr/local/mysql`
###添加my.cnf
  ```
  [mysqld]
   basedir=/usr/local/mysql
   datadir=/usr/local/mysql/data
   port = 3306
   socket=/tmp/mysql.sock
   symbolic-links=0
   log-error=/var/log/mysqld.log
   pid-file=/tmp/mysqld/mysqld.pid
   sql_mode='STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION'
   [client]
   default-character-set=utf8
   [mysql]
   default-character-set=utf8
   [mysqld]
   log-bin=mysql-bin 
   binlog-format=ROW 
   server_id=1 
   max_connections=1000
   init_connect='SET collation_connection = utf8_unicode_ci'
   init_connect='SET NAMES utf8'
   character-set-server=utf8
   collation-server=utf8_unicode_ci
   skip-character-set-client-handshake
   ```
   ###创建mysql组和mysql用户
   ```
   groupadd mysql
   useradd -r -g mysql mysql
   chown -R mysql:mysql /usr/local/mysql
   touch /tmp/mysql.sock
   chown mysql:mysql /tmp/mysql.sock
   chmod 755 /tmp/mysql.sock
   /tmp/mysqld/mysqld.pid
   chown mysql:mysql /tmp/mysqld/mysqld.pid
   chmod 755 /tmp/mysqld/mysqld.pid
   touch /var/log/mysqld.log
   ```
   ###初始化数据库:
   `./mysqld --initialize --user=mysql --basedir=/usr/local/mysql--datadir=/usr/local/mysql/data`
   ##安全启动:
   `./mysqld_safe --user=mysql &`
   ##问题
   `[ERROR] Could not open file '/var/log/mysqld.log' for error logging: Permission denied`
   ###日志文件设置权限777
   ### 开机启动服务
   `cp -a /usr/local/mysql/support-files/mysql.server /etc/init.d/mysql`
   `chkconfig --list mysql`
   `chkconfig --add mysql`
   ###创建快捷方式
   `ln -s /usr/local/mysql/bin/mysql /usr/bin`
   ###修改密码
   `set password=password("tf2019");`
   `UPDATE user SET authentication_string=PASSWORD('tf2019') where USER='root';`
   ###远程访问权限
   `grant all privileges on *.* to 'root'@'%' identified by 'tf2019';`
   `flush privileges;`
   `systemctl stop firewalld.service`            
   ###停止firewall