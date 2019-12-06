<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="/css/chanhyeong-layout.1.3.css">
	<link rel="stylesheet" href="/css/style.css">
</head>
<body>
	<!-- Header Section Start -->
	<header>
		<div class="container d-flex flex-justify-content-between flex-align-items-center h-100">
			<div class="d-flex flex-justify-content-between flex-align-items-center h-100">
				<a href="#" class="logo">CHANHYEONG</a>
				<nav class="d-flex h-100">
					<div class="b_menu">
						<a href="#">파일</a>
						<div class="h_menu">
							<a href="/filelist">내파일</a>
							<a href="/filemanage">파일 관리</a>
							<a href="/uploader">파일 업로드</a>
						</div>
					</div>
					<div class="b_menu">
						<a href="#">공유</a>
						<div class="h_menu">
							<a href="#">내부공유</a>
							<a href="/outshare">외부공유</a>
						</div>
					</div>
					<div class="b_menu">
						<a href="#">메일</a>
						<div class="h_menu">
							<a href="/mailbox">메일함</a>
							<a href="/mailform">메일 작성</a>
						</div>
					</div>
				</nav>
			</div>
			<div class="d-flex flex-justify-content-between flex-align-items-center h-100">
				<?php if(user()) { ?>
				<a href="/logout">로그아웃</a>
				<?php } else { ?>
				<a href="/login">로그인</a>
				<a href="/join">회원가입</a>
				<?php } ?>
			</div>
		</div>
	</header>
	<!-- Header Section End -->