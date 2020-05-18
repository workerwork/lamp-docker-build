# lamp-docker-build

- 运行 sudo docker build -t lamp:1.0 .
- 运行 sudo docker run -d  --privileged=true -v /sys/fs/cgroup:/sys/fs/cgroup -p 8080:80 -p 3306:3306 --name=lamp lamp:1.0
