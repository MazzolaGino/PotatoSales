<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use App\Validator as CustomAssert;

class Product {

    /**
     * @Assert\NotBlank
     * @Assert\Type("integer", 
     *  message="The value {{ value }} is not a valid {{ type }}."
     * )
     * @Assert\Length(
     *      min = 13,
     *      max = 13,
     *      
     *      maxMessage = "The product size must be exactly {{ limit }} characters",
     *      minMessage = "The product size must be exactly {{ limit }} characters"
     * )
     */
    private $productID;

    /**
     * @Assert\NotBlank
     * @Assert\Regex(
     *     pattern="/^[a-z0-9 ]+$/i",
     *     message="the product name can only contains digit, space and letters"
     * )
     * @Assert\Length(
     *      max = 50,
     *      maxMessage = "the product name cannot be longer than {{ limit }} characters"
     * )
     */
    private $productName;
     /**
    * @Assert\Regex(
     *     pattern="/^[a-z0-9 ]+$/i",
     *     message="the product manager can only contains digit, space and letters"
     * )
     * @Assert\Length(
     *      max = 30,
     *      maxMessage = "the product name cannot be longer than {{ limit }} characters"
     * )
     */
    
    private $productManager;

    /**
     * @Assert\NotBlank
     */
    private $salesStartDate;
    

    function getProductID() {
        return $this->productID;
    }

    function getProductName() {
        return $this->productName;
    }

    function getProductManager() {
        return $this->productManager;
    }

    function getSalesStartDate() {
        return $this->salesStartDate;
    }

    function setProductID($productID): void {
        $this->productID = $productID;
    }

    function setProductName($productName): void {
        $this->productName = $productName;
    }

    function setProductManager($productManager): void {
        $this->productManager = $productManager;
    }

    function setSalesStartDate($salesStartDate): void {
        $this->salesStartDate = $salesStartDate;
    }
    
    function toArray(){
        return [
           'productID' => $this->getProductID(),
           'productName' => $this->getProductName(),
           'productManager' => $this->getProductManager(),
           'salesStartDate' => $this->getSalesStartDate()
        ];
    }

}
