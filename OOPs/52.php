<?php
function get_var($varname)
{
    global $$varname;
    echo $$varname;
}

show_var('_POST');