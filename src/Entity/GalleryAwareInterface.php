<?php
namespace Strapieno\PlaceGallery\Model\Entity;

/**
 * Interface GalleryAwareInterface
 */
interface GalleryAwareInterface
{
    /**
     * return string
     */
    public function getGallery();

    /**
     * @param $gallery string
     * @return $this
     */
    public function setGallery($gallery);
}