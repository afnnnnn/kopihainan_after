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

# Task distribution
- Afnan (login, register, file traversal, authenthication, brute force defense)
- Hazim (login, register, password encryption, authenthication)
- Syahrul (contact.php, XSS, CSRF)

# Enhancements Implemented
`Register and Login Page`
- Added register page (`register.php`) for user to register their information, and login page (`login.php`) added for users to login as users.
 - `form_handler.php` is added to validate the input validation.

`Input Validation`
- Input from users will be going through some process of validation before being sent to the database.
 - Client side: HTML
 - Server side: PHP
- `form_handler.php` includes the password encryption to encrypt the password to be stored in MySQL. After successfully login, and validated in this file, users are redirected to `index.php`, and a hashed Session ID is issued.

`Authentication`
- User login email and password will be authenthicated before going to the `index.html`. If users input the incorrect details, am error message is displayed, and the users are unable to access the web application.
- Session ID is implemented on login. The ID would be used throughout the whole session within the web application, until the user logout of the web application and the session ID is destroyed. If the user re-login, a different session ID is issued.

`Data Security`
- Password stored in the database (MySQL) will be encrypted in case of any breach. Users are able to login the original password in the web application.

`SSL Certificate`
- SSL certificate is acquired to implement https.

`File Traversal Defense`
- In XAMPP, the apache httpd.conf file has been configured to not allow file traversal. Users are unable to traverse outside of the web application (unable to do "/..etc")

`Brute Force Defense`
- Users cannot access other files unless they are logged in first. If users attempt to traverse within the web application without authentication, users would be redirected to the login page.

`Content Security Policy (CSP)`
- CSP header added so that outside script cannot be read.

 `Cross-Site Scripting (XSS) Defense`
- XSS proof form implemented by using input validation. Users cannot perform malicious code injection.

 `Cross-Site Request Forgery (CSRF) Defense`
- CSRF token added in `contact.php` and process `contact.php`. This prevents users from modifying existing data in the database.
