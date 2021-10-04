# telegram-sessions
Quick library to implement "memory" to your Telegram Bots

## How to Use it?

```php
<?php
use okayinc;
$session_id = md5($from_user_id.'@'.$chat_id);
okayinc\telegram_session::start($session_id);

...

// To restart the session (forget the past)
okayinc\telegram_session::reset();

// To get a value
$setup_step = okayinc\telegram_session::get('setup_step');


// To set a value
okayinc\telegram_session::set('setup_step', $value);
```

Where:
* setup_step is something you want to remember between HTTP calls
* value is the actual value to remember
