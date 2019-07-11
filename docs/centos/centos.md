######安装桌面
```
yum groupinstall "X Window System"
yum grouplist
yum groupinstall "GNOME Desktop"
vmware-hgfsclient
sudo vmware-config-tools.pl 
```
####设置静态IP
```
ONBOOT="yes"
IPADDR="192.168.41.100"
PREFIX="24"
GATEWAY="192.168.41.2"
IPV6_PRIVACY="no"
DNS1="202.96.209.133"
DNS2="114.114.114.114"
```