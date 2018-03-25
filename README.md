# Simple-Web-App-Penetration-Testing
Penetration Test of a simple web application
This example demonstrates a Reflected XSS attack on a web application using burp suite.

By examining the application behavior and inputting the user Id and the password, it can be observed that the application is vulnerable to reflected XSS attack, from Figure 1, we can observe that by using the Burp suite we can block the HTTP request to view its inner contents and by navigating to the repeater tab in burp suite we can see the data that being appended onto the request body which shows the indpwd password parameter showing the password, the User ID and the Session ID which is included in the request and the response messages, which is being reflected back to the response page and thus we can use the values that are reflected back to hijack users session. This is so, because the input is not filtering any character code or javascript code, as seen in Figure 1. This is an indication that the Web application is vulnerable to reflected XSS attack, where the attacker can insert malicious code for browser to execute.


![alt text](https://image.ibb.co/gVs3En/p1t1.png)
