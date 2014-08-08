<?php

namespace AntiMattr\GoogleBundle\Maps;

use Doctrine\Common\Collections\Collection;

abstract class AbstractMap implements MapInterface
{
	protected $id;
	protected $markers = array();
	protected $meta = array();

    public function setId($id)
    {
		$this->id = (string) $id;
		
		return $this;
	}

    public function getId()
    {
		return $this->id;
	}

    public function hasMarkers()
    {
		return !empty($this->markers);
	}

    public function hasMarker(Marker $marker)
    {
		if ($this->markers instanceof Collection) {
			return $this->markers->contains($marker);
		} else {
			return in_array($marker, $this->markers, true);
		}
	}

    public function addMarker(Marker $marker)
    {
		$this->markers[] = $marker;

		return $this;
	}

    public function removeMarker(Marker $marker)
    {
		if (!$this->hasMarker($marker)) {
			return null;
		}
		if ($this->markers instanceof Collection) {
			return $this->markers->removeElement($marker);
		} else {
			unset($this->markers[array_search($marker, $this->markers, true)]);
			return $marker;
		}
	}

    public function setMarkers($markers)
    {
		$this->markers = $markers;

		return $this;
	}

    public function getMarkers()
    {
		return $this->markers;
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
