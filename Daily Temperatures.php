<?php
/*Given an array of integers temperatures represents the daily temperatures,
return an array answer such that answer[i] is the number of days you have to
wait after the ith day to get a warmer temperature.
If there is no future day for which this is possible, keep answer[i] == 0 instead.*/

class Solution
{

    /**
     * @param Integer[] $temperatures
     * @return Integer[]
     */
    function dailyTemperatures($temperatures)
    {
        $n = count($temperatures);
        $answer = array_fill(0, $n, 0);
        $stack = [];
        for ($i = 0; $i < $n; $i++) {
            while (!empty($stack) && $temperatures[$i] > $temperatures[end($stack)]) {
                $index = array_pop($stack);
                $answer[$index] = $i - $index;
            }
            $stack[] = $i;
        }
        return $answer;
    }
}