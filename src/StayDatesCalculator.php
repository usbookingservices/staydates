<?php
namespace USBooking\StayDates;

class StayDatesCalculator
{
    /**
     * Given a check in date in the format 'yyyy-mm-dd' and a stay length, this returns an array of every date of the stay as
     * an array of strings in the format 'yyyy-mm-dd'.
     * @param string $checkInDate
     * @param int $stayLength
     * @return false|string[]
     */
    public function getStayDates($checkInDate, $stayLength)
    {
        $dates = array();
        for ($i=0; $i<$stayLength; $i++) {
            $dates[] = date('Y-m-d', strtotime($checkInDate." +$i days"));
        }

        return $dates;
    }

    /**
     * Given a check in date in the format 'yyyy-mm-dd' and a stay length, this returns the date of check out,
     * as a string in the format 'yyyy-mm-dd'.
     * @param string $checkInDate
     * @param int $stayLength
     * @return false|string
     */
    public function getCheckOutDate($checkInDate, $stayLength)
    {
        return date('Y-m-d', strtotime($checkInDate." +$stayLength days"));
    }
}
