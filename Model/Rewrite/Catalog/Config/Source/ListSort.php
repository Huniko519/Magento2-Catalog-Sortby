<?php

namespace Huniko\Sortby\Model\Rewrite\Catalog\Config\Source;

class ListSort extends \Magento\Catalog\Model\Config\Source\ListSort {
	public function toOptionArray()
    {
        $options = [];
        $options[] = ['label' => __('Popularity'), 'value' => 'popularity'];
        $options[] = ['label' => __('Price'), 'value' => 'price'];
        $options[] = ['label' => __('Rating'), 'value' => 'rating_summary'];
        
        return $options;
    }
}