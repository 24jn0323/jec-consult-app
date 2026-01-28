<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // フォームデータの取得
    $name    = $_POST['user_name'];
    $email   = $_POST['user_email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $date    = date("Y-m-d H:i:s");

    // 保存するデータの配列
    $data = [$date, $name, $email, $subject, $message];

    // CSVファイルを追記モードで開く（ファイルがなければ自動作成されます）
    $file = fopen("data.csv", "a");

    // CSVに書き込み
    fputcsv($file, $data);

    // ファイルを閉じる
    fclose($file);

    // index.phpに戻る（完了ステータス付き）
    header("Location: index.php?status=success");
    exit();
} else {
    // 直接アクセスされた場合はトップに戻す
    header("Location: index.php");
    exit();
}
?>