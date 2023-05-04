function bubbleSort($lists)
{
    $length = count($lists);
    for ($parent = 0; $parent < $length; $parent++) {
        for ($child = 0; $child < $length - $parent - 1; $child++) {
            if ($lists[$child] > $lists[$child + 1]) {
                $temp = $lists[$child + 1];
                $lists[$child + 1] = $lists[$child];
                $lists[$child] = $temp;
            }
        }
    }
    return $lists;
}