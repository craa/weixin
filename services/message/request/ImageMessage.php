<?php
/**
 * Created by PhpStorm.
 * User: hongvi
 * Date: 14-8-10
 * Time: 下午3:59
 */

class ImageMessage extends BaseReqMessage
{
    //图片链接
    public $PicUrl;
    //图片消息媒体id，可以调用多媒体文件下载接口拉取数据。
    public $MediaId;
    //消息id，64位整型
    public $MsgId;
    // 重写init方法，处理该类型消息
    protected function init()
    {
        RespMessage::replyImage($this->MediaId);
    }

    public static function handle($oMessage, $className=__CLASS__)
    {
        return parent::handle($oMessage, $className);
    }
}