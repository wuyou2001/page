<?php
// 设置响应头部为 JSON 格式，并允许跨域（本地开发方便）
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Content-Type');

// 仅允许 POST 请求
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'status' => 'error',
        'message' => '只允许 POST 请求方式'
    ]);
    exit;
}

// 获取前端 fetch 传递过来的原始 JSON 字符串
$rawInput = file_get_contents('php://input');
$data = json_decode($rawInput, true);

// 提取并清洗数据
$name = isset($data['name']) ? trim(htmlspecialchars($data['name'])) : '';
$message = isset($data['message']) ? trim(htmlspecialchars($data['message'])) : '';

// 校验
if (empty($name) || empty($message)) {
    http_response_code(400);
    echo json_encode([
        'status' => 'error',
        'message' => '姓名或留言内容不能为空'
    ]);
    exit;
}

// 模拟业务逻辑处理（例如拼接欢迎信息，或者写入数据库等）
$reply = "你好，{$name}！PHP 已经成功接收并处理了你的留言：\"{$message}\"";

// 返回处理结果给前端
echo json_encode([
    'status' => 'success',
    'message' => $reply,
    'timestamp' => date('Y-m-d H:i:s')
], JSON_UNESCAPED_UNICODE);
