	<!-- Login Section Start -->
	<div id="login">
		<div class="container">
			<div class="section-title">
				<div class="title">메일 전송</div>
				<div class="sub-title">메일을 전송할 수 있습니다.</div>
			</div>
			<form method="post">
				<div class="form-group">
					<label for="id">제목</label>
					<input type="text" name="title" id="title" placeholder="제목">
				</div>
				<div class="form-group">
					<label for="mail_to">수신자</label>
					<input type="mail_to" name="mail_to" id="mail_to" placeholder="수신자 아이디">
				</div>
				<div class="form-group">
					<label for="content">내용</label>
					<textarea name="content" id="content" style="height: 400px;"></textarea>
				</div>
				<div class="form-group">
					<input type="submit" value="submit" class="btn btn-simple">
				</div>
			</form>
		</div>
	</div>
	<!-- Login Section End -->
</body>
</html>