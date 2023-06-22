# zabbix-widget-html
Simple Widget that lets you put arbitrary HTML code on a Zabbix Dashboard

Tested on Zabbix 6.4.0

## Install
The `html_wiget` directory needs to go into the `modules` directory of your zabbix web frontend server:
```
wget https://github.com/shrank/zabbix-widget-html/archive/refs/tags/v1.0.zip
unzip v1.0.zip
cp -r zabbix-widget-html-1.0/html_widget /usr/share/zabbix/modules/html_widget
```
Rescan and enable the module in the web interface(`Administrator->General->Modules`)