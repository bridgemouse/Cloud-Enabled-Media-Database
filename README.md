# CSC468-Project
RED TEAM consists of 4 members: Chris Ayling, Ethan Bridgehous, Joe Cort, and Payton Young

Current Description of Project:


Original Description of Project:
This is an informative media description and review service that is hosted by our own web server. Users of the service are able to create their own personal account with log-in service using the LDAP protocol. The service will allow different users to locate a specific media that they would like to leave a review about. Other users will then be able to look up said media on their own account and be able to view the directory of reviews made over time. The database is maintained by use of MySQL.


#changelog

-4/29
-4/28 Attended office hours and troubleshot php-ldap module with Dr. Ngo, attempted to go down rabbit hole of binary installations before debating swtichig to a different CentOS image which Joe is leading the effort on. Updated repository with missing files from Payton's WSL workspace
-4/27 Attempted to configure LDAP modules for the php image unsuccessfully. Configured LDAP server and confirmed log in as admin on server side
-4/26 PY&JC Reviewed several pre-made images for LDAP server configuartion. Published our own Docker images on Docker Hub for LDAP server / implemented basic operation of LDAP server
-4/25 changed specification of database to simple text

-4/23 updated files from Payton's WSL repository to include updated HTML and CSS files for apache webserver. CSS file not displayed correctly due to typo in Dockerfile. Now displays with CSS
-4/21 got container running from apache:php-7 image. HTML page displays but CSS does not

-4/16 updated index.html
-4/6 webserver works but due to NGINX "freemium" nature it may not contain some features we need. 
-4/5 attempted setup of NGINX inside docker container to show basic HTML page and expose to the outside
-3/24 added extra nodes to profile.py to better reflect what the team intends to build
-3/05 Documentation file created for project specifications / added network diagram of proposed cloud network
