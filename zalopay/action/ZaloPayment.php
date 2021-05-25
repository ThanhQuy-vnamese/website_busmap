<?php
declare(strict_types=1);

class ZaloPayment
{
    const CREATED_ORDER_LINK = "https://sandbox.zalopay.com.vn/v001/tpe/createorder";
    const KEY1 = "9phuAOYhan4urywHTh0ndEXiV3pKHr5Q";
    const KEY2 = "Iyz2habzyr7AG8SgvoBCbKwKi3UzlLi3";

    public function callApi(string $bankCode): void
    {
        $config = [
            "appid" => 553,
            "key1" => self::KEY1,
            "key2" => self::KEY2,
            "endpoint" => self::CREATED_ORDER_LINK
        ];

        $embeddata = [
            "promotioninfo" => "",
            "bankgroup" => "ATM",
            "merchantinfo" => "embeddata123",
        ];
        $items = [
            ["itemid" => "knb", "itemname" => "kim nguyen bao", "itemprice" => 198400, "itemquantity" => 1]
        ];
        $order = [
            "appid" => $config["appid"],
            "apptime" => round(microtime(true) * 1000),
            "apptransid" => date("ymd") . "_" . uniqid(),
            "appuser" => "demo",
            "item" => json_encode($items, JSON_UNESCAPED_UNICODE),
            "embeddata" => json_encode($embeddata, JSON_UNESCAPED_UNICODE),
            "amount" => 50000,
            "description" => "ZaloPay Intergration Demo",
            "bankcode" => $bankCode,
        ];

        $data = $order["appid"] . "|" . $order["apptransid"] . "|" . $order["appuser"] . "|" . $order["amount"]
            . "|" . $order["apptime"] . "|" . $order["embeddata"] . "|" . $order["item"];
        $order["mac"] = hash_hmac("sha256", $data, $config["key1"]);

        $context = stream_context_create([
            "http" => [
                "header" => "Content-type: application/x-www-form-urlencoded\r\n",
                "method" => "POST",
                "content" => http_build_query($order)
            ]
        ]);

        $resp = file_get_contents($config["endpoint"], false, $context);
        $result = json_decode($resp, true);
        header('location: ' . $result['orderurl']);
    }
}
