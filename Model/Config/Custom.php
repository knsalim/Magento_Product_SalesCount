<?php


namespace Leanswift\ProductSales\Model\Config;


class Custom implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @return array
     */

    public function toOptionArray()
    {
        $options = [
            [
                'label' => __('-- Please select --'),
                'value' => '0',
            ],
            [
                'label' => __('Today'),
                'value' => '1',
            ],
            [
                'label' => __('Last 7 Days'),
                'value' => '2',
            ],
            [
                'label' => __('This Month'),
                'value' => '3',
            ],
             [
                'label' => __('Last Three Month'),
                'value' => '4',
            ],
             [
                'label' => __('Last Six Month'),
                'value' => '5',
            ],
            [
                'label' => __('Last One Year'),
                'value' => '6',
            ],
        ];
        return $options;
    }
}

