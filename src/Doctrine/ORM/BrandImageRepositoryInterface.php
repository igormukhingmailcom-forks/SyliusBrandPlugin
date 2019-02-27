<?php

declare(strict_types=1);

namespace Loevgaard\SyliusBrandPlugin\Doctrine\ORM;

use Loevgaard\SyliusBrandPlugin\Entity\BrandInterface;
use Sylius\Component\Resource\Repository\RepositoryInterface;

interface BrandImageRepositoryInterface extends RepositoryInterface
{
    /**
     * @param BrandInterface $brand
     * @return iterable
     */
    public function createPaginatorForBrand(BrandInterface $brand): iterable;

    /**
     * @param BrandInterface $brand
     * @param string $type
     * @return iterable
     */
    public function createPaginatorForBrandAndType(BrandInterface $brand, string $type): iterable;
}