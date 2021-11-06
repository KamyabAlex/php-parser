# PHP Parser

PHP Parser is a lightweight string parser that loads your configuration file with any type of extension.

## Usage

```php
use App\Parser;

$parser = new Parser(".env");
$conf = $parser->parse();

```
## Sample .env file
```txt
# Main configuration file
db.host = "10.0.0.55"
db.port = 3306
db.name.internal = "db­01­internal.local" 
db.name.external = "db­01.company.tld"

cache.ttl = 3600

debug.enabled = false
##### NOTE: keep the connection timeout low cache.connection.timeout = 3
```


## Getting values
You can get values as a multidimensional array.
```php
$db = $conf['db']['name'];
$host = $conf['db']['host'];
$username = $conf['db']['user']['name'];
```