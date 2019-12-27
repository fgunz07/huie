### Laravel Huie client

To install using `composer`

```
	composer require fgunz07/huie
```

##### To use this package
Open ```.env``` create ```HUIE_APP_KEY```, you can get your app key on the service we provided.

To broadcast just use `Fgunz07\Huie\HuieClient`.
```
	use Fgunz07\Huie\HuieClient;

	HuieClient::broadcast(room, channel, data);
```

###### Note: room is the HUIE_APP_KEY so pass the HUEI_APP_KEY to broadcast function.
