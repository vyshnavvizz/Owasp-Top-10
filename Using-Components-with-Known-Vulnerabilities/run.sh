if ! command -v docker > /dev/null; then
   echo "Docker is !installed"
   exit
fi
sudo docker load < tomcat.tar
sudo docker run -p 8000:8080 tomcat