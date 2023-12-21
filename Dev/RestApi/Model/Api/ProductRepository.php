<?php
namespace Dev\RestApi\Model\Api;
use Dev\RestApi\Api\ProductRepositoryInterface;
use Dev\RestApi\Api\RequestItemInterfaceFactory;
use Dev\RestApi\Api\ResponseItemInterfaceFactory;
use Magento\Catalog\Api\Data\ProductInterface;
use Magento\Catalog\Model\ResourceModel\Product\Action;
use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Store\Model\StoreManagerInterface;
/**
 * Class ProductRepository
 */
class ProductRepository implements ProductRepositoryInterface
{
    /**
     * Return a filtered product.
     *
     * @param int $id
     * @return string $url
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getProductAddUrl(int $id)
    {
        // TODO: Implement getProductAddUrl() method.
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $product = $objectManager->create('Magento\Catalog\Model\Product')->load($id);
        return $objectManager->get('Magento\Checkout\Helper\Cart')->getAddUrl($product);
    }
}
