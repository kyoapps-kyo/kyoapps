<?php
// ** 用于config里面的判断是不是本地环境，facade里面的方法在config读取的时候还没被初始化，不能使用，在此使用自己写的帮助函数
function isLocal($env = false) :bool
{
    getenv('APP_ENV') != 'local' ?: $env = true ;
    return $env;
}
