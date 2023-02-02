<?php
namespace Binstellar\TopHeaderMenuAPI\Model;

use Magento\Cms\Block\Block as cmsBlock;
use Magento\Framework\Serialize\SerializerInterface;
use DOMDocument;

class TopHeaderMenuAPI implements \Binstellar\TopHeaderMenuAPI\Api\CustomInterface
{

    /**
     * @var SerializerInterface
     */
    private $serializer;



    public function __construct(
        cmsBlock $cmsblock,
        \Magento\Framework\Serialize\Serializer\Json $json
    ) {
        $this->cmsblock = $cmsblock;
       $this->json = $json;
    }

    /**
     * @inheritdoc
     */
    public function getList()
    {   
         
        $dom = new DOMDocument;
        $dom->loadHTML($this->getCmsBlock());
        
        return $dom->textContent;
        
    }

    public function getCmsBlock()
    {
        $cmsblock = $this->cmsblock->setBlockId('top-header')->toHtml();
        return $cmsblock;
      }
}


?>
