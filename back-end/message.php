<?php
require_once __DIR__ . "/db.php";
session_start();

header("Content-Type: application/json");

// Create anonymous session hash
if (!isset($_SESSION['chat_hash'])) {
    $_SESSION['chat_hash'] = hash('sha256', random_bytes(32));
}

$method = $_SERVER['REQUEST_METHOD'];

// GET = Fetch messages
if ($method === 'GET') {
    $page = trim($_GET['page'] ?? '');

    if ($page === '') {
        echo json_encode([]);
        exit;
    }

    $stmt = $pdo->prepare("
        SELECT message, created_at
        FROM chat_messages
        WHERE page = :page
        ORDER BY created_at ASC
        LIMIT 50
    ");

    $stmt->execute([':page' => $page]);
    $messages = $stmt->fetchAll();

    // XSS protection
    foreach ($messages as &$m) {
        $m['message'] = htmlspecialchars($m['message'], ENT_QUOTES, 'UTF-8');
    }

    echo json_encode($messages);
    exit;
}

// POST = Send message
if ($method === 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);

    if (!isset($data['message'], $data['page'])) {
        http_response_code(400);
        echo json_encode(["error" => "Invalid input"]);
        exit;
    }

    $message = trim($data['message']);
    $page    = trim($data['page']);

    if ($message === '' || mb_strlen($message) > 200) {
        http_response_code(400);
        echo json_encode(["error" => "Invalid message"]);
        exit;
    }

    // Rate limiting (1 msg / 2 sec)
    $_SESSION['last_msg'] ??= 0;
    if (time() - $_SESSION['last_msg'] < 2) {
        http_response_code(429);
        echo json_encode(["error" => "Slow down"]);
        exit;
    }
    $_SESSION['last_msg'] = time();

    $stmt = $pdo->prepare("
        INSERT INTO chat_messages (session_hash, page, message)
        VALUES (:hash, :page, :message)
    ");

    $stmt->execute([
        ':hash'    => $_SESSION['chat_hash'],
        ':page'    => $page,
        ':message' => $message
    ]);

    echo json_encode(["status" => "ok"]);
    exit;
}

http_response_code(405);
echo json_encode(["error" => "Method not allowed"]);
