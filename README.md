# php-nginx-mysql-compose
docker-compose php + nginx + mysql

## 安装docker & docker-compose

```sh
echo "install docker and compose"

yum install -y yum-utils device-mapper-persistent-data lvm2
yum-config-manager --add-repo http://mirrors.aliyun.com/docker-ce/linux/centos/docker-ce.repo
yum makecache 

echo "-------------- install docker ----"
yum -y install docker-ce
yum -y install python3

systemctl start docker
docker run hello-world
#yum -y install python-pip
#curl https://bootstrap.pypa.io/get-pip.py -o get-pip.py
#python get-pip.py
yum install python3
pip3 install docker-compose
```

## 下载本项目

```sh
git clone --depth=1 https://gitee.com/yangtf/docker-compose_nginx_php_mysql.git web
cd web
docker-compose up 
# docker-compose up -d
```



