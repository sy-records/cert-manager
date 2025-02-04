<?php

return [
    'example.com' => [
        'resourceTypes' => ['cdn'],
        'fullchain' => '/www/server/panel/vhost/cert/example.com/fullchain.pem',
        'privkey' => '/www/server/panel/vhost/cert/example.com/privkey.pem',
        'removeOld' => true, // 删除旧证书
        // 其他需要合并的证书路径
        'otherFullchain' => [
            '/www/server/panel/vhost/cert/example1.com/fullchain.pem',
        ],
        'otherPrivkey' => [
            '/www/server/panel/vhost/cert/example1.com/otherprivkey.pem',
        ],
        // 复制到其他目录
        'copyFullchainTo' => [
            '/www/server/panel/vhost/cert/example2.com/fullchain.pem',
        ],
        'copyPrivkeyTo' => [
            '/www/server/panel/vhost/cert/example2.com/privkey.pem',
        ],
    ]
];
