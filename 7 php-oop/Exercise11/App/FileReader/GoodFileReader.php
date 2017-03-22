<?php

namespace App\FileReader;

class GoodFileReader implements FileReader
{
	private $filename;
	private $isOpen;

	public function __construct($filename)
	{
		$this->filename = $filename;
		$this->open();
	}

	private function open()
	{
		$this->isOpen = true;
	}

	public function isClosed()
	{
		return !$this->isOpen;
	}

	public function read()
	{
		if ($this->isClosed()) {
			throw new FileReaderException("File {$this->filename} is closed");
		}
		return "some good content";
	}

	public function close()
	{
		$this->isOpen = false;
	}
}
