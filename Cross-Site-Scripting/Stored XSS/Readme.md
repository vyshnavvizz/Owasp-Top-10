### Description

Stored cross-site scripting (also known as second-order or persistent XSS) arises when an application receives data from an untrusted source and includes that data within its later HTTP responses in an unsafe way.

refers : https://portswigger.net/web-security/cross-site-scripting/stored

### Issue

While editing username attacker can inject malicious script and it will run when rendering index.php


### Exploit 


Attacker can enter malicious script in input [``username``] 

PAYLOAD : ``` Hecker<script>alert('PWNED')</script>	```

It will run when rendering index.php

### Fix

implemented [htmlspecialchars](https://github.com/V1dhun/Owasp-Top-10/blob/931c4e239e4bd5561348f719a7a147ef8258c8ce/Cross-Site%20Scripting/Stored%20XSS/Fix_index.php#L9) entity Function to index.php which converts predefined characters to HTML entities
