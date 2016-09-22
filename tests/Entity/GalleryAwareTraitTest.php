<?php
namespace Strapieno\PlaceGallery\ModelTest\Entity;

use Strapieno\PlaceGallery\Model\Entity\GalleryAwareTrait;
use Strapieno\PlaceGallery\Model\Entity\Mock;

/**
 * Class GalleryAwareTraitTest
 */
class GalleryAwareTraitTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var GalleryAwareTrait
     */
    protected $mockTrait;

    public function setUp()
    {
        $this->mockTrait = $this->getMockForTrait('Strapieno\PlaceGallery\Model\Entity\GalleryAwareTrait');
    }

    public function testGetterSetter()
    {
        $input = 'test';
        $this->mockTrait->setGallery($input);
        $this->assertSame($input, $this->mockTrait->getGallery());
    }
}