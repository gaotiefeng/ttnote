## PostgreSQL

- PostgreSQL 是一个自由的对象-关系数据库服务器(数据库管理系统)，它在灵活的 BSD-风格许可证下发行。它提供了相对其他开放源代码数据库系统(比如 MySQL 和 Firebird)，和对专有系统比如 Oracle、Sybase、IBM 的 DB2 和 Microsoft SQL Server的一种选择。

- PostgreSQL和MySQL比较，它更加庞大一点，因为它是用来替代Oracle而设计的。所以在企业应用中采用PostgreSQL是一个明智的选择。

- MySQL被Oracle收购之后正在逐步的封闭（自MySQL 5.5.31以后的所有版本将不再遵循GPL协议），鉴于此，将来我们也许会选择PostgreSQL而不是MySQL作为项目的后端数据库。


```
CREATE TABLE userinfo
(
	uid serial NOT NULL,
	username character varying(100) NOT NULL,
	department character varying(500) NOT NULL,
	Created date,
	CONSTRAINT userinfo_pkey PRIMARY KEY (uid)
)
WITH (OIDS=FALSE);

CREATE TABLE userdetail
(
	uid integer,
	intro character varying(100),
	profile character varying(100)
)
WITH(OIDS=FALSE);
```