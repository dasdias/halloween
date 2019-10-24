<?php
class High_year {

    public function highYear($year) {
        if ($year % 400 == 0 && $year % 4 == 0 && $year % 100 == 0) {
            return $res = $year . ' - Высокосный год';
        } else if ($year % 4 == 0 && $year % 100 == 0) {
            return $res = $year . ' - не высокосный год';
        } else if ($year % 4 == 0) {
            return $res = $year . ' - высокосный год';
        } else {
            return $res = $year . ' - не высокосный год';
        }
    }
}


?>