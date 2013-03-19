<?php

class Photo extends Eloquent {
	public static $timestamps = true;
	public function user()
	{
		return $this->belongs_to('User');
	}
	public function photo_comment()
	{
		return $this->has_many('Photo_Comment');
	}
}