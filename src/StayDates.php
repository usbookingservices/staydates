<?php
namespace USBooking\StayDates;

class StayDatesCalculator
{
    public function getStayDates($checkInDate, $stayLength)
    {
        return date('Y-m-d', strtotime($checkInDate." +$stayLength days"));
    }
}
