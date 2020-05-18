FROM ubuntu:18.04

MAINTAINER The UbuntuOS Project <dongfeng@baicells.com>

ENV container docker
ENV LC_ALL C
ENV DEBIAN_FRONTEND noninteractive

COPY mysql-apt-config_0.8.15-1_all.deb /tmp

RUN sed -i 's/# deb/deb/g' /etc/apt/sources.list

RUN apt-get update -yq \
    && apt-get install -yq apt-utils \
    && apt-get install -yq lsb-release \
    && apt-get install -yq gnupg \
    && apt-get install -yq wget \
    && dpkg -i /tmp/mysql-apt-config_0.8.15-1_all.deb \
    && apt-get update -yq \
    && apt-get install -yq mysql-server \
    && apt-get install -yq ca-certificates \
    && apt-get install -yq bash-completion \
    && apt-get install -yq iproute2 iputils-ping \
    && apt-get install -yq systemd systemd-sysv \
    && apt-get install -yq apache2 \
    && apt-get install -yq php7.2 \
    && apt-get install -yq phpmyadmin \
    && ln -s /usr/share/phpmyadmin /var/www/html/phpmyadmin \
    && apt-get clean \
    && apt-get autoclean \
    && apt-get autoremove \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

RUN systemctl restart apache2 \
    && systemctl restart mysql

RUN cd /lib/systemd/system/sysinit.target.wants/ \
    && ls | grep -v systemd-tmpfiles-setup | xargs rm -f $1

RUN rm -f /lib/systemd/system/multi-user.target.wants/* \
    /etc/systemd/system/*.wants/* \
    /lib/systemd/system/local-fs.target.wants/* \
    /lib/systemd/system/sockets.target.wants/*udev* \
    /lib/systemd/system/sockets.target.wants/*initctl* \
    /lib/systemd/system/basic.target.wants/* \
    /lib/systemd/system/anaconda.target.wants/* \
    /lib/systemd/system/plymouth* \
    /lib/systemd/system/systemd-update-utmp*

VOLUME [ "/sys/fs/cgroup" ]

CMD ["/lib/systemd/systemd"]
