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
// get setting value. null returned if setting not founded
setting('SettingName')
// or
setting()->get('SettingName')

// with default if nothing will found
setting('SettingName', 'default')
// or 
setting()->get('SettingName', 'default')

// set setting value. only string values are accepted
setting(['SettingName' => 'value'])
// or
setting()->set(['SettingName' => 'value'])
// or
setting()->set('SettingName', 'value')

// delete entire setting
setting()->delete('SettingName')
```
