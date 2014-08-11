<?php
/**
 * Created by PhpStorm.
 * User: hongvi
 * Date: 14-8-10
 * Time: 下午5:10
 */

class RespMessage
{
    /**
     * 回复文本格式消息
     * @param   字符串类型，回复的消息内容
     */
    public static function replyText($content)
    {
        $Msg = new RespTextMessage;
        echo $Msg->getXML($content);
        exit;
    }

    /**
     * 回复图片格式消息
     * @param   string，图片媒体的MediaId    参见微信文档 http://mp.weixin.qq.com/wiki/index.php?title=%E4%B8%8A%E4%BC%A0%E4%B8%8B%E8%BD%BD%E5%A4%9A%E5%AA%92%E4%BD%93%E6%96%87%E4%BB%B6
     */
    public static function replyImage($content)
    {
        $Msg = new RespImageMessage;
        echo $Msg->getXML($content);
        exit;
    }

    /**
     * 回复声音格式消息
     * @param string，声音媒体的MediaId
     */
    public static function replyVoice($content)
    {
        $Msg = new RespVoiceMessage;
        echo $Msg->getXML($content);
        exit;
    }

    /**
     * 回复视频消息
     * @param array，视频消息，包含 media_id/title/description 三个元素
     */
    public static function replyVideo($content)
    {
        $Msg = new RespVideoMessage;
        echo $Msg->getXML($content);
        exit;
    }

    /**
     * 回复音乐消息
     * @param array，音乐消息，包含 title/description/music_url/hq_music_url/media_id 五个元素
     */
    public static function replyMusic($content)
    {
        $Msg = new RespMusicMessage;
        echo $Msg->getXML($content);
        exit;
    }

    /**
     * 回复图文消息
     * @param array，二维数组，图文消息不超过10条，每条消息包含 title/description/picurl/url 四个元素
     */
    public static function replyNews($content)
    {
        $Msg = new RespNewsMessage;
        echo $Msg->getXML($content);
        exit;
    }
}