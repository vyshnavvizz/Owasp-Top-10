### Description

Sensitive Data Exposure vulnerabilities can occur when a web application does not adequately protect sensitive information from being disclosed to attackers. This can include information such as credit card data, medical history, session tokens, or other authentication credentials.

refers : https://www.owasp.org/index.php/Top_10-2017_A3-Sensitive_Data_Exposure

### Issue

information disclosure on server which took advantage on endpoint `user` that allowed the viewing of sensitive information on the server.

### Expolit

* User logged as "Manu",but here Manu can view the other users information

PAYLOAD : `http://0.0.0.0:8000?user="Alvin&password=true"`

### Fix

implemented session based authorization to view user information
