<?php

namespace Fgunz07\Huie;

use Fgunz07\Huie\Broadcast\HuieBroadcast;

class HuieClient
{
	/**
	 * Handle broad cast event
	 * @param  String $channel
	 * @param  Object|Array  $data
	 * @return void
	 */
	public static function broadcast($room, $channel, $data = [])
	{
		event(new HuieBroadcast($room, $channel, $data));
	}
}