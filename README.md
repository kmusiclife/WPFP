# WPFP

This is a simple framework using Wordpress; you can easily build a framework using WordPress resources without using Symfony, CakePHP, or Laravel.

## Installation

First, you need to install WordPress. After that do below commands on wp-content/themes

### 1. move to your theme directory and download WPFP
```sh
$ cd wp-content/themes/twentytwentyone
$ git clone https://github.com/kmusiclife/WPFP.git
```

### 2. edit functions.php of your theme

```sh
$ vim functions.php
```
content is

```php
include('WPFP/init.php');
```

### 3. check WPFP

Access below URL
http://loclahost/page/sample-page/

You will see a text: "SAMPLE PAGE" include your header and footer of your theme.
