<?php

namespace LaxCorp\CatalogHostingBundle\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
class Version
{

    /**
     * @var string
     *
     * @Serializer\SerializedName("api")
     * @Serializer\Type("string")
     */
    private $api;

    /**
     * @var string
     *
     * @Serializer\SerializedName("guayaquil")
     * @Serializer\Type("string")
     */
    private $guayaquil;

    /**
     * @return string
     */
    public function getApi()
    {
        return $this->api;
    }

    /**
     * @param string $api
     *
     * @return Version
     */
    public function setApi($api)
    {
        $this->api = $api;

        return $this;
    }

    /**
     * @return string
     */
    public function getGuayaquil()
    {
        return $this->guayaquil;
    }

    /**
     * @param string $guayaquil
     *
     * @return Version
     */
    public function setGuayaquil($guayaquil)
    {
        $this->guayaquil = $guayaquil;

        return $this;
    }

}
