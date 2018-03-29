<?php

namespace LaxCorp\CatalogHostingBundle\Util;

/**
 * @inheritdoc
 */
class TypeUtil
{

    /**
     * @param $class
     *
     * @return string
     */
    public static function arrayType($class)
    {
        return "array<{$class}>";
    }

}
