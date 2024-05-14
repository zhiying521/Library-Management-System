<?php

return [
    "labels" => [
        "search" => "搜索",
        "base_url" => "接口域名",
    ],

    "auth" => [
        "none" => "这个接口需要TOKEN",
        "instruction" => [
            "query" => <<<TEXT
                To authenticate requests, include a query parameter **`:parameterName`** in the request.
                TEXT,
            "body" => <<<TEXT
                To authenticate requests, include a parameter **`:parameterName`** in the body of the request.
                TEXT,
            "query_or_body" => <<<TEXT
                To authenticate requests, include a parameter **`:parameterName`** either in the query string or in the request body.
                TEXT,
            "bearer" => <<<TEXT
                To authenticate requests, include an **`Authorization`** header with the value **`"Bearer :placeholder"`**.
                TEXT,
            "basic" => <<<TEXT
                To authenticate requests, include an **`Authorization`** header in the form **`"Basic {credentials}"`**.
                The value of `{credentials}` should be your username/id and your password, joined with a colon (:),
                and then base64-encoded.
                TEXT,
            "header" => <<<TEXT
                To authenticate requests, include a **`:parameterName`** header with the value **`":placeholder"`**.
                TEXT,
        ],
        "details" => <<<TEXT
            在下面的文档中，所有经过身份验证的端点都标有“需要身份验证”徽章.
            TEXT,
    ],

    "headings" => [
        "introduction" => "介绍",
        "auth" => "身份验证请求",
    ],

    "endpoint" => [
        "request" => "请求",
        "headers" => "页眉",
        "url_parameters" => "URL 参数",
        "body_parameters" => "Body 参数",
        "query_parameters" => "Query 参数",
        "response" => "响应",
        "response_fields" => "响应字段",
        "example_request" => "请求示例",
        "example_response" => "示例响应",
        "responses" => [
            "binary" => "二进制数据",
            "empty" => "空响应",
        ],
    ],

    "try_it_out" => [
        "open" => "本地测试 ⚡",
        "cancel" => "取消 🛑",
        "send" => "发送请求 💥",
        "loading" => "⏱ 发送中...",
        "received_response" => "已收到请求",
        "request_failed" => "请求失败",
        "error_help" => <<<TEXT
            Tip: 请检查您的网络链接.
            如果您是API的维护者，请验证您的API是否正在运行，以及您是否启用了CORS.
            您可以查看开发工具控制台以获取调试信息.
            TEXT,
    ],

    "links" => [
        "postman" => "查看Postman系列",
        "openapi" => "查看OpenAPI规范",
    ],
];
