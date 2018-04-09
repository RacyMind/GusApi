<?php
namespace GusApi;

/**
 * Class SearchReport
 * @package GusApi
 */
class SearchReport
{
    private $regon;
    private $regon14;
    private $name;
    private $province;
    private $district;
    private $community;
    private $city;
    private $zipCode;
    private $street;
    private $type;
    private $silo;

    function __construct($data)
    {
        $this->regon = $data->Regon;
        $this->name = $data->Nazwa;
        $this->province = $data->Wojewodztwo;
        $this->district = $data->Powiat;
        $this->community = $data->Gmina;
        $this->city = $data->Miejscowosc;
        $this->zipCode = $data->KodPocztowy;
        $this->street = $data->Ulica;
        $this->type = $this->makeType($data->Typ);
        $this->regon14 = $this->makeRegon14($this->regon);
        $this->silo = $data->SilosID;
    }

    /**
     * @param mixed $regon
     */
    public function setRegon($regon)
    {
        $this->regon = $regon;
    }

    /**
     * @param string $regon14
     */
    public function setRegon14($regon14)
    {
        $this->regon14 = $regon14;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $province
     */
    public function setProvince($province)
    {
        $this->province = $province;
    }

    /**
     * @param mixed $district
     */
    public function setDistrict($district)
    {
        $this->district = $district;
    }

    /**
     * @param mixed $community
     */
    public function setCommunity($community)
    {
        $this->community = $community;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @param mixed $zipCode
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
    }

    /**
     * @param mixed $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @param mixed $silo
     */
    public function setSilo($silo)
    {
        $this->silo = $silo;
    }

    /**
     * Get REGON number
     *
     * @return string REGON number
     */
    public function getRegon()
    {
        return $this->regon;
    }

    /**
     * Get subject name
     *
     * @return string name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get province name
     *
     * @return string province name
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * Get distinct name
     *
     * @return string distinct name
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * Get community name
     *
     * @return string community name
     */
    public function getCommunity()
    {
        return $this->community;
    }

    /**
     * Get city
     *
     * @return string city name
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Get zip code
     *
     * @return string zip code
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Get street name
     *
     * @return string street name
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Get type name
     *
     * @return string type name
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getRegon14()
    {
        return $this->regon14;
    }

    /**
     * @return mixed
     */
    public function getSilo()
    {
        return $this->silo;
    }

    private function makeRegon14($regon)
    {
        return str_pad($regon, 14, "0");
    }

    private function makeType($type)
    {
        return trim(strtolower($type));
    }
}