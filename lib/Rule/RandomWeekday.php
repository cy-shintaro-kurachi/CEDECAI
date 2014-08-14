<?php

namespace Rule;

class RandomWeekday extends Rule {
    protected function doEvaluate(\Heroines $heroines, \Turn $turn) {
        if ($turn->nextTurnIsHoliday()) {
            return 0;
        }
        return 1;
    }
    public function result(\Heroines $heroines, \Turn $turn) {
        $heroineNums = [];
        for ($i = 0; $i < $turn->nextDayCount(); $i++) {
            $heroineNums[] = mt_rand(0, count($heroines) - 3);
        }
        return $heroineNums;
    }
}
