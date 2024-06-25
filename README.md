# Final Assessment - Web Application Security Enhancement (Kopi Hainan - After)

`Group eXampplers`
- Afnan Iman bin Azman (1920311)
- Sharul Irfan bin Sharul Isram (1921825)
- Muhammad Hazim bin Ibrahim (2014309)

# Title: Kopi Hainan
# Introduction
Kopi Hainan is a beverage shop that sells coffee. The shop can be found in few locations, including within the IIUM Student Mall. Kopi Hainan serves their coffees, served with some toppings and flavours, to give customers a chance of personalizing their coffee, and bring smiles to the customer to enjoy their beverages.

# Objective of the Enhancements
`Input validation`: Ensures users to input the correct string, or text in a text field.

`Authentication`: To allow access to certain users, specifically to users who has registered an account in the web application.

`XSS & CSRF Prevention`: Prevents any malicious code injection, taht allow attackers to gain any sensitive information, within the website.

`Database Security Principles`: Prevents SQL injection and data leaking; disabling attackers from accessing the databse information.

`File Security Principles`: Prevents file traversal outside of the web application, including files stored within the same file as the web application.


# Enhancements Implemented
`Register and login page`
- new register page added for user to register their information, and login page added for users to login as users

`Input validation`
- Input from users will be going through some process of validation before being sent to the database
- client side: HTML
- server side: PHP

`Authentication`
- User login email and password will be authenthicated before going to the index.html
- Session id is also implemented on login

`Data security`
- password stored in the database will be encrypted in case of any breach

`SSL certificate`
- SSL certificate is acquired to implement https

`File traversal defense`
- in xampp, the apache httpd.conf file has been configured to not allow file traversal

`brute force defense`
- users cannot access other files unless they are logged in first

`Content security police`
- CSP header added so that outside script cant be read

 `XSS defense`
- XSS proof form implemented by using input validation

