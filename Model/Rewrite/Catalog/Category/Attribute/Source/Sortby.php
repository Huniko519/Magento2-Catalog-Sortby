<?php

namespace Huniko\Sortby\Model\Rewrite\Catalog\Category\Attribute\Source;

class Sortby extends \Magento\Catalog\Model\Category\Attribute\Source\Sortby {
	/**
     * {@inheritdoc}
     */
    public function getAllOptions()
    {
        if ($this->_options === null) {
            $this->_options[] = ['label' => __('Popularity'), 'value' => 'popularity'];
            $this->_options[] = ['label' => __('Price'), 'value' => 'price'];
        	$this->_options[] = ['label' => __('Rating'), 'value' => 'rating_summary'];
        }
        return $this->_options;
    }
}