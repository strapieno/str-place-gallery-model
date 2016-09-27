<?php
namespace Strapieno\PlaceGallery\Model\Entity\Reference;

/**
 * Interface GalleryReferenceAwareInterface
 */
interface GalleryReferenceAwareInterface
{
    /**
     * @return GalleryReference|null
     */
    public function getGalleryReference();

    /**
     * @param GalleryReference $galleryReference
     * @return $this
     */
    public function setGalleryReference(GalleryReference $galleryReference);
}