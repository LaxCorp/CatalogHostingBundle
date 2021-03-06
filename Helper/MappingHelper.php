<?php

namespace LaxCorp\CatalogHostingBundle\Helper;

use JMS\Serializer\Serializer;

/**
 * @inheritdoc
 */
class MappingHelper
{

    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * MappingHelper constructor.
     *
     * @param Serializer $serializer
     */
    public function __construct(Serializer $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * @param string $json
     * @param string $type
     * @param string $format
     *
     * @return array|object
     */
    public function deserialize(string $json, string $type, string $format = 'json')
    {
        try {
            $result = $this->serializer->deserialize($json, $type, $format);
        } catch (\Exception $e) {
            $result = $e->getMessage() . '\n' . $json;
        }

        return $result;
    }

    /**
     * @inheritdoc
     */
    public function serialize($obj, $format = 'json')
    {
        return $this->serializer->serialize($obj, $format);
    }

}