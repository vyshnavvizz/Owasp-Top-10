### Description

Reflected cross-site scripting (or XSS) arises when an application receives data in an HTTP request and includes that data within the immediate response in an unsafe way.

Refers : https://portswigger.net/web-security/cross-site-scripting/reflected

### Issue

Attacker can inject malicious script from ``user`` URL parameter

### Expolit

Attacker can supply malicious script in user parameter 

PAYLOAD : ```user=Hecker<script>alert('PWNED')</script>```

It will execute in the browser

### Fix
implemented [htmlspecialchars](https://github.com/V1dhun/Owasp-Top-10/blob/7f3f86c748265524dd0633cd1f613577130bffd9/Cross-Site%20Scripting/Reflected%20XSS/Fix_index.php#L10) entity Function to index.php which converts predefined characters to HTML entities
