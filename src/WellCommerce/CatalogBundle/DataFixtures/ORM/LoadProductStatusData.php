<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 *
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\CatalogBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use WellCommerce\CatalogBundle\Entity\ProductStatus;
use WellCommerce\CommonBundle\Helper\Sluggable;
use WellCommerce\AppBundle\DataFixtures\AbstractDataFixture;

/**
 * Class LoadProductStatusData
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class LoadProductStatusData extends AbstractDataFixture
{
    public static $samples = ['Promotions', 'New arrivals', 'Featured', 'Bestsellers'];

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        foreach (self::$samples as $name) {
            $status = new ProductStatus();
            $status->translate('en')->setName($name);
            $status->translate('en')->setSlug($slug = Sluggable::makeSlug($name));
            $status->translate('en')->setCssClass($slug);
            $status->mergeNewTranslations();
            $manager->persist($status);
            $this->addReference('product_status_' . $name, $status);
        }

        $manager->flush();
    }
}