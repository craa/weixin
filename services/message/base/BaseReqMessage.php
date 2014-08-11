<?php
/**
 * Created by PhpStorm.
 * User: hongvi
 * Date: 14-8-10
 * Time: 下午3:54
 */

class BaseReqMessage
{
    //开发者微信号
    public $ToUserName;
    //发送方帐号（一个OpenID）
    public $FromUserName;
    //消息创建时间 （整型）
    public $CreateTime;
    //消息类型
    public $MsgType;
    private static $_instance;
    public function __construct($oMessage)
    {
        foreach($oMessage as $key=>$value)
        {
            $this->$key = $value;
        }

        $this->init();
        $this->debugMessage();
    }

    /**
     * 如果在配置里 weixin_debug 属性没有设置为 false，且该类型消息没有处理，则输出消息属性到用户微信
     */
    protected function debugMessage()
    {
        if(WEIXIN_DEBUG){
            $content = "消息属性：\n";
            foreach($this as $key=>$value)
            {
                $content .= ''.$key.'：'.$value."\n";
            }
            RespMessage::replyText($content);
        }
    }

    /**
     * 该方法将自动执行
     */
    protected function init()
    {

    }

    public static function handle($oMessage, $className=__CLASS__)
    {
        if(self::$_instance === null){
            self::$_instance = new $className($oMessage);
        }

        return self::$_instance;
    }
}