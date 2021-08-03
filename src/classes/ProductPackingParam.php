<?php

namespace classes;

/**
 *
 * trida reprezentujici spolecnou strukturu nastaveni parametru k baleni
 * 
 * 
 * 
 * @author mkves
 */
abstract class ProductPackingParamAbstract {

    protected $greatestDimension;

    public function getGreatestDimension() {
        return $this->greatestDimension;
    }

    public function setGreatestDimension($greatestDimension): void {
        $this->greatestDimension = $greatestDimension;
    }

}
