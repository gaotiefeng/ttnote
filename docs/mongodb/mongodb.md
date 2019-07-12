####安装mongodb
```
wget https://fastdl.mongodb.org/linux/mongodb-linux-x86_64-4.0.10.tgz
```
解压进入bin下./mongod    ./mongo  /默认数据库/data/db   
```
mysql
CREATE TABLE users (
    id MEDIUMINT NOT NULL
        AUTO_INCREMENT,
    user_id Varchar(30),
    age Number,
    status char(1),
    PRIMARY KEY (id)
)
mongoDB
db.users.insert( {
    user_id: "abc123",
    age: 55,
    status: "A"
 } )
 db.createCollection("users")//创建集合
 //查找文档
 db.users.find()
 db.users.find().pretty()
```