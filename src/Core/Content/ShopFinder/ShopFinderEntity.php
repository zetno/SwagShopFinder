<?php declare(strict_types=1);

namespace SwagShopFinder\Core\Content\ShopFinder;

use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\EntityIdTrait;

class ShopFinderEntity extends Entity
{
    use EntityIdTrait;
    protected $active;
    protected $name;
    protected $street;
    protected $postCode;
    protected $city;
    protected $url;
    protected $telephone;
    protected $openTimes;
    protected $country;

    public function getActive(){
        return $this->active;
    }

    public function setActive($active){
        $this->active = $active;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getStreet(){
        return $this->street;
    }

    public function setStreet($street){
        $this->street = $street;
    }

    public function getPostCode(){
        return $this->postCode;
    }

    public function setPostCode($postCode){
        $this->postCode = $postCode;
    }

    public function getCity(){
        return $this->city;
    }

    public function setCity($city){
        $this->city = $city;
    }

    public function getUrl(){
        return $this->url;
    }

    public function setUrl($url){
        $this->url = $url;
    }

    public function getTelephone(){
        return $this->telephone;
    }

    public function setTelephone($telephone){
        $this->telephone = $telephone;
    }

    public function getOpenTimes(){
        return $this->openTimes;
    }

    public function setOpenTimes($openTimes){
        $this->openTimes = $openTimes;
    }

    public function getCountry(){
        return $this->country;
    }

    public function setCountry($country){
        $this->country = $country;
    }
}
