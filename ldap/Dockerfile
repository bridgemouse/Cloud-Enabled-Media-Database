FROM osixia/openldap
LABEL maintainer="redteamcloudcomputing"
ENV LDAP_ADMIN_PASSWORD="test1234"
ENV LDAP_BASE_DN = "dc=shihadeh,dc=intern"
ENV LDAP_ORGANISATION="shihadeh.intern"
ENV LDAP_DOMAIN="shihadeh.intern"
COPY bootstrap.ldif /container/service/slapd/assets/config/bootstrap/ldif/50-bootstrap.ldif
