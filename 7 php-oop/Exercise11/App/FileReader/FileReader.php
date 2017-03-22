<?php

namespace App\FileReader;

interface FileReader
{
	public function read();
	public function close();
}
