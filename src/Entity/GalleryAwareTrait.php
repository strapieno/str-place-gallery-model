<?php
namespace Strapieno\PlaceGallery\Model\Entity;

/**
 * Class GalleryAwareTrait
 */
trait GalleryAwareTrait
{
    /**
     * @var string
     */
    protected $gallery;

    /**
     * @return string
     */
    public function getGallery()
    {
        return $this->gallery;
    }

    /**
     * @param string $gallery
     * @return $this
     */
    public function setGallery($gallery)
    {
        $this->gallery = $gallery;
        return $this;
    }
}