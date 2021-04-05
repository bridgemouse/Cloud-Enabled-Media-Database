FROM ubuntu
ARG DEBIAN_FRONTEND=noninteractive
RUN apt-get update
RUN apt-get install -y nginx && apt-get clean

COPY index.html /var/www/html

EXPOSE 80
CMD ["nginx", "-g", "daemon off;"]
