<?php
namespace Training;

class Data
{
    const ARR_SIMPL_INT = 'array_simple_int';
    const ARR_MLTY_INT = 'array_multy_int';
    const ARR_SQURE_MTRX = 'array_square_matrix';
    const ARR_ASSOC_INT = 'array_assoc_int';
    const ARR_ASSOC_MLTY_DB = 'array_assoc_multy_db';

    public static function getData($dataName)
    {
        switch ($dataName) {
            case self::ARR_SIMPL_INT:
                return array(2, 5, 3, 5, 6, 7, 8, 9, 25, 24, 18, 26, 27, 28, 29, 30, 31);
                break;
            case self::ARR_MLTY_INT:
                return array(array(2, 5, 3), 5, 6, 7, array(8, 9, array(25)), 24, 18);
                break;
            case self::ARR_SQURE_MTRX:
                return array(
                    array(10, 5, 3, 6),
                    array(8, 2, 11, 13),
                    array(9, 25, 30, 18),
                    array(34, 37, 38, 24));
                break;
            case self::ARR_ASSOC_INT:
                return array(
                    'one' => 1, 'two' => 2, 'three' => 3, 'four' => 4
                );
                break;
            case self::ARR_ASSOC_MLTY_DB:
                return array(
                    '1' => array('price' => 10, 'count' => 2),
                    '2' => array('price' => 5, 'count' => 5),
                    '3' => array('price' => 8, 'count' => 5),
                    '4' => array('price' => 12, 'count' => 4),
                    '5' => array('price' => 8, 'count' => 4),
                );
                break;
            default:
                throw new Exception('Тип данных не найден');
        }
    }
}