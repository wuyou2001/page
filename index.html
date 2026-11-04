<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML 与 PHP 数据交互示例</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            background-color: #f4f6f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .card {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            width: 360px;
        }
        h2 { margin-top: 0; color: #333; }
        .form-group { margin-bottom: 16px; }
        label { display: block; margin-bottom: 6px; color: #666; font-size: 14px; }
        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 14px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #0066cc;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.2s;
        }
        button:hover { background-color: #0052a3; }
        #response-box {
            margin-top: 20px;
            padding: 12px;
            border-radius: 6px;
            font-size: 14px;
            display: none;
        }
        .success { background-color: #e6f4ea; color: #137333; border: 1px solid #ceead6; }
        .error { background-color: #fce8e6; color: #c5221f; border: 1px solid #fad2cf; }
    </style>
</head>
<body>

<div class="card">
    <h2>用户留言</h2>
    
    <div class="form-group">
        <label for="username">姓名：</label>
        <input type="text" id="username" placeholder="请输入你的名字">
    </div>

    <div class="form-group">
        <label for="message">留言内容：</label>
        <input type="text" id="message" placeholder="随便说点什么...">
    </div>

    <button id="submit-btn" onclick="sendData()">发送到 PHP</button>

    <div id="response-box"></div>
</div>

<script>
async function sendData() {
    const name = document.getElementById('username').value.trim();
    const msg = document.getElementById('message').value.trim();
    const responseBox = document.getElementById('response-box');

    if (!name || !msg) {
        responseBox.className = 'error';
        responseBox.style.display = 'block';
        responseBox.innerText = '请填写完整信息！';
        return;
    }

    // 组织需要发送的数据
    const payload = {
        name: name,
        message: msg
    };

    try {
        // 使用 Fetch API 向后端 api.php 发送 POST 请求
        const response = await fetch('api.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(payload)
        });

        // 解析 PHP 返回的 JSON 数据
        const result = await response.json();

        if (result.status === 'success') {
            responseBox.className = 'success';
            responseBox.innerHTML = `<strong>服务端响应：</strong><br>${result.message}<br><small>处理时间：${result.timestamp}</small>`;
        } else {
            responseBox.className = 'error';
            responseBox.innerText = `错误: ${result.message}`;
        }
    } catch (err) {
        responseBox.className = 'error';
        responseBox.innerText = '请求失败，请检查 PHP 服务是否正常启动！';
        console.error(err);
    }

    responseBox.style.display = 'block';
}
</script>

</body>
</html>
