# Kirby Plausible
Simple plugin providing plausible iframe panel view to kirby panel and simple frontend snippet. You can use plausibles standard servers or your own or custom hosting URL.

## How to use
1. Create a shared link https://plausible.io/docs/shared-links
2. Set `mountbatt.plausible.sharedLink` in config.php


config.php example
```php
'mountbatt.plausible' => [
		'scriptJsURL' => 'https://plausible.mydomain.com/js/pa-9fzjSlNadV0wW.js', // get it from src in widget code
		'sharedLink' => 'https://plausible.mydomain.com/share/mydomain.eu?auth=TolMvaVP2jppjbA',
]
```

Frontend snippet place inside head tag. Automatically disabled when kirby is in debug mode.
```php
<?php snippet('plausible'); ?>
```

## Updates
- Version 0.2 - 29.01.2026: Updated to latest Plausible Widget Script (See https://plausible.io/docs/script-update-guide)

Thanks to Florian Karsten for inspiration!
