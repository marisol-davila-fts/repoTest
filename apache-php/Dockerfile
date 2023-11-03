FROM centos:7
#FROM tomcat_test_old:latest

# Install Apache
RUN yum -y update
RUN yum -y install httpd httpd-tools

# Install EPEL Repo
RUN rpm -Uvh https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm \
 && rpm -Uvh http://rpms.remirepo.net/enterprise/remi-release-7.rpm

# Install PHP
RUN yum --enablerepo=remi-php56 -y install php php-bcmath php-cli php-common php-gd php-intl php-ldap php-mbstring \
    php-mysqlnd php-pear php-soap php-xml php-xmlrpc php-zip wget

# Install Fuente    
RUN yum -y install https://downloads.sourceforge.net/project/mscorefonts2/rpms/msttcore-fonts-installer-2.6-1.noarch.rpm

# Update Apache Configuration
RUN sed -E -i -e '/<Directory "\/var\/www\/html">/,/<\/Directory>/s/AllowOverride None/AllowOverride All/' /etc/httpd/conf/httpd.conf
RUN sed -E -i -e 's/DirectoryIndex (.*)$/DirectoryIndex index.php \1/g' /etc/httpd/conf/httpd.conf

# Install Tomcat
RUN yum  -y install java-1.8.0-openjdk
RUN yum -y install tomcat 

# Install Supervisor
RUN yum -y install supervisor

# Copy php.ini date.timezona 
#COPY conf/php.ini /etc/php.ini
#RUN chmod 644 /etc/php.ini 
#
## Copy App
#COPY www /var/www
#COPY tomcat/webapps/ /var/lib/tomcat/webapps
#RUN chmod -R 777 /var/www/html/repoTest
#
## Copy file Java.inc
#RUN sed -i '1993 a\if( empty($client->cancelProxyCreationTag) ) {\$client->cancelProxyCreationTag = 0;\}' /var/lib/tomcat/webapps/PHPJRU/java/Java.inc 
#
#EXPOSE 80 8080
#
## COPY conf/supervisord.conf /etc/supervisor/conf.d/supervisord.conf
#COPY conf/supervisord.conf /etc/supervisor/conf.d/supervisord.conf
#
#CMD [ "/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf" ]

