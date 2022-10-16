# Bussines administrator

Business manager, for shared storage.

You can download income and expense reports. Manage the services or products you have. Assign goals by time.
Download financial reports, orders, objectives, services (most sold, most interaction, ...)
You can manage the users and the permissions they will have for the modules.
If you have the client version, it will link automatically to manage everything from one place.
Ease of installation thanks to its initial configuration file.
Adaptable to common cell phone, tablet, laptop or desktop devices.
Security: authentication, XSS, SQL injection, JWT poisoning, cookie poisoning and DDOS.

- Should to be in subdomain EX: <https://admin.ivanyz.com>

## Pages

- Dashboard
- Finance
- Staff
- Clients
- Ads (clients application)
- Objectives
- Services
- Configuration
- Login
- Logout
- Custom 404 page

## Scope

- Create databases
  - Services
  - Orders
  - Staff
  - Finance
  - Objectives
  - Clients
- Bussines data
  - Logo
  - Brand name
  - Contact
- Administrator credentials
- Colors, lenguage
- Initial configuration file

## You can

- Manage staff
- Finance
- Services
- Orders
- Clients
- Objectives
- Additional clients subdomain: ads administration

## Functionality

### Requirements

- DB credentials
  - Username
  - Password

### Steps

- Paste the application files into your server root directory
  - Tutorial localhost
  - Tutorial shared hosting (1and1, hostgator, neubox, ...)
- Enter to your domain
- Automatically detect if config file exists
- Redirect to setup-config.php
  - You have to enter db information
  - Create an administrator
  - Business information
  - Select the modules you want
- Its creates databsases and tables
- If everything went good display succesful instalation
  - Its give you some options
    - Add users
    - [Tutorials](https://github.com/IvanYanez10/business-administrator/wiki)
      - How to update
      - Best way to use it
    - Import data
    - [FAQs](https://github.com/IvanYanez10/business-administrator/wiki)
    - [Issues](https://github.com/IvanYanez10/business-administrator/issues)

Base design
![Design](https://file.comd)

It doesnt recolect any information
