<?php
/**
 * Created by PhpStorm.
 * User: liurong
 * Date: 2017/5/18
 * Time: 上午9:57
 */

if (!function_exists('db_trans')) {
    /**
     * 数据库事务
     * @param void $block
     * @return mixed
     */
    function db_transaction ($block) {
        return \Illuminate\Support\Facades\DB::transaction($block);
    }
}