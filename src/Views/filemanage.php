	<!-- File List Section Start -->
	<div id="file-list">
		<div class="container">
			<div class="section-title">
				<div class="title">파일 관리</div>
				<div class="sub-title">내 파일을 공유하거나 삭제할 수 있는 파일 관리 페이지입니다.</div>
			</div>
			<div class="file-group">
				<?php if(isset($filelists)) { ?>
					<?php foreach($filelists as $fl) { ?>
					<div class="file">
						<div class="title"><?= text($fl->filename) ?></div>
						<div>
							<a href="/filemanage/out/<?= $fl->idx ?>" class="btn btn-simple <?= $fl->outshare == "" ? '' : 'active' ?>" style="font-size: 12px;">외부공유</a>
							&nbsp;&nbsp;
							<a href="/filemanage/del/<?= $fl->idx ?>" class="btn btn-simple" style="font-size: 12px;">삭제</a>
						</div>
					</div>
					<?php } ?>
				<?php } ?>
			</div>
		</div>
	</div>
	<!-- File List Section End -->
</body>
</html>