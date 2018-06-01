<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>MVC 게시판</title>
<link rel="stylesheet" href="<?php echo _CSS."common.css" ?>">
</head>
<body>
	<header id="header">
		<div id="logo"><a href="/">LOGO</a></div>
		<nav id="gnb">
			<ul>
				<?php if (isset($_SESSION['member'])): ?>
				<li><a href="#!"><?php echo $_SESSION['member']->name ?>님</a></li>
				<li><a href="/member/logout">로그아웃</a></li>
				<?php else: ?>
				<li><a href="/member/login">로그인</a></li>
				<li><a href="/member/join">회원가입</a></li>
				<?php endif ?>
			</ul>
		</nav>
	</header>