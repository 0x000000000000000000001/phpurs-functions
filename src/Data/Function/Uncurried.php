<?php

$mkFn0 = function($fn) use (&$mkFn0) {
    if (func_num_args() < 1) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$mkFn0) {
            return $mkFn0(...array_merge($__args, $more));
        };
    }
    return function() use ($fn) {
        return $fn();
    };
};
$mkFn1 = function($fn) use (&$mkFn1) {
    if (func_num_args() < 1) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$mkFn1) {
            return $mkFn1(...array_merge($__args, $more));
        };
    }
    return function($a0 = null) use ($fn) {
        return $fn($a0);
    };
};
$mkFn2 = function($fn) use (&$mkFn2) {
    if (func_num_args() < 1) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$mkFn2) {
            return $mkFn2(...array_merge($__args, $more));
        };
    }
    return function($a0 = null, $a1 = null) use ($fn) {
        return $fn($a0, $a1);
    };
};
$mkFn3 = function($fn) use (&$mkFn3) {
    if (func_num_args() < 1) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$mkFn3) {
            return $mkFn3(...array_merge($__args, $more));
        };
    }
    return function($a0 = null, $a1 = null, $a2 = null) use ($fn) {
        return $fn($a0, $a1, $a2);
    };
};
$mkFn4 = function($fn) use (&$mkFn4) {
    if (func_num_args() < 1) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$mkFn4) {
            return $mkFn4(...array_merge($__args, $more));
        };
    }
    return function($a0 = null, $a1 = null, $a2 = null, $a3 = null) use ($fn) {
        return $fn($a0, $a1, $a2, $a3);
    };
};
$mkFn5 = function($fn) use (&$mkFn5) {
    if (func_num_args() < 1) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$mkFn5) {
            return $mkFn5(...array_merge($__args, $more));
        };
    }
    return function($a0 = null, $a1 = null, $a2 = null, $a3 = null, $a4 = null) use ($fn) {
        return $fn($a0, $a1, $a2, $a3, $a4);
    };
};
$mkFn6 = function($fn) use (&$mkFn6) {
    if (func_num_args() < 1) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$mkFn6) {
            return $mkFn6(...array_merge($__args, $more));
        };
    }
    return function($a0 = null, $a1 = null, $a2 = null, $a3 = null, $a4 = null, $a5 = null) use ($fn) {
        return $fn($a0, $a1, $a2, $a3, $a4, $a5);
    };
};
$mkFn7 = function($fn) use (&$mkFn7) {
    if (func_num_args() < 1) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$mkFn7) {
            return $mkFn7(...array_merge($__args, $more));
        };
    }
    return function($a0 = null, $a1 = null, $a2 = null, $a3 = null, $a4 = null, $a5 = null, $a6 = null) use ($fn) {
        return $fn($a0, $a1, $a2, $a3, $a4, $a5, $a6);
    };
};
$mkFn8 = function($fn) use (&$mkFn8) {
    if (func_num_args() < 1) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$mkFn8) {
            return $mkFn8(...array_merge($__args, $more));
        };
    }
    return function($a0 = null, $a1 = null, $a2 = null, $a3 = null, $a4 = null, $a5 = null, $a6 = null, $a7 = null) use ($fn) {
        return $fn($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7);
    };
};
$mkFn9 = function($fn) use (&$mkFn9) {
    if (func_num_args() < 1) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$mkFn9) {
            return $mkFn9(...array_merge($__args, $more));
        };
    }
    return function($a0 = null, $a1 = null, $a2 = null, $a3 = null, $a4 = null, $a5 = null, $a6 = null, $a7 = null, $a8 = null) use ($fn) {
        return $fn($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8);
    };
};
$mkFn10 = function($fn) use (&$mkFn10) {
    if (func_num_args() < 1) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$mkFn10) {
            return $mkFn10(...array_merge($__args, $more));
        };
    }
    return function($a0 = null, $a1 = null, $a2 = null, $a3 = null, $a4 = null, $a5 = null, $a6 = null, $a7 = null, $a8 = null, $a9 = null) use ($fn) {
        return $fn($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9);
    };
};
$runFn0 = function($fn = null) use (&$runFn0) {
    if (func_num_args() < 1) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$runFn0) {
            return $runFn0(...array_merge($__args, $more));
        };
    }
    return $fn();
};
$runFn1 = function($fn = null, $a0 = null) use (&$runFn1) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$runFn1) {
            return $runFn1(...array_merge($__args, $more));
        };
    }
    return $fn($a0);
};
$runFn2 = function($fn = null, $a0 = null, $a1 = null) use (&$runFn2) {
    if (func_num_args() < 3) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$runFn2) {
            return $runFn2(...array_merge($__args, $more));
        };
    }
    return $fn($a0, $a1);
};
$runFn3 = function($fn = null, $a0 = null, $a1 = null, $a2 = null) use (&$runFn3) {
    if (func_num_args() < 4) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$runFn3) {
            return $runFn3(...array_merge($__args, $more));
        };
    }
    return $fn($a0, $a1, $a2);
};
$runFn4 = function($fn = null, $a0 = null, $a1 = null, $a2 = null, $a3 = null) use (&$runFn4) {
    if (func_num_args() < 5) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$runFn4) {
            return $runFn4(...array_merge($__args, $more));
        };
    }
    return $fn($a0, $a1, $a2, $a3);
};
$runFn5 = function($fn = null, $a0 = null, $a1 = null, $a2 = null, $a3 = null, $a4 = null) use (&$runFn5) {
    if (func_num_args() < 6) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$runFn5) {
            return $runFn5(...array_merge($__args, $more));
        };
    }
    return $fn($a0, $a1, $a2, $a3, $a4);
};
$runFn6 = function($fn = null, $a0 = null, $a1 = null, $a2 = null, $a3 = null, $a4 = null, $a5 = null) use (&$runFn6) {
    if (func_num_args() < 7) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$runFn6) {
            return $runFn6(...array_merge($__args, $more));
        };
    }
    return $fn($a0, $a1, $a2, $a3, $a4, $a5);
};
$runFn7 = function($fn = null, $a0 = null, $a1 = null, $a2 = null, $a3 = null, $a4 = null, $a5 = null, $a6 = null) use (&$runFn7) {
    if (func_num_args() < 8) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$runFn7) {
            return $runFn7(...array_merge($__args, $more));
        };
    }
    return $fn($a0, $a1, $a2, $a3, $a4, $a5, $a6);
};
$runFn8 = function($fn = null, $a0 = null, $a1 = null, $a2 = null, $a3 = null, $a4 = null, $a5 = null, $a6 = null, $a7 = null) use (&$runFn8) {
    if (func_num_args() < 9) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$runFn8) {
            return $runFn8(...array_merge($__args, $more));
        };
    }
    return $fn($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7);
};
$runFn9 = function($fn = null, $a0 = null, $a1 = null, $a2 = null, $a3 = null, $a4 = null, $a5 = null, $a6 = null, $a7 = null, $a8 = null) use (&$runFn9) {
    if (func_num_args() < 10) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$runFn9) {
            return $runFn9(...array_merge($__args, $more));
        };
    }
    return $fn($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8);
};
$runFn10 = function($fn = null, $a0 = null, $a1 = null, $a2 = null, $a3 = null, $a4 = null, $a5 = null, $a6 = null, $a7 = null, $a8 = null, $a9 = null) use (&$runFn10) {
    if (func_num_args() < 11) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$runFn10) {
            return $runFn10(...array_merge($__args, $more));
        };
    }
    return $fn($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9);
};
$exports['mkFn0'] = $mkFn0;
$exports['runFn0'] = $runFn0;
$exports['mkFn1'] = $mkFn1;
$exports['runFn1'] = $runFn1;
$exports['mkFn2'] = $mkFn2;
$exports['runFn2'] = $runFn2;
$exports['mkFn3'] = $mkFn3;
$exports['runFn3'] = $runFn3;
$exports['mkFn4'] = $mkFn4;
$exports['runFn4'] = $runFn4;
$exports['mkFn5'] = $mkFn5;
$exports['runFn5'] = $runFn5;
$exports['mkFn6'] = $mkFn6;
$exports['runFn6'] = $runFn6;
$exports['mkFn7'] = $mkFn7;
$exports['runFn7'] = $runFn7;
$exports['mkFn8'] = $mkFn8;
$exports['runFn8'] = $runFn8;
$exports['mkFn9'] = $mkFn9;
$exports['runFn9'] = $runFn9;
$exports['mkFn10'] = $mkFn10;
$exports['runFn10'] = $runFn10;
return $exports;
