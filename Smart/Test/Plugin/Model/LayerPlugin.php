<?php

namespace Smart\Test\Plugin\Model;

use Magento\Catalog\Model\ResourceModel\Product\Collection;

class LayerPlugin
{
    private $applied = false;

    public function afterPrepareProductCollection(
        $layer,
              $result,
        Collection $collection
    ) {
        if (!$this->applied) {
            //$subject->addFieldToFilter('entity_id', ['644', '730']);
            $collection->addAttributeToFilter('entity_id', ['in' => ['644', '730']]);
            //$collection->addAttributeToFilter('sku', ['in' => ['MT12', 'MT01']]);
            $this->applied = true;
        }
        return $result;
    }
}
