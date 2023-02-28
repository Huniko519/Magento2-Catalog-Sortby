<?php

namespace Huniko\Sortby\Model\Rewrite\Catalog;

class Config extends \Magento\Catalog\Model\Config {
	 /**
     * Retrieve Attributes Used for Sort by as array
     * key = code, value = name
     *
     * @return array
     */
    public function getAttributeUsedForSortByArray()
    {
        $options['popularity'] = __('Popularity');
        $options['price'] = __('Price');
        $options['rating_summary'] = __('Rating');

        return $options;
    }
}