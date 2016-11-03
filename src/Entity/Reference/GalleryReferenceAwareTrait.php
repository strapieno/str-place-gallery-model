<?php
namespace Strapieno\PlaceGallery\Model\Entity\Reference;

use Strapieno\Utils\Model\Object\EntityReference\EntityReferenceInterface;

/**
 * Class GalleryReferenceAwareTrait
 */
trait GalleryReferenceAwareTrait
{
    /**
     * @var EntityReferenceInterface|null
     */
    protected $galleryReference;

    /**
     * @return EntityReferenceInterface|null
     */
    public function getGalleryReference()
    {
        return $this->galleryReference;
    }

    /**
     * @param EntityReferenceInterface $galleryReference
     * @return $this
     */
    public function setGalleryReference(EntityReferenceInterface $galleryReference)
    {
        $this->galleryReference = $galleryReference;
        return $this;
    }
}