<?php

if (!function_exists('formatTanggal')) {
    function formatTanggal($date)
    {
        // $date = new DateTime($date);
        // $date->setTimezone(new DateTimeZone('Asia/Jakarta'));
        // return $date->format('l, d F Y H:i:s');

        $date = new DateTime($date);
        $formatter = new IntlDateFormatter(
            'id_ID',
            IntlDateFormatter::FULL,
            IntlDateFormatter::FULL,
            'Asia/Jakarta',
            IntlDateFormatter::GREGORIAN,
            'eeee, dd MMMM yyyy, HH:mm:ss'
        );
        return $formatter->format($date);
    }
}