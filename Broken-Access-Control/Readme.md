### Description

Access control enforces policy such that users cannot act outside of their intended permissions. Failures typically lead to unauthorized information disclosure, modification or destruction of all data, or performing a business function outside of the limits of the user.

refers : https://www.owasp.org/index.php/Top_10-2017_A5-Broken_Access_Control

### Issue 

By setting admin cookie, user can view the admin privileged dashboard

### Expolit

set cookie `"admin"="TRUE"` , can view the admin privileged dashboard

### Fix

implemented session based authorization to view the admin privileged dashboard
