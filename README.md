# CSC468-Project
RED TEAM consists of 4 members: Chris Ayling, Ethan Bridgehous, Joe Cort, and Payton Young

Current Description of Project:
Kubernetes cluster that hosts a webserver, LDAP authentication server, and postgres database on a cloudlab set of nodes. This service should allow users to login on the website and add information to the database. Several components of it are functional but not interconnected as of writing.

Original Description of Project:
This is an informative media description and review service that is hosted by our own web server. Users of the service are able to create their own personal account with log-in service using the LDAP protocol. The service will allow different users to locate a specific media that they would like to leave a review about. Other users will then be able to look up said media on their own account and be able to view the directory of reviews made over time. The database is maintained by use of MySQL.

Setup: 
1. On Cloudlab, run RedTeamProjectFile, and set up the cluster on Emulab ideally. Wait for experiment to set up fully. This may take time to run the necessary installation scripts. 
2. After setup is complete, ssh into the head node of the cluster and run the following command to ensure it is running correctly. 
```bash /local/repository/launch_network.sh```
Use ```kubectl get nodes``` & ```kubectl cluster-info``` make sure the cluster is ready and to observe/write down the cluster's exposed IP address
3. Use ```kubectl apply -f /local/repository/redkube.yaml``` This will start all the pods and services that are defined in the yaml file. 
4. Use ```kubectl get svc``` to look at the services that were just started and observe the port for the webserver : 
```webserver    NodePort    10.xxx.xxx.xxx   <none>        80:32080/TCP```   -> Especially ```80:32080/TCP``` the second number is the external port Kubernetes mapped that service to    
  
5. Go to exposedIP:port   (example:  10.xxx.xxx.xxx:32080)

#changelog
-4/30 Implemented Kubernetes cluster on cloudlab, however functionality is not as intended and there are fixes required in order to fully configure the LDAP server to fit into  Kubernetes NODEPORT scheme

-4/29 Wrote redkube Kubernetes deployment file and built CentOS based Apache image, which continues to throw a connection reset error. Enabling Kubernetes for docker desktop for testing purposes seems have caused errors as well. 

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
