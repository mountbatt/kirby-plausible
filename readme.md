# Kirby Plausible
Simple plugin providing plausible iframe panel view to kirby panel and simple frontend snippet. You can use plausibles standard servers or your own or custom hosting URL.

## How to use
1. Create a shared link https://plausible.io/docs/shared-links
2. Set `mountbatt.plausible.sharedLink` in config.php

There is also `mountbatt.plausible.domain` which allows you to overwrite `data-domain` in the frontend snippet.

config.php example
```php
'mountbatt.plausible' => [
	'sharedLink' => 'https://plausible.io/share/yourwebsiteurl.com?auth=Jz0mCWTPu5opXi0sAgRrq',
	'plausibleURL' => 'https://plausible.io/js/plausible.js', // not required, but you can enter your own instance of plausible hosting. it will use default https://plausible.io/js/plausible.js if not set
	'domain' => 'test.com' // not required if not set it will be taken from $site->url
]
```

Frontend snippet place inside head tag. Automatically disabled when kirby is in debug mode.
```php
<?php snippet('plausible'); ?>
```

Thanks to Florian Karsten for inspiration!
