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

namespace WellCommerce\Bundle\IntlBundle\Entity;

/**
 * Class LocaleAwareTrait
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
trait LocaleAwareTrait
{
    /**
     * @var LocaleInterface
     */
    protected $locale;

    /**
     * @param LocaleInterface $locale
     */
    public function setLocale(LocaleInterface $locale)
    {
        $this->locale = $locale;
    }

    /**
     * @return LocaleInterface
     */
    public function getLocale()
    {
        return $this->locale;
    }
}