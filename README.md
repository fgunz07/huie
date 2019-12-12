### Laravel Huie client

To install using `composer`

```
	composer require fgunz07/huie
```

##### To use this package
In your terminal navigate to project folder and publish the config file `php artisan vendor:publish` and you will be ask what `ServiceProvider` to be publish choose `Fgunz07\Huie\HuieServiceProvider`.

After publish completed open your `.env` and add this lines.
```
	HUIE_APP_KEY=
```
To broadcast just use `Fgunz07\Huie\HuieClient`.
```
	use Fgunz07\Huie\HuieClient;

	HuieClient::broadcast(channel, data)
```

