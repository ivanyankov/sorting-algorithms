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

    /**
     * Insertion sort
     * @param array $data
     * @return array
     */
    public static function bubble($data) : array
    {
        $index = count($data) - 1;

        while($index >= 0) {
            for($i = 0; $i < $index; $i++) {
                if($data[$i] > $data[$i + 1]) {
                    $current = $data[$i];
                    $data[$i] = $data[$i + 1];
                    $data[$i + 1] = $current;
                }
            }
            $index--;
        }

        return $data;
    }
}