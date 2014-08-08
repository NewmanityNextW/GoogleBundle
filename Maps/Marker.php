<?php

namespace AntiMattr\GoogleBundle\Maps;

class Marker
{
    protected $latitude;
    protected $longitude;
    protected $meta = array();

    public function setColor($color)
    {
        $this->meta['color'] = (string) $color;

        return $this;
    }

    public function getColor()
    {
        if (array_key_exists('color', $this->meta)) {
            return $this->meta['color'];
        }
    }

    public function setLabel($label)
    {
        $this->meta['label'] = (string) $label;

        return $this;
    }

    public function getLabel()
    {
        if (array_key_exists('label', $this->meta)) {
            return $this->meta['label'];
        }
    }

    public function setLatitude($latitude)
    {
        $this->latitude = (float) $latitude;

        return $this;
    }

    public function getLatitude()
    {
        return $this->latitude;
    }

    public function setLongitude($longitude)
    {
        $this->longitude = (float) $longitude;

        return $this;
    }

    public function getLongitude()
    {
        return $this->longitude;
    }

    public function hasMeta()
    {
        return !empty($this->meta);
    }

    public function setMeta(array $meta = array())
    {
        $this->meta = $meta;

        return $this;
    }

    public function getMeta()
    {
        return $this->meta;
    }
}
