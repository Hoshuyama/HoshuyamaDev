<?php
// ファイル読み込み
require_once( __DIR__ . '/pcf_lib/init.php');
global $param;
// ページタイトル
$param['title'] = '予期せぬエラー | 無料ダウンロード';
// ヘッダー表示
getHeader();
?>

<h1 class="page-header">予期せぬエラーが発生しました</h1>

<div class="page-content">
	<p class="mb30 text-danger">
		予期せぬエラーが発生しましたため、お問い合わせが完了しませんでした。
	</p>
</div>

<?php
// フッター表示
getFooter();
