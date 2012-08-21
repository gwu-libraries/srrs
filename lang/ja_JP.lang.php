<?php
/**
 * Japanese (日本語) translation file.
 * @translator Shiraishi Yutaka
 */

/* Do not modify this section */

global $strings;
global $email;
global $dates;
global $charset;
global $letters;
global $days_full;
global $days_abbr;
global $days_two;
global $days_letter;
global $months_full;
global $months_abbr;
global $days_letter;
/******************************/

$charset ='utf-8';

$days_full = array('日曜日','月曜日','火曜日','水曜日','木曜日','金曜日','土曜日');

$days_abbr = array('日曜日','月曜日','火曜日','水曜日','木曜日','金曜日','土曜日');

$days_two  = array('日','月','火','水','木','金','土');

$days_letter = array('日','月','火','水','木','金','土');

$months_full = array('1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月');

$months_abbr = array('1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月');

$letters = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');

/***
  DATE FORMATTING - PHP strftime（)syntax
 ***/

$dates['general_date'] = '%Y/%m/%d';

$dates['general_datetime'] = '%Y/%m/%d @';

$dates['res_check'] = '%A %Y/%m/%d';

$dates['schedule_daily'] = '%A<p/>%Y/%m/%d';

$dates['header'] = '%Y年%m月%d日，%A';

$dates['jumpbox'] = '%Y%m%d';

/***
  STRING TRANSLATIONS
  All of these strings should be translated from the English value (right side of the equals sign) to Japanese.
  - Please keep the sprintf formatting (%s) placeholders where they are unless you are sure it needs to be moved.
 ***/

$strings['hours'] = '時間';
$strings['minutes'] = '分';

$strings['mm'] = '月';

$strings['dd'] = '日';

$strings['yyyy'] = '年';
$strings['am'] = '午前';
$strings['pm'] = '午後';

$strings['Administrator'] = '管理者';
$strings['Welcome Back'] = 'ようこそ、%sさん';
$strings['Log Out'] = 'ログアウト';
$strings['My Control Panel'] = 'コントロールパネル';
$strings['Help'] = 'ヘルプ';
$strings['Manage Schedules'] = 'スケジュールの管理';
$strings['Manage Users'] = 'ユーザーの管理';
$strings['Manage Resources'] = '会議室の管理';
$strings['Manage User Training'] = 'ユーザトレーニングの管理';
$strings['Manage Reservations'] = '予約の管理';
$strings['Email Users'] = 'ユーザーにメールを送信';
$strings['Export Database Data'] = 'データベースデータをエクスポートします';
$strings['Reset Password'] = 'パスワードのリセット';
$strings['System Administration'] = 'システム管理';
$strings['Successful update'] = '更新は成功しました!';
$strings['Update failed!'] = '更新は失敗しました!';
$strings['Manage Blackout Times'] = 'ブラックアウト時間の管理';
$strings['Forgot Password'] = 'パスワードを忘れました';
$strings['Manage My Email Contacts'] = 'メール情報の管理';
$strings['Choose Date'] = '日付の選択';
$strings['Modify My Profile'] = 'プロフィールを変更';
$strings['Register'] = '登録';
$strings['Processing Blackout'] = 'ブラックアウト時間の処理';
$strings['Processing Reservation'] = '予約の処理';
$strings['Online Scheduler [Read-only Mode]'] = 'オンラインスケジューラー[読み取り専用モード」';
$strings['Online Scheduler'] = 'オンラインスケジューラー';
$strings['phpScheduleIt Statistics'] = 'phpScheduleItの統計';
$strings['User Info'] = 'ユーザーインフォメーション:';

$strings['Could not determine tool'] = 'ツールを決定できませんでした。 コントロールパネルに戻り、もう一度お試しください。';
$strings['This is only accessable to the administrator'] = '管理者のみアクセスできます。';
$strings['Back to My Control Panel'] = 'コントロールパネルに戻る';
$strings['That schedule is not available.'] = 'このスケジュールは利用できません。';
$strings['You did not select any schedules to delete.'] = '削除対象のスケジュールが選択されていません。';
$strings['You did not select any members to delete.'] = '削除対象のメンバーが選択されていません。';
$strings['You did not select any resources to delete.'] = '削除対象の会議室が選択されていません。';
$strings['Schedule title is required.'] = 'スケジュールのタイトルが必要です。';
$strings['Invalid start/end times'] = '開始時刻もしくは終了時刻が無効です。';
$strings['View days is required'] = '日付が必要です';
$strings['Day offset is required'] = '日付のオフセットが必要です';
$strings['Admin email is required'] = '管理者のメールアドレスが必要です';
$strings['Resource name is required.'] = '会議室名が必要です。';
$strings['Valid schedule must be selected'] = '有効なスケジュールが選択されていません。';
$strings['Minimum reservation length must be less than or equal to maximum reservation length.'] = '最短予約時間は最長予約時間と同じかそれ以下の長さにしてください。';
$strings['Your request was processed successfully.'] = '要求は正しく処理されました。';
$strings['Go back to system administration'] = 'システム管理に戻るか、';
$strings['Or wait to be automatically redirected there.'] = 'または自動的にリダイレクトされるのをお待ちください。';
$strings['There were problems processing your request.'] = '与えられた要求の処理中に問題がありました。';
$strings['Please go back and correct any errors.'] = 'ひとつ前に戻り、エラーを訂正してください。';
$strings['Login to view details and place reservations'] = '予約の詳細を確認、予約の指定のためにログインします。';
$strings['Memberid is not available.'] = 'メンバーID:%sが利用できません。';

$strings['Schedule Title'] = 'スケジュールのタイトル';
$strings['Start Time'] = '開始時刻';
$strings['End Time'] = '終了時刻';
$strings['Time Span'] = '時間';
$strings['Weekday Start'] = 'ウィークデイの開始';
$strings['Admin Email'] = 'Adminへメール';

$strings['Default'] = 'デフォルト';
$strings['Reset'] = 'リセット';
$strings['Edit'] = '編集';
$strings['Delete'] = '削除';
$strings['Cancel'] = 'キャンセル';
$strings['View'] = 'ビュー';
$strings['Modify'] = '変更';
$strings['Save'] = 'セーブ';
$strings['Back'] = 'バック';
$strings['Next'] = '次';
$strings['Close Window'] = 'ウインドウを閉じる';
$strings['Search'] = '検索';
$strings['Clear'] = 'クリア';

$strings['Days to Show'] = 'ショーへの幾日';
$strings['Reservation Offset'] = '予約のオフセット';
$strings['Hidden'] = '隠された';
$strings['Show Summary'] = 'ショーの概要';
$strings['Add Schedule'] = 'スケジュールの追加';
$strings['Edit Schedule'] = 'スケジュールの編集';
$strings['No'] = 'いいえ';
$strings['Yes'] = 'はい';
$strings['Name'] = '名前';
$strings['First Name'] = '日本語お名前';
$strings['Last Name'] = 'ローマ字';
$strings['Resource Name'] = '会議室名';
$strings['Email'] = 'メール';
$strings['Institution'] = '部署名';
$strings['Phone'] = '電話';
$strings['Password'] = 'パスワード';
$strings['Permissions'] = '権限';
$strings['View information about'] = '%s %sに関する情報を表示';
$strings['Send email to'] = 'メールを%s %sへ送信';
$strings['Reset password for'] = '%s %sのパスワードをリセット';
$strings['Edit permissions for'] = '%s %sの権限を変更';
$strings['Position'] = 'ポジション';
$strings['Password (6 char min)'] = 'パスワード(最低%s文字)';
$strings['Re-Enter Password'] = 'パスワードの再入力';

$strings['Sort by descending last name'] = '名字による並べ替え(逆順)';
$strings['Sort by descending email address'] = 'メールアドレスによる並べ替え(逆順)';
$strings['Sort by descending institution'] = 'チームによる並べ替え(逆順)';
$strings['Sort by ascending last name'] = '名字による並べ替え(昇順)';
$strings['Sort by ascending email address'] = 'メールアドレスによる並べ替え(昇順)';
$strings['Sort by ascending institution'] = 'チームによる並べ替え(昇順)';
$strings['Sort by descending resource name'] = '会議室名による並べ替え(逆順)';
$strings['Sort by descending location'] = '場所による並べ替え(逆順)';
$strings['Sort by descending schedule title'] = 'スケジュールのタイトルによる並べ替え(逆順)';
$strings['Sort by ascending resource name'] = '会議室名による並べ替え(昇順)';
$strings['Sort by ascending location'] = '場所による並べ替え(昇順)';
$strings['Sort by ascending schedule title'] = 'スケジュールのタイトルによる並べ替え(昇順)';
$strings['Sort by descending date'] = '日付による並べ替え(逆順)';
$strings['Sort by descending user name'] = 'ユーザ名による並べ替え(逆順)';
$strings['Sort by descending start time'] = '開始時刻による並べ替え(逆順)';
$strings['Sort by descending end time'] = '終了時刻による並べ替え(逆順)';
$strings['Sort by ascending date'] = '日付による並べ替え(昇順)';
$strings['Sort by ascending user name'] = 'ユーザ名による並べ替え(昇順)';
$strings['Sort by ascending start time'] = '開始時刻による並べ替え(昇順)';
$strings['Sort by ascending end time'] = '終了時刻による並べ替え(昇順)';
$strings['Sort by descending created time'] = '作成日時による並べ替え(逆順)';
$strings['Sort by ascending created time'] = '作成日時による並べ替え(昇順)';
$strings['Sort by descending last modified time'] = '最新の更新時刻による並べ替え(逆順)';
$strings['Sort by ascending last modified time'] = '最新の更新時刻による並べ替え(昇順)';

$strings['Search Users'] = 'ユーザー検索';
$strings['Location'] = '場所';
$strings['Schedule'] = 'スケジュール';
$strings['Phone'] = '電話';
$strings['Notes'] = 'ノート';
$strings['Status'] = '状態';
$strings['All Schedules'] = 'すべてのスケジュール';
$strings['All Resources'] = 'すべての会議室';
$strings['All Users'] = 'すべてのユーザー';

$strings['Edit data for'] = '%sのデータの編集';
$strings['Active'] = 'アクティブ';
$strings['Inactive'] = 'インアクティブ';
$strings['Toggle this resource active/inactive'] = 'アクティブ\/インアクティブの切り替え';
$strings['Minimum Reservation Time'] = '最短予約時間';
$strings['Maximum Reservation Time'] = '最長予約時間';
$strings['Auto-assign permission'] = 'オートアサイン権限';
$strings['Add Resource'] = '会議室を追加';
$strings['Edit Resource'] = '会議室の編集';
$strings['Allowed'] = '割り当てられる';
$strings['Notify user'] = 'ユーザーへ通知';
$strings['User Reservations'] = 'ユーザー予約';
$strings['Date'] = '日付';
$strings['User'] = 'ユーザー';
$strings['Email Users'] = 'ユーザーへメール';
$strings['Subject'] = 'サブジェクト';
$strings['Message'] = 'メッセージ';
$strings['Please select users'] = 'ユーザーを選んでください。';
$strings['Send Email'] = 'メールを送信';
$strings['problem sending email'] = '残念ながら、メールの送信に問題がありました。後でもう一度お試しください。';
$strings['The email sent successfully.'] = 'メールの送信に成功しました。';
$strings['do not refresh page'] = 'ページのリロードは実行しないでください。リロードした場合、メールが重複して送信されます。';
$strings['Return to email management'] = 'メール管理へ戻る';
$strings['Please select which tables and fields to export'] = 'エクスポートするテーブルとフィールドを選択してください :';
$strings['all fields'] = '-すべてのフィールド-';
$strings['HTML'] = 'HTML';
$strings['Plain text'] = 'プレーン・テキスト';
$strings['XML'] = 'XML';
$strings['CSV'] = 'CSV';
$strings['Export Data'] = 'エクスポート・データ';
$strings['Reset Password for'] = '%sのパスワードをリセット';
$strings['Please edit your profile'] = 'プロフィールの編集';
$strings['Please register'] = '登録';
$strings['Keep me logged in'] = 'ログイン情報を保持<p/>( Cookie を要求します)';
$strings['Edit Profile'] = 'プロフィールの編集';
$strings['Register'] = '登録';
$strings['Please Log In'] = 'ログイン';
$strings['Email address'] = 'メールアドレス';
$strings['Password'] = 'パスワード';
$strings['First time user'] = '初回のユーザー';
$strings['Click here to register'] = '登録はここをクリック';
$strings['Register for phpScheduleIt'] = 'phpScheduleItに登録';
$strings['Log In'] = 'ログイン';
$strings['View Schedule'] = 'スケジュールの表示';
$strings['View a read-only version of the schedule'] = 'スケジュールの表示(読み取り専用版)';
$strings['I Forgot My Password'] = 'パスワードを忘れました';
$strings['Retreive lost password'] = 'パスワードの再取得';
$strings['Get online help'] = 'オンライン・ヘルプを参照';
$strings['Language'] = '言語';
$strings['(Default)'] = '（デフォルト）';

$strings['My Announcements'] = 'アナウンスメント';
$strings['My Reservations'] = '予約';
$strings['My Permissions'] = '権限';
$strings['My Quick Links'] = 'クイックリンク';
$strings['Announcements as of'] = '%sのアナウンスメント';
$strings['There are no announcements.'] = 'アナウンスメントはありません。';
$strings['Resource'] = '会議室';
$strings['Created'] = '作成';
$strings['Last Modified'] = '最終変更';
$strings['View this reservation'] = '予約の表示';
$strings['Modify this reservation'] = '予約の修正';
$strings['Delete this reservation'] = '予約の削除';
$strings['Bookings'] = '予約';
$strings['Change My Profile Information/Password'] = 'プロフィール情報、パスワードの変更';
$strings['Manage My Email Preferences'] = 'メール設定の管理';
$strings['Mass Email Users'] = 'Mass email ユーザー';
$strings['Search Scheduled Resource Usage'] = '予約の検索';
$strings['Show Resources'] = '会議室の表示';
$strings['Export Database Content'] = 'エクスポートデータベースの内容';
$strings['View System Stats'] = 'システム統計情報の表示';
$strings['Email Administrator'] = '管理者へメール';

$strings['Email me when'] = '次の場合には私にメールを送信してください:';
$strings['I place a reservation'] = '予約がされた場合';
$strings['My reservation is modified'] = '自分の予約が変更された場合';
$strings['My reservation is deleted'] = '自分の予約が削除された場合';
$strings['I prefer'] = '私は好みます:';
$strings['Your email preferences were successfully saved'] = 'メールの設定が正しく保存されました!';
$strings['Return to My Control Panel'] = 'コントロールパネルへ戻る';

$strings['Please select the starting and ending times'] = '開始時刻、終了時刻を選択して下さい:';
$strings['Please change the starting and ending times'] = '開始時刻、終了時刻を変更して下さい:';
$strings['Reserved time'] = '予約時間:';
$strings['Minimum Reservation Length'] = '最短予約時間:';
$strings['Maximum Reservation Length'] = '最長予約時間:';
$strings['Reserved for'] = '予約されています:';
$strings['Will be reserved for'] = '予約されます:';
$strings['N/A'] = 'N/A';
$strings['Update all recurring records in group'] = 'グループ内のすべての繰り返し登録を更新しますか？';
$strings['Delete?'] = '削除しますか？';
$strings['Never'] = '-- 決して --';
$strings['Days'] = '日';
$strings['Weeks'] = '週';
$strings['Months (date)'] = '月(日付)';
$strings['Months (day)'] = '月(日)';
$strings['First Days'] = '1日目';
$strings['Second Days'] = '2日目';
$strings['Third Days'] = '3日目';
$strings['Fourth Days'] = '4日目';
$strings['Last Days'] = '最終日';
$strings['Repeat every'] = '繰り返し:';
$strings['Repeat on'] = '繰り返し:';
$strings['Repeat until date'] = '日付まで繰り返し:';
$strings['Choose Date'] = '日付の選択';
$strings['Summary'] = '概要';

$strings['View schedule'] = 'スケジュールを表示:';
$strings['My Reservations'] = '予約';
$strings['My Past Reservations'] = '過去の予約';
$strings['Other Reservations'] = '他の予約';
$strings['Other Past Reservations'] = '他の過去の予約';
$strings['Blacked Out Time'] = 'ブラックアウトされた時間';
$strings['Set blackout times'] = 'ブラックアウト時間の設定%s %s';
$strings['Reserve on'] = '予約 %s %s';
$strings['Prev Week'] = '« 先週';
$strings['Prev Month'] = '&laquo; 先月';
$strings['Jump 1 week back'] = '1週前へジャンプ';
$strings['Prev days'] = '&#8249; %d日前';
$strings['Previous days'] = '&#8249; %d日前';
$strings['This Week'] = '今週';
$strings['Jump to this week'] = 'この週へジャンプ';
$strings['Next days'] = '次の%d日間&#8250;';
$strings['Next Week'] = '次週 »';
$strings['Next Month'] = '来月 &raquo;';
$strings['Jump To Date'] = '日付を指定してジャンプ';
$strings['View Monthly Calendar'] = '月例カレンダーの表示';
$strings['Open up a navigational calendar'] = 'ナビゲーション・カレンダーを開く';

$strings['View stats for schedule'] = 'スケジュールの統計を表示:';
$strings['At A Glance'] = 'At a glance';
$strings['Total Users'] = '総ユーザー数:';
$strings['Total Resources'] = '総会議室数:';
$strings['Total Reservations'] = '総予約数:';
$strings['Max Reservation'] = '最長予約:';
$strings['Min Reservation'] = '最短予約:';
$strings['Avg Reservation'] = '平均予約:';
$strings['Most Active Resource'] = '最大アクティブ会議室:';
$strings['Most Active User'] = '最大アクティブユーザー:';
$strings['System Stats'] = 'システム統計';
$strings['phpScheduleIt version'] = 'phpScheduleIt版:';
$strings['Database backend'] = 'データベースバックエンド:';
$strings['Database name'] = 'データベース名:';
$strings['PHP version'] = 'PHP版:';
$strings['Server OS'] = 'サーバー OS:';
$strings['Server name'] = 'サーバ名:';
$strings['phpScheduleIt root directory'] = 'phpScheduleItのルートディレクトリ:';
$strings['Using permissions'] = '許可を使用:';
$strings['Using logging'] = 'ロギングを使用:';
$strings['Log file'] = 'ログファイル:';
$strings['Admin email address'] = 'Admin メールアドレス:';
$strings['Tech email address'] = 'Tech メールアドレス:';
$strings['CC email addresses'] = 'CCのメールアドレス:';
$strings['Reservation start time'] = '予約開始時刻:';
$strings['Reservation end time'] = '予約終了時刻:';
$strings['Days shown at a time'] = '一度に表示される日数:';
$strings['Reservations'] = '予約';
$strings['Return to top'] = 'トップへ戻る';
$strings['for'] = 'のため';

$strings['Select Search Criteria'] = '検索基準を選択して下さい';
$strings['Schedules'] = 'スケジュール:';
$strings['All Schedules'] = 'すべてのスケジュール';
$strings['Hold CTRL to select multiple'] = 'Ctrlを押すことにより複数選択可';
$strings['Users'] = 'ユーザー:';
$strings['All Users'] = 'すべてのユーザー';
$strings['Resources'] = '会議室';
$strings['All Resources'] = 'すべての会議室';
$strings['Starting Date'] = '開始日:';
$strings['Ending Date'] = '終了日:';
$strings['Starting Time'] = '起動時間:';
$strings['Ending Time'] = '終了時刻:';
$strings['Output Type'] = '出力タイプ:';
$strings['Manage'] = '管理する';
$strings['Total Time'] = '合計時間';
$strings['Total hours'] = '合計時間:';
$strings['% of total resource time'] = '総会議室の時間の割合[%]';
$strings['View these results as'] = '結果を表示:';
$strings['Edit this reservation'] = 'この予約の編集';
$strings['Search Results'] = '検索結果';
$strings['Search Resource Usage'] = '会議室の使用状況の検索';
$strings['Search Results found'] = '検索結果: %d の予約が見つかりました。';
$strings['Try a different search'] = '他の検索をお試しください。';
$strings['Search Run On'] = 'Run On の検索:';
$strings['Member ID'] = 'メンバー ID';
$strings['Previous User'] = '« 前のユーザー';
$strings['Next User'] = '次のユーザー»';

$strings['No results'] = 'ヒットしませんでした。';
$strings['That record could not be found.'] = 'その登録は見つけることができませんでした。';
$strings['This blackout is not recurring.'] = 'このブラックアウト時間は繰り返していません。';
$strings['This reservation is not recurring.'] = 'この予約は繰り返していません。';
$strings['There are no records in the table.'] = '%s のテーブルには登録がありません。';
$strings['You do not have any reservations scheduled.'] = 'スケジュールされた予約がありません。';
$strings['You do not have permission to use any resources.'] = '会議室を使用する許可がありません。';
$strings['No resources in the database.'] = '会議室の情報がデータベースにありません。';
$strings['There was an error executing your query'] = 'リクエストした内容に間違いがあります。:';

$strings['That cookie seems to be invalid'] = 'その Cookie は無効のようです';
$strings['We could not find that logon in our database.'] = 'データベースにそのログオンを見つけることができませんでした。';
$strings['That password did not match the one in our database.'] = 'そのパスワードはデータベースに一致しませんでした。';
$strings['You can try'] = '<br />以下を試すことができます。:<br />メールアドレスを登録<br />または:<br />ログインをもう一度試す。';
$strings['A new user has been added'] = '新しいユーザーが追加されました';
$strings['You have successfully registered'] = '登録は成功しました!';
$strings['Continue'] = '続行...';
$strings['Your profile has been successfully updated!'] = 'プロフィールは正しく更新されました!';
$strings['Please return to My Control Panel'] = 'コントロールパネルへ戻る';
$strings['Valid email address is required.'] = '-有効なメールアドレスが必要です。';
$strings['First name is required.'] = '-日本語お名前が必要です。';
$strings['Last name is required.'] = '-ローマ字お名前が必要です。';
$strings['Phone number is required.'] = '-電話番号が必要です。';
$strings['That email is taken already.'] = '-そのメールアドレスは既に使用されています。<p/>他のアドレスでもう一度お試しください。';
$strings['Min 6 character password is required.'] = '-パスワードには最低%s文字が必要です。';
$strings['Passwords do not match.'] = '-パスワードが一致しません。';

$strings['Per page'] = 'ページごと:';
$strings['Page'] = 'ページ:';

$strings['Your reservation was successfully created'] = '会議室の予約の作成に成功しました';
$strings['Your reservation was successfully modified'] = '会議室の予約の変更に成功しました';
$strings['Your reservation was successfully deleted'] = '会議室の予約の削除に成功しました';
$strings['Your blackout was successfully created'] = 'ブラックアウト時間の作成に成功しました';
$strings['Your blackout was successfully modified'] = 'ブラックアウト時間の変更に成功しました';
$strings['Your blackout was successfully deleted'] = 'ブラックアウト時間の削除に成功しました';
$strings['for the follwing dates'] = '以下の日程に関して:';
$strings['Start time must be less than end time'] = '開始時刻は終了時刻より前の時刻でなければなりません。';
$strings['Current start time is'] = '現在の開始時刻は次のとおりです:';
$strings['Current end time is'] = '現在の終了時刻は次のとおりです:';
$strings['Reservation length does not fall within this resource\'s allowed length.'] = 'この会議室に許された予約時間の範囲を超えての予約はできません。';
$strings['Your reservation is'] = '予約は次のとおりです:';
$strings['Minimum reservation length'] = '最短予約時間:';
$strings['Maximum reservation length'] = '最長予約時間:';
$strings['You do not have permission to use this resource.'] = 'この会議室を使用する権限を持っていません。';
$strings['reserved or unavailable'] = '%sへの%sは予約済みまたは利用不可能です。';
$strings['Reservation created for'] = '%sのために作成された予約';
$strings['Reservation modified for'] = '%sのために変更された予約';
$strings['Reservation deleted for'] = '%sのために削除された予約';
$strings['created'] = '作成された';
$strings['modified'] = '変更された';
$strings['deleted'] = '削除された';
$strings['Reservation #'] = '予約番号は';
$strings['Contact'] = 'コンタクト';
$strings['Reservation created'] = '予約は作成されました';
$strings['Reservation modified'] = '予約は変更されました';
$strings['Reservation deleted'] = '予約は削除されました';

$strings['Reservations by month'] = '月までの予約';
$strings['Reservations by day of the week'] = '曜日までの予約';
$strings['Reservations per month'] = '月あたりの予約';
$strings['Reservations per user'] = 'ユーザーごとの予約';
$strings['Reservations per resource'] = '会議室ごとの予約';
$strings['Reservations per start time'] = '開始時刻ごとの予約';
$strings['Reservations per end time'] = '終了時刻ごとの予約';
$strings['[All Reservations]'] = '「すべての予約」';

$strings['Permissions Updated'] = '権限が更新されました';
$strings['Your permissions have been updated'] = '%sの権限が更新されました';
$strings['You now do not have permission to use any resources.'] = '会議室を使用する権限がありません。';
$strings['You now have permission to use the following resources'] = '以下の会議室を使用する権限が与えられています:';
$strings['Please contact with any questions.'] = '不明点がある場合 %s へコンタクトしてください。';
$strings['Password Reset'] = 'パスワードリセット';

$strings['This will change your password to a new, randomly generated one.'] = 'ランダムに生成した新しいパスワードに変更します。';
$strings['your new password will be set'] = 'メールアドレスを入力し"パスワードの変更"をクリックすると、新しいパスワードが設定されメールにて通知されます。';
$strings['Change Password'] = 'パスワードの変更';
$strings['Sorry, we could not find that user in the database.'] = 'このユーザはデータベースに登録されていません。';
$strings['Your New Password'] = '新しい%sパスワード';
$strings['Your new passsword has been emailed to you.'] = '成功しました!<p/>'
.'新しいパスワードはメールで送信されました。<br/>'
.'メールボックスに新しいパスワードがメールボックスに届いていることを確認し、新しいパスワードを使用して<a href="index.php">ログイン</a>した後、'
.'速やかにコントロールパネル内の&quotプロフィール情報、パスワードの変更&quotのリンクをクリックしパスワードを変更してください。';

$strings['You are not logged in!'] = 'ログインしていません!';

$strings['Setup'] = 'セットアップ';
$strings['Please log into your database'] = 'データベースへログインしてください。';
$strings['Enter database root username'] = 'データベースの root ユーザー名を入力してください:';
$strings['Enter database root password'] = 'データベースの root パスワードを入力してください:';
$strings['Login to database'] = 'データベースにログイン';
$strings['Root user is not required. Any database user who has permission to create tables is acceptable.'] = 'root ユーザは必要ありません。 テーブルを作成する許可があるどのデータベースのユーザーでも使用可能です。';
$strings['This will set up all the necessary databases and tables for phpScheduleIt.'] = 'これはphpScheduleItのためのすべての必要なデータベースそしてテーブルをセットアップします。';
$strings['It also populates any required tables.'] = 'それは必要なテーブルに関しても同様です。';
$strings['Warning: THIS WILL ERASE ALL DATA IN PREVIOUS BOOKIT DATABASES!'] = '警告: これはphpScheduleItデータベースのすべての過去のデータを削除します!';
$strings['Not a valid database type in the config.php file.'] = 'config.phpファイルの有効なデータベースのタイプではありません。';
$strings['Database user password is not set in the config.php file.'] = 'データベースのユーザパスワードはconfig.phpファイル内に存在しません。';
$strings['Database name not set in the config.php file.'] = 'データベース名はconfig.phpファイル内に設定されていません。。';
$strings['Successfully connected as'] = '適切に接続されるように';
$strings['Create tables'] = 'テーブルを作成&gt;';
$strings['There were errors during the install.'] = 'インストール中にエラーが発生しました。 エラーがマイナーエラーである場合、phpScheduleItは引き続き動作することが可能です。<p/><p/>'
.'mhs@hp.comに連絡してください。';
$strings['You have successfully finished setting up phpScheduleIt and are ready to begin using it.'] = 'phpScheduleItが適切にセットアップされ、使用することが可能です。';
$strings['Thank you for using phpScheduleIt'] = '\'インストール\' ディレクトリを完全に削除したことを確認してください。'
.'データベース・パスワードおよび他の機密情報を含んでいるため、これは重要です。'
.'完全に削除しない場合、悪意のある者にデータベースを破壊する糸口を残すこととなります!'
.'<br /><br />'
.'phpScheduleItをご利用いただき、ありがとうございます!';
$strings['There is no way to undo this action'] = 'このアクションを取消す方法がありません!';
$strings['Click to proceed'] = 'クリックし進んでください。';
$strings['Please delete this file.'] = 'このファイルを削除して下さい。';
$strings['Successful update'] = '更新は成功しました';
$strings['Patch completed successfully'] = 'パッチのインストールが完了しました';

$strings['If no value is specified, the default password set in the config file will be used.'] = '何も指定されていない場合、設定ファイルに記述されたデフォルトパスワードが設定されます。';
$strings['Notify user that password has been changed?'] = 'パスワードが変更されたことをユーザに通知しますか?';

$strings['This system requires that you have an email address.'] = 'このシステムはメールアドレスを要求します。';
$strings['Invalid User Name/Password.'] = 'ユーザ名/パスワードが無効です。';
$strings['Pending User Reservations'] = 'ユーザーの予約をペンディングにします';
$strings['Approve'] = '承認';
$strings['Approve this reservation'] = 'この予約を承認';
$strings['Approve Reservations'] = '予約を承認';

$strings['Announcement'] = 'アナウンスメント';
$strings['Number'] = '数';
$strings['Add Announcement'] = 'アナウンスメントを追加';
$strings['Edit Announcement'] = 'アナウンスメントの編集';
$strings['All Announcements'] = 'すべてのアナウンスメント';
$strings['Delete Announcements'] = 'アナウンスメントの削除';
$strings['Use start date/time?'] = '開始時刻の日付／時間を使用しますか?';
$strings['Use end date/time?'] = '終了時刻の日付／時間を使用しますか?';
$strings['Announcement text is required.'] = 'アナウンスメントのテキストが必要です。';
$strings['Announcement number is required.'] = 'アナウンスメント数が必要です。';

$strings['Pending Approval'] = '承認をペンディングにします';
$strings['My reservation is approved'] = '予約が承認されます';
$strings['This reservation must be approved by the administrator.'] = 'この予約は管理者によって承認されなければなりません。';
$strings['Approval Required'] = '承認が必要です';
$strings['No reservations requiring approval'] = '承認が必要な予約はありません';
$strings['Your reservation was successfully approved'] = '予約は承認されました';
$strings['Reservation approved for'] = '%sの予約は承認されました';
$strings['approved'] = '承認';
$strings['Reservation approved'] = '予約は承認されました';

$strings['Valid username is required'] = '有効なユーザー名が必要です';
$strings['That logon name is taken already.'] = 'このログイン名は既に使用されています。';
$strings['this will be your login'] = '(これはあなたのログイン名です)';
$strings['Logon name'] = 'ログイン名';
$strings['Your logon name is'] = 'あなたのログイン名は%sです';

$strings['Start'] = '開始';
$strings['End'] = '終了';
$strings['Start date must be less than or equal to end date'] = '開始日は終了日と等しいかまたはそれ以前でなければなりません';
$strings['That starting date has already passed'] = '開始日は既に過ぎています';
$strings['Basic'] = '基本';
$strings['Participants'] = '参加者';
$strings['Close'] = '閉じる';
$strings['Start Date'] = '開始日';
$strings['End Date'] = '終了日';
$strings['Minimum'] = '最短';
$strings['Maximum'] = '最長';
$strings['Allow Multiple Day Reservations'] = '複数の日にまたがる予約を許可します';
$strings['Invited Users'] = '招かれたユーザー';
$strings['Invite Users'] = 'ユーザーを招待する';
$strings['Remove Participants'] = '参加者の削除';
$strings['Reservation Invitation'] = '招待の予約';
$strings['Manage Invites'] = '招待の管理';
$strings['No invite was selected'] = '招待が選択されていません';
$strings['reservation accepted'] = '%sは招待を受諾しました%s';
$strings['reservation declined'] = '%sは招待を辞退しました%s';
$strings['Login to manage all of your invitiations'] = '全ての招待を管理するためにログインします';
$strings['Reservation Participation Change'] = '予約の参加の変更';
$strings['My Invitations'] = '招待';
$strings['Accept'] = '受託';
$strings['Decline'] = '辞退';
$strings['Accept or decline this reservation'] = 'この予約を受諾しますか？辞退しますか？';
$strings['My Reservation Participation'] = '参加の予約';
$strings['End Participation'] = '参加の終了';
$strings['Owner'] = '所有者';
$strings['Particpating Users'] = '参加ユーザー';
$strings['No advanced options available'] = '利用できる詳細設定はありません';
$strings['Confirm reservation participation'] = '予約の参加を確認';
$strings['Confirm'] = '確認';
$strings['Do for all reservations in the group?'] = 'グループ内のすべての予約を実施しますか?';

$strings['My Calendar'] = 'カレンダー';
$strings['View My Calendar'] = 'カレンダーを表示';
$strings['Participant'] = '参加者';
$strings['Recurring'] = '繰り返し';
$strings['Multiple Day'] = '複数の日';
$strings['[today]'] = '[今日]';
$strings['Day View'] = '日のビュー';
$strings['Week View'] = '週のビュー';
$strings['Month View'] = '月のビュー';
$strings['Resource Calendar'] = '会議室のカレンダー';
$strings['View Resource Calendar'] = 'ビルのカレンダー';
$strings['Signup View'] = 'サインアップのビュー';

$strings['Select User'] = 'ユーザーを選択';
$strings['Change'] = '変更';

$strings['Update'] = '更新';
$strings['phpScheduleIt Update is only available for versions 1.0.0 or later'] = 'phpScheduleIt Update はバージョン1.0.0 もしくはそれ以降で使用可能です。';
$strings['phpScheduleIt is already up to date'] = 'phpScheduleItは既に最新です';
$strings['Migrating reservations'] = '予約のマイグレーション';

$strings['Admin'] = '管理';
$strings['Manage Announcements'] = 'アナウンスメントの管理';
$strings['There are no announcements'] = 'アナウンスメントがありません';

$strings['Maximum Participant Capacity'] = '最大収容人数';
$strings['Leave blank for unlimited'] = 'ブランク(無制限)';
$strings['Maximum of participants'] = 'この会議室は最大%s人を収容できます。';
$strings['That reservation is at full capacity.'] = 'この予約は会議室が収容人数いっぱいです。。';
$strings['Allow registered users to join?'] = '登録ユーザを参加することを許可しますか？';
$strings['Allow non-registered users to join?'] = '未登録のユーザーを参加することを許可しますか？';
$strings['Join'] = '参加';
$strings['My Participation Options'] = '参加の設定';
$strings['Join Reservation'] = '参加します';
$strings['Join All Recurring'] = '繰り返しすべてに参加します';
$strings['You are not participating on the following reservation dates because they are at full capacity.'] = '参加人数を超えているため、以下の予約に参加できません。';
$strings['You are already invited to this reservation. Please follow participation instructions previously sent to your email.'] = 'この予約に既に招待されています。送付されているメールに記載された指示に従って下さい。';
$strings['Additional Tools'] = 'ツール';
$strings['Create User'] = 'ユーザーの作成';
$strings['Check Availability'] = '利用可否の確認';
$strings['Manage Additional Resources'] = '付属品の管理';
$strings['Number Available'] = '利用可能数';
$strings['Unlimited'] = '無制限';
$strings['Add Additional Resource'] = '付属品を追加';
$strings['Edit Additional Resource'] = '付属品の編集';
$strings['Checking'] = 'チェック中';
$strings['You did not select anything to delete.'] = '削除されるものが何も選択されていません。';
$strings['Added Resources'] = '追加された会議室';
$strings['Additional resource is reserved'] = '追加の会議室%sは一度に%sのみ利用可能です';
$strings['All Groups'] = 'すべてのグループ';
$strings['Group Name'] = 'グループ名';
$strings['Delete Groups'] = 'グループの削除';
$strings['Manage Groups'] = 'グループの管理';
$strings['None'] = 'なし';
$strings['Group name is required.'] = 'グループ名が必要です。';
$strings['Groups'] = 'グループ';
$strings['Current Groups'] = '現在のグループ';
$strings['Group Administration'] = 'グループの管理';
$strings['Reminder Subject'] = '予約のリマインダ%s、%s %s';
$strings['Reminder'] = 'リマインダ';
$strings['before reservation'] = '予約の前';
$strings['My Participation'] = '参加';
$strings['My Past Participation'] = '過去の参加';
$strings['Timezone'] = 'タイム ゾーン';
$strings['Export'] = 'エクスポート';
$strings['Select reservations to export'] = 'エクスポートする予約を選択してください';
$strings['Export Format'] = 'フォーマットをエクスポートします';
$strings['This resource cannot be reserved less than x hours in advance'] = 'この会議室は %s 時間より前に予約することはできません。';
$strings['This resource cannot be reserved more than x hours in advance'] = 'この会議室は %s 時間より後に予約することはできません';
$strings['Minimum Booking Notice'] = '最短予約通知';
$strings['Maximum Booking Notice'] = '最長予約通知';
$strings['hours prior to the start time'] = '開始時刻以前の時間';
$strings['hours from the current time'] = '現在時間からの時間';
$strings['Contains'] = '含みます';
$strings['Begins with'] = '始まります';
$strings['Minimum booking notice is required.'] = '最短の予約通知が必要です。';
$strings['Maximum booking notice is required.'] = '最長の予約通知が必要です。';
$strings['Accessory Name'] = '付属品名';
$strings['Accessories'] = '付属品';
$strings['All Accessories'] = 'すべての付属品';
$strings['Added Accessories'] = '追加された付属品';

/***
  EMAIL MESSAGES
  Please translate these email messages into Japanese.  Keep the sprintf (%s) placeholders in their current position unless you know you need to move them.
  All email messages should be surrounded by double quotes "
 ***/

$email['register'] = "%s, %s \r\n"
		. "次の情報を登録しました:\r\n"
		. "ログオン:%s\r\n"
		. "名前:%s %s\r\n"
		. "電話:%s\r\n"
		. "チーム:%s\r\n"
		. "位置:%s\r\n\r\n"
		. "この位置のスケジューラーへログイン:\r\n"
		. "%s\r\n\r\n"
		. "オンラインスケジューラのリンクリンクからコントロールパネルでプロフィールを編集できます。\r\n\r\n"
		. "会議室か予約によって基づく質問をに指示して下さい%s";

$email['register_admin'] = "管理者のかたへ、\r\n\r\n"
		. "以下の新しいユーザーが登録されました:\r\n"
		. "メール:%s\r\n"
		. "名前:%s %s\r\n"
		. "電話:%s\r\n"
		. "チーム:%s\r\n"
		. "ポジション:%s\r\n\r\n";

$email['reservation_activity_1'] = "%sさんへ、\r\n<p/>"
		. "あなたは%s会議室を予約できました。予約番号は%s. \r\n\r\n<p/><p/>"
		. "質問がある場合、この予約ナンバーを持って管理者にお問い合わせください。\r\n\r\n<p/><p/>"
		. "%s %s～%s %sに、%s"
		. "は予約されました。（%s）\r\n\r\n<p/><p/>";
$email['reservation_activity_2'] = "この予約は次の日付に繰り返されました:\r\n<p/>";
$email['reservation_activity_3'] = "このグループのすべての繰り返しの予約は : %s. \r\n\r\n<p/><p/>";
$email['reservation_activity_4'] = "以下の概要がこの予約に提供されました:\r\n<p/>%s\r\n\r\n<p/><p/>";
$email['reservation_activity_5'] = "もしこれが間違いであれば、管理者 %s に連絡してください。"
		. "または%sに電話してください。 \r\n\r\n<p/><p/>"
		. "いつでもphpScheduleItにアクセスし、予約を修正することが可能です。"
		. "%sにログインしの:\r\n<p/>"
		. "<a href=\"%s\" target=\"_blank\">%s</a>.\r\n\r\n<p/><p/>";
$email['reservation_activity_6'] = "このシステムに関して技術サポートが必要なかたはmhs@hp.comに連絡してください。";
$email['reservation_activity_7'] = "%s、\r\n<p/>"
		. "予約番号%sは承認されました。\r\n\r\n<p/><p/>"
		. "管理者への質問の際にはこの予約番号を使用して下さい。\r\n\r\n<p/><p/>"
		. "予約期間 %s %s から %s %s の %s"
		. "%s に置かれます。%s. \r\n\r\n<p/><p/>";

$email['password_reset'] = "パスワード%sは管理者によってリセットされました。\r\n\r\n"
		. "テンポラリ・パスワードは次のとおりです:\r\n\r\n%s\r\n\r\n"
		. "このテンポラリ・パスワードを使用してください。%s、%s"
		. "早急に'プロファイル情報/パスワードの変更'を使用してパスワードを変更するようにしてください。\r\n\r\n"
		. "不明点がある場合、%sへご連絡お願いします。";

$email['new_password'] = "%s，\r\n"
		. "%sのための新しいパスワードは次のとおりです:\r\n\r\n"
		. "%s\r\n\r\n"
		. "%sへログインしてください。"
		. "この新しいパスワードを使って "
		. "(コピー＆ペースト) "
		. "ログインしたら速やかに　プロファイル情報/パスワードの変更　のリンクをクリックし"
		. "パスワードを変更してください。 "
		. "このリンクはコントロールパネルに見つけることができます。\r\n\r\n"
		. "質問は%sまでお願いします";

$email['reservation_invite'] = "%sがあなたを次の予約に参加するように招待しています。:\r\n\r\n"
		. "会議室:%s\r\n"
		. "開始日:%s\r\n"
		. "開始時刻:%s\r\n"
		. "終了日:%s\r\n"
		. "終了時刻:%s\r\n"
		. "概要:%s\r\n"
		. "(もしあれば)繰り返された日付:%s\r\n\r\n"
		. "この招待を受諾するにはこのリンクをクリックしてください(ハイライトしていない場合コピー＆ペーストしてください)%s\r\n"
		. "この招待を辞退するにはこのリンクをクリックしてください(ハイライトしていない場合コピー＆ペーストしてください)%s\r\n"
		. "後で受諾する場合、もしくは後で招待を受諾する場合、%sの%sにログインしてください。";

$email['reservation_removal'] = "次の予約から削除されました:\r\n\r\n"
		. "会議室:%s\r\n"
		. "開始日:%s\r\n"
		. "開始時刻:%s\r\n"
		. "終了日:%s\r\n"
		. "終了時刻:%s\r\n"
		. "概要:%s\r\n"
		. "繰り返された日付(もしあれば):%s\r\n\r\n";

$email['Reminder Body'] = "予約のための%sからの%s %sへの%s %sは近づいています。";
?>
