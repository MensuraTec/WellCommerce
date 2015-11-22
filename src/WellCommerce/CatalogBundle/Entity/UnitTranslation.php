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

namespace WellCommerce\CatalogBundle\Entity;

use Knp\DoctrineBehaviors\Model\Translatable\Translation;
use WellCommerce\CommonBundle\Entity\LocaleAwareInterface;

/**
 * UnitTranslation
 */
class UnitTranslation implements LocaleAwareInterface
{
    use Translation;

    /**
     * @var string
     */
    protected $name;

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return UnitTranslation
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}