<?php 
    require_once("../config/config.php");
    require_once("../config/function.php");

function webhookautorobux($service, $username) {
    $url = "https://discord.com/api/webhooks/1073872286739869706/uhghTExDoTwkjI94R4NQxbToX0KIDEV3RoD_YujrLq5-Zgo9UXkX3HyXw9nY9mLhXKIO";

    $timestamp = date("c", strtotime("now"));

    $json_data = json_encode([
        "content" => "***CÓ NGƯỜI VỪA MUA ROBUX***",
        "embeds" => [
            [
                "title" => "SỐ ROBUX KHÁCH MUA",
                "type" => "rich",
                "description" => "**$service**",
                "url" => BASE_URL,
                "timestamp" => $timestamp,
                "color" => hexdec( "00ff00" ),
                "footer" => [
                    "text" => "SUCCESS"
                ],
                "fields" => [
                    [
                        "name" => "SỐ ROBUX",
                        "value" => $service,
                        "inline" => false
                    ],
                    [
                        "name" => "Tài khoản mua",
                        "value" => $username,
                        "inline" => false
                    ]
                ]
            ]
        ]

    ],
    JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, [ 'Content-Type: application/json; charset=utf-8' ]);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
	$response   = curl_exec($ch);
}    
function webhookcaythue($service, $username) {
    $url = "https://discord.com/api/webhooks/1073872286739869706/uhghTExDoTwkjI94R4NQxbToX0KIDEV3RoD_YujrLq5-Zgo9UXkX3HyXw9nY9mLhXKIO";

    $timestamp = date("c", strtotime("now"));

    $json_data = json_encode([
        "content" => "***Có Đơn Đặt Cày Thuê Mới***",
        "embeds" => [
            [
                "title" => "GÓI KHÁCH ĐẶT",
                "type" => "rich",
                "description" => "**$service**",
                "url" => BASE_URL,
                "timestamp" => $timestamp,
                "color" => hexdec( "00ff00" ),
                "footer" => [
                    "text" => "CTV CÀY THUÊ ĐÂU RÒI LÊN SHOP DUYỆT ĐI MẤY EM"
                ],
                "fields" => [
                    [
                        "name" => "Dịch vụ",
                        "value" => $service,
                        "inline" => false
                    ],
                    [
                        "name" => "Tài khoản mua",
                        "value" => $username,
                        "inline" => false
                    ]
                ]
            ]
        ]

    ],
    JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, [ 'Content-Type: application/json; charset=utf-8' ]);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
	$response   = curl_exec($ch);
}
function webhookgamepass($service, $username) {
    $url = "https://discord.com/api/webhooks/1073874117666803752/K4rdvP_C_jTDf3jKfu6ci-pa-zcT3VQ8g7OsdBimcVwYt7ihW8l9lx9VAVGNpX-9ch6l";

    $timestamp = date("c", strtotime("now"));

    $json_data = json_encode([
        "content" => "***Có Đơn Đặt Cày Thuê Mới  *** <@894108203674107914>",
        "embeds" => [
            [
                "title" => "GÓI KHÁCH ĐẶT",
                "type" => "rich",
                "description" => "**$service**",
                "url" => BASE_URL,
                "timestamp" => $timestamp,
                "color" => hexdec( "00ff00" ),
                "footer" => [
                    "text" => "CTV GAMEPASS ĐÂU RÒI LÊN SHOP DUYỆT ĐƠN ĐI NÀO"
                ],
                "fields" => [
                    [
                        "name" => "Dịch vụ",
                        "value" => $service,
                        "inline" => false
                    ],
                    [
                        "name" => "Tài khoản mua",
                        "value" => $username,
                        "inline" => false
                    ]
                ]
            ]
        ]

    ],
    JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, [ 'Content-Type: application/json; charset=utf-8' ]);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
	$response   = curl_exec($ch);
}
function webhookrobux($service, $username) {
    $url = "https://discord.com/api/webhooks/1073875046738710548/qzhIKQswYno0bOCLoJsj_rIT3KpejCiaK99xtGFmk8UW4RPWiOhsAVDnr04b_PjrmMOD";

    $timestamp = date("c", strtotime("now"));

    $json_data = json_encode([
        "content" => "***Có Đơn Đặt Cày Thuê Mới  *** <@894108203674107914>",
        "embeds" => [
            [
                "title" => "GÓI KHÁCH ĐẶT",
                "type" => "rich",
                "description" => "**$service**",
                "url" => BASE_URL,
                "timestamp" => $timestamp,
                "color" => hexdec( "00ff00" ),
                "footer" => [
                    "text" => "CTV ROBUX ĐÂU RÒI LÊN SHOP DUYỆT ĐƠN ĐI NÀO"
                ],
                "fields" => [
                    [
                        "name" => "Dịch vụ",
                        "value" => $service,
                        "inline" => false
                    ],
                    [
                        "name" => "Tài khoản mua",
                        "value" => $username,
                        "inline" => false
                    ]
                ]
            ]
        ]

    ],
    JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, [ 'Content-Type: application/json; charset=utf-8' ]);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
	$response   = curl_exec($ch);
}
// SOURCE CODE BY NGUYỄN ANH VŨ 