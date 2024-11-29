
# BitGoSDK PHP

BitGoSDK written in PHP. This SDK contains methods for easily interacting with the BitGo API.


## Requirements

- PHP 8.3 or earlier with:
  - cURL
  - BCMath

## Installation

To install the SDK, you will need to be using [Composer](http://getcomposer.org/) in your project. If you aren't using Composer yet, it's really simple! Here's how to install composer and the BitGoSDK PHP.

```sh
# Install Composer
curl -sS https://getcomposer.org/installer | php

# Add the BitGoSDK as a dependency
php composer.phar require dhtech/bitgosdk-php
```

Next, require Composer's autoloader, in your application, to automatically load the BitGoSDK in your project:

```php
require 'vendor/autoload.php';

use dhtech\BitGoSDK\BitGoSDK;
```

Or if put the following in your `composer.json`:

```json
"dhtech/bitgosdk-php": "*" 
```
  
## Example

```php
require 'vendor/autoload.php';

use dhtech\BitGoSDK\BitGoSDK;
use dhtech\BitGoSDK\Enum\CurrencyCode;

$bitgo = new BitGoSDK('YOUR_API_KEY_HERE', CurrencyCode::BITCOIN, false);
$bitgo->walletId = 'YOUR_WALLET_ID_HERE';

$createAddress = $bitgo->createWalletAddress();
```

## BitGo Express

If you are going to use BitGo Express you have to run a BitGo Express node. You can find how to run your own BitGo Express node [here](https://github.com/BitGo/BitGoJS/blob/master/modules/express/README.md).

## Attention

Keep your cacert.pem always up to date. You can find updates on the site [curl.haxx.se](https://curl.haxx.se/docs/caextract.html).

## Credits

- [Pasha Zahari](https://github.com/DigitalHustlaz)

