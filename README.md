# ansible-lamp

A quick playbook that install and configure a web server and some mariadb server. Works with ansible-core and with ansible tower on RHEL 7.

## how to use

- Replace hostnames in inventory file. Put the web server in the [web] group, and the database systems in the [db] group. If necessary update the templates in roles/*/templates.

- Run : `ansible-playbook -i inventory main.yml`
