证件照排版工具
=========
 fork from : http://www.sandcomp.com/blog/sandphoto/

 针对部署到iis上做了一些修改。

 - php在iis上的配置，看wiz笔记中的《DokuWiki在windows平台下的安装配置说明-20151215》
 - 注意：`php.ini`中的`extension=gd2`需要取消注释。
 - 注意：修改`php.ini`后需要重启整个web server。