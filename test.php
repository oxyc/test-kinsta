<?php

require_once __DIR__ . '/vendor/autoload.php';

use JMS\Serializer\Annotation\Inline;

class Example
{
	/**
	 * @Inline
	 */
	private $value;

	public function __construct($value)
	{
		$this->value = $value;
	}
}

$data = new Example('foobar');
$serializer = JMS\Serializer\SerializerBuilder::create()->build();
$xml = $serializer->serialize($data, 'xml');
echo $xml;
