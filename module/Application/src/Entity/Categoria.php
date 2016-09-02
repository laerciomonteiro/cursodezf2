<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="categories")
 */
class Categoria {

    /**
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $CategoryId;
    
    /**
     *
     * @ORM\Column(type="string")
     */
    private $CategoryName;

    function getCategoryId() {
        return $this->CategoryId;
    }

    function getCategoryName() {
        return $this->CategoryName;
    }

    function setCategoryId($CategoryId) {
        $this->CategoryId = $CategoryId;
    }

    function setCategoryName($CategoryName) {
        $this->CategoryName = $CategoryName;
    }

}
