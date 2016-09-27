<?php
namespace Strapieno\PlaceGallery\Model\Entity\Reference;

use Strapieno\Utils\Model\Object\AbstractObject;
use Strapieno\Utils\Model\Object\EntityReference\EntityReferenceInterface;
use Strapieno\Utils\Model\Object\EntityReference\EntityReferenceTrait;
use Strapieno\Utils\Model\Object\ObjectInterface;

/**
 * Class GalleryReference
 */
class GalleryReference extends AbstractObject  implements ObjectInterface , EntityReferenceInterface
{
    use EntityReferenceTrait;

    /**
     * @return String
     */
    public function getServiceName()
    {
        return 'ImgMan\Service\PlaceGallery';
    }
}