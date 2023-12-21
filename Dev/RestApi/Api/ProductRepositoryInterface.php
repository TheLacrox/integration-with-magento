<?php
namespace Dev\RestApi\Api;
interface ProductRepositoryInterface
{
    /**
     * Return a filtered product.
     *
     * @param int $id
     * @return string $url
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getProductAddUrl(int $id);
}
