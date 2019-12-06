	<!-- File List Section Start -->
	<div id="file-list">
		<div class="container">
			<div class="section-title">
				<div class="title">내 파일</div>
				<div class="sub-title">언제 어디서나 내 자료를 다운로드받을 수 있습니다.</div>
			</div>
			<div class="file-group">
				<?php if(isset($filelists)) { ?>
					<?php foreach($filelists as $fl) { ?>
					<?php 
	                    $first  = new DateTime($fl->udate);
	                    $second = new DateTime(date("Y-m-d H:i:s"));
	                    $diff = $first->diff($second);
	                ?>
					<a href="<?= $fl->filepath ?>" class="file" download="<?= $fl->filename ?>">
						<div class="title"><?= text($fl->filename) ?></div>
						<div class="date"><?= $diff->h != 0 ? $diff->h . "시간 전" : $diff->i != 0 ? $diff->i . "분 전" : $diff->s . "초 전" ?></div>
					</a>
					<?php } ?>
				<?php } ?>
			</div>
		</div>
	</div>
	<!-- File List Section End -->
</body>
</html>