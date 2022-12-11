<?php
namespace App;

class Sort
{
    /**
     * Insertion sort
     * @param array $data
     * @return array
     */
    public static function insertion(array $data) : array
    {
        for($i = 1; $i < count($data); $i++) {
            $currentValue = $data[$i];
            $previousElementPosition = $i - 1;

            while( $previousElementPosition >= 0 && $data[$previousElementPosition] > $currentValue) {
                $data[$previousElementPosition + 1] = $data[$previousElementPosition];
                --$previousElementPosition;
            }

            $data[$previousElementPosition + 1] = $currentValue;
        }

        return $data;
    }
}