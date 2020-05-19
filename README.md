# lamp-docker-build

- 运行 sudo docker build -t lamp:1.0 .
- 运行 sudo docker run -d  --privileged=true -v /sys/fs/cgroup:/sys/fs/cgroup -p 8080:80 --name=lamp lamp:1.0
- 运行 sudo docker exec -it lamp /bin/bash
- 进入容器运行 
  - systemctl start apache2
  - systemctl start mysql
  - mysql
  - CREATE database MDB;
  - ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY '123';
  - FLUSH privileges;
  - exit
  - mysql -uroot -p123 MDB < /var/www/html/MDB.sql
  - 
