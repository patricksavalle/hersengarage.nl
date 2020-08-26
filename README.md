<img src="https://hersengarage.nl/themes/user/hersengarage/asset/img/logo.png" height="200">

# HERSENGARAGE.NL

This is a complete package including all necessary plugins, templates and stylesheets. 
Just follow the instructions and you should be up and running. You can than put in your 
own artwork / images / etc. 

This deployment is currently live and under construction at https://hersengarage.nl

## Based on ExpressionEngine CMS

<img src="https://expressionengine.com/asset/img/expressionengine-with-text.svg" alt="ExpressionEngine Logo" height="30" >

###

Visit [expressionengine.com](https://expressionengine.com/) to see what it's all about.

## System Requirements

ExpressionEngine requires a web server running PHP & MySQL. We recommend:

- PHP 7 or newer
- MySQL 5.6 or newer

ExpressionEngine _can_ run on PHP 5.6+ and MySQL 5.5.3+. For full details and a server compatibility wizard, please visit the system requirements [in the User Guide](https://docs.expressionengine.com/latest/installation/requirements.html).

What you will need:

- a domain (e.g. yourdomain.com)
- A webserver running the LAMP stack (Linux, Apache, MySQL, PHP) or similar
- The root login to the server's SSH/SFTP and MySQL account
- SSL certificates (https://zerossl.com)
- Your own logos and favicons (https://realfavicongenerator.net/)
- The plugins I created, you can find them in my Github too
    - dynamic_link
    - hash_tag
    - activity_stream
    - voting (under construction)
    - staging_area (under construction)
    - algorithmic_frontpage (under construction)

## How To Install from the repository:

- Create a database e.g. 'EE' or 'hersengarage' or your site's domain (CREATE SCHEMA <name>)
- Clone repo into your site's root directory or clone locally and upload files.
- Add a virtual host And the SSL certificates to the Apache config
- On high load sites install Memcached on the server
- Verify file permissions, the following dirs+subs should have read-write access:
    - system/user/cache
    - images
    And if you are going to customize skins and templates:
    - themes/user/ 
    - system/user/templates/
- Add an empty config file, e.g. `touch system/user/config/config.php`
- Change `EE_INSTALL_MODE` to `TRUE` in [.env.php](.env.php). You can undo this change when you're done.
- Point your browser to `/admin.php` and run the Installation Wizard, install 'without default theme'.

Log in to the developer / admin panels and:

- Developer -> templates -> new templategroup 'hersengarage', EE will automatically pickup the templates
- Developer -> Addons -> install query, statistics, email, RSS, char_limit, the hersengarage plugin-package
- Developer -> Categories -> create and fill category group 'blog'
- Developer -> Fields -> new field group 'blog'
    - blog_content (textarea, XHTML)
    - blog_image (grid) 
        - Image (file) 
        - Caption (text)
    - SEO_title (textinput)
    - SEO_description (textinput)
- Developer -> Fields -> new field group 'linkdump'
    - link_url (url)
    - SEO_title (textinput)
    - SEO_description (textinput)
- Developer -> Channels -> create channel 'blog'
    - use category group 'blog'
    - use field group 'blog'
- Developer -> Channels -> create channel 'linkdump'
    - use field group 'linkdump'
- Files -> new upload directory 'blog'
    - serverdirectory <site-directory>/images/uploads/blog/
    - URL /images/uploads/blog/
- Configure all preferences, caching, commenting etc.

## Customizing your blog

The main stylesheet is very easy to edit. It is in the /themes/user/hersengarage/asset/style/ directory of the project

See [hersengarage.css](https://hersengarage.nl/themes/user/hersengarage/asset/style/hersengarage.css)

## How to Contribute

There are many ways you get get involved and contribute to the ExpressionEngine application and it's amazing community. Check out [CONTRIBUTING.md](CONTRIBUTING.md) in the root of this repository to get started!

## Copyright / License Notice

The ExpressionEngine project is copyright (c) 2003-2020 Packet Tide, LLC ([https://packettide.com](https://packettide.com)) and is licensed under Apache License, Version 2.0. This project contains subcomponents with separate copyright and license terms, all of which are fully FOSS and compatible with Apache-2.0.

Complete license terms and copyright information can be found in [LICENSE.txt](LICENSE.txt) in the root of this repository.

"ExpressionEngine" is a registered trademark of Packet Tide, LLC. in the United States and around the world. Refer to ExpressionEngines's [Trademark Use Policy](https://expressionengine.com/about/trademark-use-policy) for access to logos and acceptable use.

All Hersengarage additions are free for use. Copyleft.
