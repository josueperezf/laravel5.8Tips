<?php
function rutaActiva($path){
    return  request()->is($path) ? 'active' : '';
}