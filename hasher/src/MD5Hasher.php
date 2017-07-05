<?php

namespace Zpfei\Hasher;

class MD5Hasher
{
	public function make($value,array $option=[])
	{
		$salt = isset($option['salt'])? $option['salt']:'';
		return hash('md5',$value.$salt);
	}

	public function check($value,$hashValue,array $option=[])
	{
		$salt = isset($option['salt'])? $option['salt']:'';
		return hash('md5',$value.$salt) === $hashValue;
	}
}