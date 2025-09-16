# TYPO3 CMS Base Distribution

Get going quickly with TYPO3 CMS.

## Prerequisites

* PHP 8.2
* [Composer](https://getcomposer.org/download/)

## Screenshots
<img width="1915" height="963" alt="Image" src="https://github.com/user-attachments/assets/e3ed1427-d527-4aa0-b54b-043517ef9ea0" />
<img width="1915" height="963" alt="Image" src="https://github.com/user-attachments/assets/f32c20d4-2b0b-48dc-8025-05e99ce18a31" />
<img width="1915" height="963" alt="Image" src="https://github.com/user-attachments/assets/ad9b8284-425c-4cc7-81a6-51ccb7a2827a" />
<img width="1906" height="910" alt="Image" src="https://github.com/user-attachments/assets/11918072-a6d2-4ce1-8290-392232b18cd5" />
<img width="1915" height="963" alt="Image" src="https://github.com/user-attachments/assets/e8b1ef0c-e48c-4bcc-aeed-583ea0af3c2a" />


## Quickstart

* `composer create-project typo3/cms-base-distribution project-name ^13`
* `cd project-name`

Note that this distribution installs most, but not all of the TYPO3 CMS core extensions.
Depending on your need you might also want to install other TYPO3 extensions from
[packagist.org](https://packagist.org/?type=typo3-cms-framework).

### Setup

To start an interactive installation, you can do so by executing the following
command and then follow the wizard:

```bash
composer exec typo3 setup
```

### Setup unattended (optional)

If you're a more advanced user, you might want to leverage the unattended installation.
To do this, you need to execute the following command and substitute the arguments
with your own environment configuration.

```bash
export TYPO3_SETUP_ADMIN_PASSWORD=$(tr -dc "_A-Za-z0-9#=$()/" < /dev/urandom | head -c24)
composer exec -- typo3 setup \
    --no-interaction \
    --server-type=other \
    --driver=sqlite \
    --admin-username=admin \
    --admin-email="info@example.com" \
    --project-name="My TYPO3 Project" \
    --create-site="http://localhost:8000/"
echo "Admin password: ${TYPO3_SETUP_ADMIN_PASSWORD}"
```

### Development server

While it's advised to use a more sophisticated web server such as
Apache 2 or Nginx, you can instantly run the project by using PHPs` built-in
[web server](https://secure.php.net/manual/en/features.commandline.webserver.php).

* `TYPO3_CONTEXT=Development php -S localhost:8000 -t public`
* open your browser at "http://localhost:8000"

Please be aware that the built-in web server is single threaded and only meant
to be used for development.

##  Next steps

* [Getting Started with TYPO3](https://docs.typo3.org/permalink/t3start:start)
* [Create a Site Package](https://docs.typo3.org/permalink/t3sitepackage:start)

## License

GPL-2.0 or later
