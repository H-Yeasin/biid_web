<?php
// Each page sets $page_title and $page_description before requiring this file.
$page_title       = $page_title ?? 'BIID Foundation | Leading Through Innovation';
$page_description = $page_description ?? "BIID Foundation is a Bangladesh-based ICT4D foundation delivering nutrition, agriculture, women's digital empowerment, and SME programs since 2008.";
?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo htmlspecialchars($page_title); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
<meta name="author" content="BIID Foundation">
<link rel="icon" href="img/favicon/favicon-32.png" sizes="32x32">
<link rel="icon" href="img/favicon/favicon-192.png" sizes="192x192">
<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">

<!-- Fonts & Icons -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">

<!-- Site styles -->
<link rel="stylesheet" href="css/custom.css">
<link rel="stylesheet" href="css/motion.css?v=<?php echo filemtime(__DIR__ . '/../css/motion.css'); ?>">
