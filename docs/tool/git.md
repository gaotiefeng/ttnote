# 安装git

## 编译安装git
- [https://github.com/git/git/releases](https://github.com/git/git/releases)


```bash
wget https://github.com/git/git/archive/v2.24.0.tar.gz

yum -y install curl-devel expat-devel gettext-devel openssl-devel zlib-devel gcc perl-ExtUtils-MakeMaker


tar -zxvf v2.24.0.tar.gz

cd git-2.24.0.tar.gz

#编译
make prefix=/usr/local/git all
#安装
make prefix=/usr/local/git install
#环境变量
vim /etc/profile
# 末尾添加
export PATH=$PATH:/usr/local/git/bin
export GIT=/usr/local/git/bin
export PATH=$PATH:${GITWW}
#生效
source /etc/profile
```


## init
```bash
git init 
git remote add origin  git@address.git
```
## add .gitignore
```bash
git rm -r --cached .
git add .
git commit -m 'update .gitignore'
```

## ssh 设置user.name user.email
```bash
$ git config --global user.name "gaotiefeng"
$ git config --global user.email "1096392101@qq.com"
```

## 生成密钥
```bash
ssh-keygen -t rsa -C "1096392101@qq.com"
```

## 查看公钥
```bash
cd ~/.ssh
cat id_rsa.pub 
```
## git tag
```bash
git tag -a v1.0.9 -m 'version 1.0.9' 

git push origin --tags
```

## git stash
```bash
git stash: 备份当前的工作区的内容，从最近的一次提交中读取相关内容，让工作区保证和上次提交的内容一致。同时，将当前的工作区内容保存到Git栈中。
git stash pop: 从Git栈中读取最近一次保存的内容，恢复工作区的相关内容。由于可能存在多个Stash的内容，所以用栈来管理，pop会从最近的一个stash中读取内容并恢复。
git stash list: 显示Git栈内的所有备份，可以利用这个列表来决定从那个地方恢复。
git stash clear: 清空Git栈。此时使用gitg等图形化工具会发现，原来stash的哪些节点都消失了。
```