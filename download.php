<?php
// حماية إضافية ممكنة لاحقاً (مثل التحقق من الجلسة أو IP)

// الرابط الحقيقي للتحميل
$downloadUrl = 'https://dlll.apkm.app/telegold/4.4.0/Telegram_Gold_v4.4.0.apk';

// إعادة توجيه المستخدم إلى الرابط
header("Location: $downloadUrl");
exit;
?>
