## 搜索
- _index = baijiao
- _type = bj
- _id   = 2

### 索引-类型-id
- `http://localhost:9200/baijiao/bj/2`

### 全部查询
- `http://localhost:9200/baijiao/_search`

### 数字字段精确匹配
```
{
	"query":{
		"constant_score":{
			"filter":{
				"term":{"test":16}
			}
		}
	}
}
```

- terms
```
{
	"query":{
		"terms":{
			"title":["tests", "dance"]
		}
	}
}
```

### range 范围查询
```
GET /_search
{
	"query":{
		"range":{
			"test":{
				"gte":"126",
				"lte":"167",
			}
		}
	}
}
```

- 前缀查询
```
GET /_search

{
	"query":{
		"prefix":{
			"title":"tes"
		}
	}
}
```

### 通配符查询
> ?匹配一个 *匹配多个

```
GET /_search

{
	"query":{
		"wildcard":{
			"title":"dan?"
		}
	}
}
```

- 正则匹配 regexp
> 查找test字段带有4位数字

```
{
	"query":{
		"regexp":{
			"test":"[0-9]{2}"
		}
	}
}
```

### 模糊查询(fuzzy query)
```
{
	"query":{
		"fuzzy":{
			"content":"test"
		}
	}
}
```

### 复合查询

属性| 作用|
----  |  ----
must	| 必须匹配，相当于SQL中的AND
should	| 可以匹配，相当于SQL中的OR
must_not|	必须不匹配
filter  |	 和must一样，但是不评分