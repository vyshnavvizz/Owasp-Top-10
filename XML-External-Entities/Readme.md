### Description

A web vulnerability which allows the attacker to interfere with the way the XML data is parsed and processed by the server, and can manipulate this to manipulate this to view files in the file system, interact with backend or external applications within the server.



 ###  XML  
 XML (extensible markup language) is a language designed for storing and transporting data. Like HTML, XML uses a tree-like structure of tags and data.
  
 eg : <code>&lt;?xml version="1.0" encoding="UTF-8"?&gt;&lt;Note&gt;&lt;title&gt;foo&lt;/title&gt;&lt;body&gt;bar&lt;/body&gt;&lt;/Note&gt;</code>
 

### XML external entity injection

XML external entity injection (also known as XXE) is a web security vulnerability that allows an attacker to interfere with an application's processing of XML data. It often allows an attacker to view files on the application server filesystem, and to interact with any backend or external systems that the application itself can access


 -  Prevent XXE in PHP --> ``libxml_disable_entity_loader(TRUE)``
 
 -  Prevent XXE vulnerabilities : [https://cheatsheetseries.owasp.org](https://cheatsheetseries.owasp.org/cheatsheets/XML_External_Entity_Prevention_Cheat_Sheet.html)

refers : https://www.owasp.org/index.php/Top_10-2017_A4-XML_External_Entities_(XXE)