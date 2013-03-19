<?php

class Relationship extends Eloquent{
	public static $timestamps = true;
	public function follower()
	{
		$this->belongs_to('User', 'follower_id');
	}
	public function followed()
	{
		$this->belongs_to('User', 'followed_id');
	}
}