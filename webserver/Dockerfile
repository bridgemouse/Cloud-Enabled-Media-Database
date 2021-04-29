# ./webserver/Dockerfile
# Base image
FROM php:7-apache

# Enable Apache ldap auth module
#Enable after working with Joe
RUN a2enmod authnz_ldap

# Add LDAP rules to apache's conf-enabled dir 
# Make config file if need be
COPY ldap-demo.conf /etc/apache2/conf-enabled/

# Add debugging help if you need it (currently commented out)
RUN echo "LogLevel debug" >> apache2.conf

# Convenient working directory
WORKDIR /var/www/html/demo

# Configure apache to use the ldap configuration defined above
COPY .htaccess ./.htaccess

# Copy the project files we need (we'll be creating this in step 3)
COPY logmein.php ./
COPY forget.html ./
COPY index.html ./
COPY styles.css ./css/
