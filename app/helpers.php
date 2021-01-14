<?php

function setActive($routeName)
{
    return request()->routeIs($routeName) ? 'nav-link active' : 'nav-link';
}