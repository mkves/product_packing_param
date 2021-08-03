<?php

namespace Kokiska\ProductPackingParams\interfaces;

/**
 *
 * mapovani produktu na zpusob zabeleni
 * 
 * @author mkves
 */
interface ProductPackingVariantI {

    public function getPackage();

    public function getProductPackingParam();

    public function getQuantity();

    public function setPackage($package): void;

    public function setProductPackingParam($productPackingParam): void;

    public function setQuantity($quantity): void;
}
