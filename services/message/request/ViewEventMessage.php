<?php
/**
 * Created by PhpStorm.
 * User: hongvi
 * Date: 14-8-10
 * Time: 下午8:58
 */

//菜单跳转点击事件
class ViewEventMessage extends BaseReqMessage
{
    // 重写init方法，处理该类型消息
    public function init()
    {

    }

    public static function handle($oMessage, $className=__CLASS__)
    {
        return parent::handle($oMessage, $className);
    }
}