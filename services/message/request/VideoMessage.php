<?php
/**
 * Created by PhpStorm.
 * User: hongvi
 * Date: 14-8-10
 * Time: 下午3:59
 */

class VideoMessage extends BaseReqMessage
{
    public $MediaId; 	//视频消息媒体id，可以调用多媒体文件下载接口拉取数据。
    public $ThumbMediaId; 	//视频消息缩略图的媒体id，可以调用多媒体文件下载接口拉取数据。
    public $MsgId; 	//消息id，64位整型
    // 重写init方法，处理该类型消息
    protected function init()
    {
        RespMessage::replyVideo(array(
            'media_id'=>$this->MediaId,
            'title'=>'碉堡了的视频标题',
            'description'=>'视频描述'
        ));
    }

    public static function handle($oMessage, $className=__CLASS__)
    {
        return parent::handle($oMessage, $className);
    }
}