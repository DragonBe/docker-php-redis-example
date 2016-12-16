# Docker with PHP and Redis example

While migrating from PHP 5.6 to PHP 7.1 we stumbled on a critical issue regarding our session management. Apparently PHP 7.1 triggers an error in the [redis extension](http://pecl.php.net/packages/redis).

```
Warning: session_start(): Failed to read session data: redis (path: tcp://localhost:6379)
```

This repository contains the source code to simulate the issue using [Docker](https://docker.com) containers.

[![PHP 7.1 and Redis extension issue](http://blob.in2itvof.com/php/php-7.1/php71-redis-extension-session-issue.png)](https://youtu.be/cXvH2LLWylg)

See also the [YouTube video](https://youtu.be/cXvH2LLWylg) describing the issue.
