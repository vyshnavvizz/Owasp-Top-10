### Description

Application functions related to authentication and session management are often implemented incorrectly, allowing attackers to compromise passwords, keys, or session tokens, or to exploit other implementation flaws to assume other users' identities temporarily or permanently.

refers :  https://www.owasp.org/index.php/Top_10-2017_A2-Broken_Authentication

### Issue 

Normal user can access the admin privileged profile page by editing the cookie

### Expolit

Change the cookie `"admin"=TRUE` , can access admin privileged profile page 

### Fix

implemented session authentication to access admin privileged profile page
