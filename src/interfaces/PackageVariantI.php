<?php

namespace Kokiska\ProductPackingParams\interfaces;

/**
 *
 * prepravni jednotka
 * karton, paleta
 * 
 * @author mkves
 */
interface PackageVariantI {

    /**
     * id constant everywhere
     */
    public function getId();

    /**
     * nazev kartonu, baliku
     */
    public function getName();

    /**
     * je to paleta?
     */
    public function getIsPallete();

    public function setId($id): void;

    public function setName($name): void;

    public function setIsPallete($isPallete): void;
}
