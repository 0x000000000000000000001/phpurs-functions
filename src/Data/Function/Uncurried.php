<?php

$runFn2 = function($fn, $a = null, $b = null) use (&$runFn2) {
    if (func_num_args() < 3) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$runFn2) {

            return $runFn2(...array_merge($__args, $more));
        };
    }
    return $fn($a, $b);
};
$runFn3 = function($fn, $a = null, $b = null, $c = null) use (&$runFn3) {
    if (func_num_args() < 4) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$runFn3) {

            return $runFn3(...array_merge($__args, $more));
        };
    }
    return $fn($a, $b, $c);
};

$exports['runFn2'] = $runFn2;
$exports['runFn3'] = $runFn3;
return $exports;
