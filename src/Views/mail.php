	<!-- Mail Box Section Start -->
	<div id="file-list">
		<div class="container">
			<div class="section-title">
				<div class="title">메일 보기</div>
				<div class="sub-title">
					상태 : <?= $mail->mail_to == user()->id ? '받은 메일' : '보낸 메일' ?>
					<br>
					<br>
					상대 : <?= $mail->mail_to == user()->id ? $mail->mail_from : $mail->mail_to ?>
					<br>
					<br>
					제목 : <?= text($mail->title) ?>
				</div>
			</div>
			<br><br>
			<pre><?= htmlspecialchars($mail->content) ?></pre>
		</div>
	</div>
	<!-- Mail Box Section End -->
</body>
</html>