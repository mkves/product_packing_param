<?php

namespace Kokiska\ProductPackingParams\interfaces;

/**
 * interface reprezentujici spolecnou strukturu nastaveni parametru k baleni
 * 
 * @author mkves
 */
interface ProductPackingParamI {

    /**
     * maximalni rozmer v cm
     */
    public function getMaximalDimension();

    /**
     * stredni rozmer v cm
     */
    public function getMiddleDimension();

    /**
     * nejmensi rozmer v cm
     */
    public function getMinimalDimension();

    /**
     * nejmensi rozmer v gramech
     */
    public function getWeightInGrams();

    /**
     * je produkt zabalen v kartonu?
     */
    public function getPackedInCarton();

    /**
     * lze ho zabalit do kartonu?
     */
    public function getCanBePackedInCarton();

    /**
     * je stohovatelny?
     */
    public function getIsStackable();

    /**
     * mozne zpusoby zabaleni
     */
    public function getPackageVariations();

    public function setMaximalDimension($maximalDimension): void;

    public function setMiddleDimension($middleDimension): void;

    public function setMinimalDimension($minimalDimension): void;

    public function setWeightInGrams($weightInGrams): void;

    public function setPackedInCarton($packedInCarton): void;

    public function setCanBePackedInCarton($canBePackedInCarton): void;

    public function setIsStackable($isStackable): void;

    public function setPackageVariations($packageVariations): void;
}
