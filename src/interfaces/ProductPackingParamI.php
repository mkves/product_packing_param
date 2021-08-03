<?php

namespace Kokiska\ProductPackingParams\interfaces;

/**
 * interface reprezentujici spolecnou strukturu nastaveni parametru k baleni
 * 
 * @author mkves
 */
interface ProductPackingParamI {

    public function getMaximalDimension();

    public function getMiddleDimension();

    public function getMinimalDimension();

    public function getWeightInGrams();

    public function getPackedInCarton();

    public function getCanBePackedInCarton();

    public function getPackage();

    public function getIsStackable();

    public function getPackageVariations();

    public function setMaximalDimension($maximalDimension): void;

    public function setMiddleDimension($middleDimension): void;

    public function setMinimalDimension($minimalDimension): void;

    public function setWeightInGrams($weightInGrams): void;

    public function setPackedInCarton($packedInCarton): void;

    public function setCanBePackedInCarton($canBePackedInCarton): void;

    public function setPackage($package): void;

    public function setIsStackable($isStackable): void;

    public function setPackageVariations($packageVariations): void;
}
