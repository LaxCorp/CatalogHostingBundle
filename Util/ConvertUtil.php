<?php

namespace LaxCorp\CatalogHostingBundle\Util;

/**
 * @inheritdoc
 */
class ConvertUtil
{

    /**
     * @param $dateTime
     *
     * @return int|null
     */
    static function dateLong($dateTime)
    {
        if ($dateTime instanceof \DateTime) {
            return $dateTime->getTimestamp() * 1000;
        }

        return null;
    }

    /**
     * @param $long
     *
     * @return \DateTime|null
     */
    static function longDate($long)
    {
        $timstamp = $long / 1000;

        if (!$timstamp) {
            return null;
        }

        $dateTime = new \DateTime(null);
        $dateTime->setTimestamp($timstamp);

        return $dateTime;
    }

}
