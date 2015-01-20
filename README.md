# MODX-GoogleCloudStorage

## Description ##
Media source connector to Google Cloud Storage.

A MODX's extra to add Google Cloud Storage <https://cloud.google.com/storage/> into media source, allowing basic manipulation, uploading and URL-retrieval of resources in a specified bucket.

Please see the documentation at:
https://cloud.google.com/storage/docs/json_api/v1/json-api-php-samples

Submit issues at:
https://github.com/virtudraft/modx-GoogleCloudStorage/issues

Please make sure your server's time is not more than google's time, otherwise the authentication will fail.
This can be a reference http://www.timeanddate.com/ .

## Requirements ##
* [PHP 5.2.1 or higher](http://www.php.net/)
* [PHP JSON extension](http://php.net/manual/en/book.json.php)

*Note*: some features (service accounts and id token verification) require PHP 5.3.0 and above due to cryptographic algorithm requirements. 

## Developer Documentation ##
http://developers.google.com/api-client-library/php

## License ##
GNU GPLv3

## Authors ##
* goldsky@virtudraft.com
