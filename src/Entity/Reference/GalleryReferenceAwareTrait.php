<?php
namespace Strapieno\PlaceGallery\Model\Entity\Reference;

/**
 * Class GalleryReferenceAwareTrait
 */
trait GalleryReferenceAwareTrait
{
    /**
     * @var GalleryReference|null
     */
    protected $galleryReference;

    /**
     * @return GalleryReference|null
     */
    public function getGalleryReference()
    {
        return $this->galleryReference;
    }

    /**
     * @param GalleryReference $galleryReference
     * @return $this
     */
    public function setGalleryReference(GalleryReference $galleryReference)
    {
        $this->galleryReference = $galleryReference;
        return $this;
    }
}