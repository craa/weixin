<?php
/**
 * Created by PhpStorm.
 * User: hongvi
 * Date: 14-8-10
 * Time: 下午3:59
 */

class EventMessage extends BaseReqMessage
{
    //事件类型
    public $Event;
    // 重写init方法，处理该类型消息
    protected function init()
    {
        switch($this->Event)
        {
            case 'subscribe':
                SubscribeEventMessage::handle($this);
                break;
            case 'unsubscribe':
                UnsubscribeEventMessage::handle($this);
                break;
            case 'SCAN':
                ScanEventMessage::handle($this);
                break;
            case 'LOCATION':
                LocationEventMessage::handle($this);
                break;
            case 'CLICK':
                ClickEventMessage::handle($this);
                break;
            case 'VIEW':
                ViewEventMessage::handle($this);
                break;
            default:
                echo '';
                exit;
        }
    }
}