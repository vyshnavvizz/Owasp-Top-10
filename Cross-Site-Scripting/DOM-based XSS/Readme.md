### Description

DOM-based XSS (also known as DOM XSS) arises when an application contains some client-side JavaScript that processes data from an untrusted source in an unsafe way, usually by writing the data to a potentially dangerous sink within the DOM

refers : https://portswigger.net/web-security/cross-site-scripting/dom-based

### Issue

Attacker can inject malicious script from  ```user``` URL parameter

### Expolit
Attacker can supply malicious script in user parameter

PAYLOAD : ```user=Hecker<script>alert('PWNED')</script>```

It will execute in the browser

### Fix
implemented [htmlspecialchars](https://github.com/V1dhun/Owasp-Top-10/blob/529cc25e23c571429f747b6d359bd2a60a657c6f/Cross-Site%20Scripting/DOM-based%20XSS/Fix_index.php#L10) entity Function to index.php which converts predefined characters to HTML entities
