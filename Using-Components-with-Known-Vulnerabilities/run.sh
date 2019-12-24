if ! command -v docker > /dev/null; then
   echo "Docker is !installed"
   exit
fi
bash ./bin/gdrivedl "https://drive.google.com/uc?id=11UiEawLb8GB5-VLHyoE7n2F97HOyBYsp&export=download" "tomcat.tar" # 150 Mb 
if [[ -e tomcat.tar ]];then
	sudo docker load < tomcat.tar
	sudo docker run -p 8000:8080 tomcat
fi
   echo "Something Went Wrong"
