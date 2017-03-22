<?php

namespace App\FileReader;

class BadFileReader implements FileReader
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
		throw new FileReaderException("File {$this->filename} could not be read");
	}

	public function close()
	{
		$this->isOpen = false;
	}
}
