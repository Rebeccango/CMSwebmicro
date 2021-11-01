<?php


function thumbnail($image, $type = "")
{
    if($image){
        // We need to get extension type ( .jpeg , .png ...)
        $ext = pathinfo($image, PATHINFO_EXTENSION);
        // We remove extension from file name so we can append thumbnail type
        $name = rtrim($image, '.' . $ext);
        if ($type != "") {
            $type = '-' . $type;
        }
        // We merge original name + type + extension
        return asset(str_replace('\\', '/', 'storage/' . $name . $type . '.' . $ext));
    }else{
        return asset('images/thumbnail-placeholder.png');
    }
}

function sort_by_price_DESC($a, $b)
{
    return $b->price >= $a->price ? 1 : -1;
}

function getIp()
{
    foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key) {
        if (array_key_exists($key, $_SERVER) === true) {
            foreach (explode(',', $_SERVER[$key]) as $ip) {
                $ip = trim($ip); // just to be safe
                if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false) {
                    return $ip;
                }
            }
        }
    }
}

function calcExchangeRate($amount,$to,$from)
{
    if (is_numeric($amount)) {
        $exrate = App\ExchangeRate::select('rate')->where('sourceCurrency', $from)->where('targetCurrency', $to)->first();
        return $amount * $exrate->rate;
    }
    return $amount;
}
