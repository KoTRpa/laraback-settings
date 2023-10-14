Laraback Settings Package

### Installation

```bash
composer require kma/laraback-settings
```

```bash
php artisan migrate
```

### Usage

```php
use function KMA\LarabackSettings\setting;
...
// get value. null returned if setting not founded
setting('SettingName')->get()
// or you can set the default return value
setting('SettingName')->get('missing')
// set setting. only string values are accepted
setting('SettingName')->set('value')
// delete setting
setting('SettingName')->delete()
```
