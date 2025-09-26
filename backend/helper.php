<?php
function js_log($content)
{
    echo '<script>console.dir(';
    echo func_num_args() === 1 ? json_encode(func_get_arg(0)) : json_encode(func_get_args());
    echo ')</script>';
}
