<?php
namespace Strapieno\PlaceGallery\Model\Entity\Reference;

use Strapieno\Utils\Model\Object\EntityReference\EntityReferenceInterface;

/**
 * Interface GalleryReferenceAwareInterface
 */
interface GalleryReferenceAwareInterface
{
    /**
     * @return EntityReferenceInterface|null
     */
    public function getGalleryReference();

    /**
     * @param EntityReferenceInterface $galleryReference
     * @return $this
     */
    public function setGalleryReference(EntityReferenceInterface $galleryReference);
}