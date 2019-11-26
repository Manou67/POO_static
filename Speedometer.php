<?php


class Speedometer
{
    public static function ConvertKmToMiles(int $speed)
    {
        $resultMiles = $speed * 0.6215;
        echo 'La conversion de ' . $speed . ' Km en Miles est la suivante : ' . $resultMiles . '.';
    }

    public static function ConvertMilesToKm(int $speed)
    {
        $resultKm = $speed * 1.609;
        echo 'La conversion de ' . $speed . ' Miles en Km est la suivante : ' . $resultKm . '.';
    }
}

