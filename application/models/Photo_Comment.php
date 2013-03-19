<?php

class Photo_Comment extends Eloquent {
	public function $timestamps = true;
	public function photo()
	{
		return $this->has_one('Photo');
	}
	public function user()
	{
		return $this->has_one('User');
	}
}