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

    /**
     * 
     * id
     * 
     * @var int
     * 
     */
    protected $id;

    /**
     * 
     * největší rozměr
     * 
     * @var int
     */
    protected $greatestDimension;

    public function getId() {
        return $this->id;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function getGreatestDimension() {
        return $this->greatestDimension;
    }

    public function setGreatestDimension($greatestDimension): void {
        $this->greatestDimension = $greatestDimension;
    }

}
