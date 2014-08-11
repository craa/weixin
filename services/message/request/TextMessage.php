<?php
/**
 * Created by PhpStorm.
 * User: hongvi
 * Date: 14-8-10
 * Time: 下午3:59
 */

class TextMessage extends BaseReqMessage
{
    public $Content; 	//文本消息内容
    public $MsgId;  	//消息id，64位整型
    // 重写init方法，处理该类型消息
    protected function init()
    {
        echo 2;
        if($this->Content == '图文'){
            RespMessage::replyNews(array(
                array(
                    'title'=>'大图',
                    'description'=>'描述',
                    'picurl'=>'https://mmbiz.qlogo.cn/mmbiz/u7HRqqgV0kMwWIDPxJ2w3A9x1PeHxQ7DTvXiaOzibjfIsANYKrfFwFcC9xBXjdJTTCncFJXHXgtQTb40ibrvAiarrQ/0',
                    'url'=>'http://m.jinfuzi.com'
                ),
                array(
                    'title'=>'大图',
                    'description'=>'描述',
                    'picurl'=>'https://mmbiz.qlogo.cn/mmbiz/u7HRqqgV0kNJKibRonH2d61Mu0KCZOmtMfTokg0RdIz2xdQ59an9YML5ibDibw2o5LSLIHff1Tv0W4iaCLU7uTmfhw/0',
                    'url'=>'http://m.jinfuzi.com'
                ),
                array(
                    'title'=>'大图',
                    'description'=>'描述',
                    'picurl'=>'https://mmbiz.qlogo.cn/mmbiz/u7HRqqgV0kMwWIDPxJ2w3A9x1PeHxQ7DTvXiaOzibjfIsANYKrfFwFcC9xBXjdJTTCncFJXHXgtQTb40ibrvAiarrQ/0',
                    'url'=>'http://m.jinfuzi.com'
                ),
                array(
                    'title'=>'大图',
                    'description'=>'描述',
                    'picurl'=>'https://mmbiz.qlogo.cn/mmbiz/u7HRqqgV0kMwWIDPxJ2w3A9x1PeHxQ7DTvXiaOzibjfIsANYKrfFwFcC9xBXjdJTTCncFJXHXgtQTb40ibrvAiarrQ/0',
                    'url'=>'http://m.jinfuzi.com'
                )
            ));
        }
    }

    public static function handle($oMessage, $className=__CLASS__)
    {
        return parent::handle($oMessage, $className);
    }
}