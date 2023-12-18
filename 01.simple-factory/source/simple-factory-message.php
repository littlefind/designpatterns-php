<?php

interface Message
{
    public function send(string $msg);
}

class AliYunMessage implements Message
{
    public function send(string $msg): string
    {
        return "阿里云发送消息: {$msg}" . PHP_EOL;
    }
}

class BaiduYunMessage implements Message
{
    public function send(string $msg): string
    {
        return "百度云发送消息: {$msg}" . PHP_EOL;
    }
}

class JiGuangMessage implements Message
{
    public function send(string $msg) : string
    {
        return "极光发送消息: {$msg}" . PHP_EOL;
    }
}

class MessageFactory
{
    public static function createFactory($type)
    {
        switch ($type) {
            case "Ali":
                return new AliyunMessage();
            case "Baidu":
                return new BaiduYunMessage();
            case "JiGuang":
                return new JiGuangMessage();
            default:
                return null;
        }
    }
}

$aliMessage = MessageFactory::createFactory("Ali");
$baiduMessage = MessageFactory::createFactory("Baidu");
$jiGuangMessage = MessageFactory::createFactory("JiGuang");
echo $aliMessage->send("新年快乐");
echo $baiduMessage->send("新年快乐");
echo $jiGuangMessage->send("新年快乐");
