# kopihainan_after

Group eXampplers
- Afnan Iman bin Azman (1920311)
- Sharul Irfan bin Sharul Isram (1921825)
- Muhammad Hazim bin Ibrahim (2014309)

-Description-
An enhanced and secured version of Kopi Hainan website

##Enhancement
Register and login page
- new register page added for user to register their information, and login page added for users to login as users

Input validation
- Input from users will be going through some process of validation before being sent to the database
- client side: HTML
- server side: PHP

Authentication
- User login email and password will be authenthicated before going to the index.html
- Session id is also implemented on login

Data security
- password stored in the database will be encrypted in case of any breach

File security
- configuration will be done in xampp to limit the traversal up to httdocs

SSL certificate
- SSL certificate is acquired to implement https

File traversal defense
- in xampp, the apache httpd.conf file has been configured to not allow file traversal


