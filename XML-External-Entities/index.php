<!DOCTYPE html>
<head>
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">
function XMLFunction(){
    var xml = '' +
        '<?xml version="1.0" encoding="UTF-8"?>' +
        '<root>' +
        '<email>' + $('#email').val() + '</email>' +
        '<password>' + $('#password').val() + '</password>' +
        '</root>';
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if(xmlhttp.readyState == 4){
            console.log(xmlhttp.readyState);
            console.log(xmlhttp.responseText);
        }
    }
    xmlhttp.open("POST","Signup.php",true);
    xmlhttp.send(xml);
};
</script></head>
<body>
<fieldset>
<legend>Signup</legend>
<center>
Name : <input id="email" type="email"/></br></br>
Password : <input id="password" type="password" /></br></br>
<button id="signup" onclick="XMLFunction()">Register</button>
</center>
</fieldset>
</body>
</html>