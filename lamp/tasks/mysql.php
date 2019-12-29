---
- name: install mariadb
  yum:
    name: mariadb
    state: latest
- name: install mariadb server
  yum: 
    name: mariadb-server
    state: latest
- name: install php-mysql
  yum:
    name: phpmysql
    state: latest
- name: start mariadb
  service:
    name: mariadb
    state: started

