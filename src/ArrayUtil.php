<?php

namespace SomeProject;

class ArrayUtil
{
    /**
     * @param array $arr  Nested array to be flattened
     *
     * @return array Flattened array
     */
    public function flatten($arr)
    {
        $ret = [];
        $this->flatten1($ret, $arr);

        return $ret;
    }

    protected function flatten1(&$main, $arr)
    {
        foreach ($arr as $item) {
            if (is_array($item)) {
                $this->flatten1($main, $item);
            }
            else {
                $main[] = $item;
            }
        }
    }
}
