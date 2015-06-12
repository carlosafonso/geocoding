<?php
namespace Afonso\Geocoding;

interface ReverseGeocoderInterface
{
	public function reverseGeocode($lat, $lng);
}
