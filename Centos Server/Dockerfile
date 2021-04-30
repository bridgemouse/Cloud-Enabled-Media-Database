FROM centos:7

# Install Apache
RUN yum -y update
RUN yum -y install httpd httpd-tools debian:stretch apache2

# Install EPEL Repo
RUN rpm -Uvh https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm \
 && rpm -Uvh http://rpms.remirepo.net/enterprise/remi-release-7.rpm

# Install PHP
RUN yum --enablerepo=remi-php73 -y install php php-bcmath php-cli php-common php-gd php-intl php-ldap php-mbstring \
    php-mysqlnd php-pear php-soap php-xml php-xmlrpc php-zip

# Update Apache Configuration
RUN sed -E -i -e '/<Directory "\/var\/www\/html">/,/<\/Directory>/s/AllowOverride None/AllowOverride All/' /etc/httpd/conf/httpd.conf
RUN sed -E -i -e 's/DirectoryIndex (.*)$/DirectoryIndex index.php \1/g' /etc/httpd/conf/httpd.conf

EXPOSE 80

# Start Apache
CMD ["/usr/sbin/httpd","-D","FOREGROUND"]


FROM debian:stretch
RUN apt-get update
RUN apt-get install -y apache2

#Added
# Enable Apache ldap auth module
#Enable after working with Joe
RUN a2enmod authnz_ldap

COPY ldap-demo.conf /etc/apache2/conf-enabled/

RUN echo "LogLevel debug" >> apache2.conf

WORKDIR /var/www/html/

COPY .htaccess ./.htaccess

COPY logmein.php ./
COPY forget.html ./
COPY index.html ./
COPY styles.css ./css/