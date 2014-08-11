<?php
/**
 * Created by PhpStorm.
 * User: hongvi
 * Date: 14-8-10
 * Time: 下午3:59
 */

class RespNewsMessage extends BaseRespMessage
{
    public function getXML($message)
    {
        $articleCount = count($message);
        $items = $this->packageItems($message);
        $tpl = "<xml>
                <ToUserName><![CDATA[%s]]></ToUserName>
                <FromUserName><![CDATA[%s]]></FromUserName>
                <CreateTime>%s</CreateTime>
                <MsgType><![CDATA[news]]></MsgType>
                <ArticleCount>%s</ArticleCount>
                <Articles>%s</Articles>
                </xml>";
        return sprintf($tpl, FROM_USER_NAME, TO_USER_NAME, time(), $articleCount, $items);
    }

    protected function packageItems($items)
    {
        $itemTpl = "<item>
                    <Title><![CDATA[%s]]></Title>
                    <Description><![CDATA[%s]]></Description>
                    <PicUrl><![CDATA[%s]]></PicUrl>
                    <Url><![CDATA[%s]]></Url>
                    </item>";
        $ret = '';
        foreach($items as $item)
        {
            $ret .= sprintf($itemTpl, $item['title'], $item['description'], $item['picurl'], $item['url']);
        }
        return $ret;
    }
}