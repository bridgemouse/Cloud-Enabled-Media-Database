FROM postgres 
ENV POSTGRES_USER admin
ENV POSTGRES_PASSWORD password
ENV POSTGRES_DB testdb 
COPY init.sql /docker-entrypoint-initdb.d/
