	<!-- File List Section Start -->
	<div id="file-list">
		<div class="container">
			<div class="section-title">
				<div class="title">공유</div>
				<div class="sub-title">공유한 파일을 누구나 다운로드할 수 있습니다.</div>
			</div>
			<div class="file-group">
				<?php if(isset($file)) { ?>
					<a href="<?= $file->filepath ?>" class="file sharedlink" download="<?= $file->filename ?>">
						<div class="title"><?= text($file->filename) ?></div>
					</a>
				<?php } ?>
			</div>
			<style>
				.sharedlink:hover {
					color: #0a84ff;
				}
			</style>
		</div>
	</div>
	<!-- File List Section End -->
</body>
</html>