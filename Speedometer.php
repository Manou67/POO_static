<?php


class Speedometer
{
    const KmToMiles = 0.621;
    const MilesToKm = 1.609;

    public static function convertKmToMiles(int $speed)
    {
        $resultMiles = $speed * self::KmToMiles;
        echo 'La conversion de ' . $speed . ' Km en Miles est la suivante : ' . $resultMiles . '.';
    }

    public static function ConvertMilesToKm(int $speed)
    {
        $resultKm = $speed * self::MilesToKm ;
        echo 'La conversion de ' . $speed . ' Miles en Km est la suivante : ' . $resultKm . '.';
    }
}


