<style>
	#out-share .link:hover {
		cursor: pointer;
		color: #0080ff;
	}
</style>

	<!-- Out Share Section Start -->
	<div id="out-share">
		<div class="container">
			<div class="section-title">
				<div class="title">외부 공유 목록</div>
				<div class="sub-title">링크가 있는 모든 사용자가 파일을 다운로드 할 수 있습니다.</div>
			</div>
			<div class="file-group">
				<?php if(isset($filelists)) { ?>
					<?php foreach($filelists as $f) { ?>
					<div class="file">
						<div class="title"><?= $f->filename ?></div>
						<div class="link" data-code="<?= $f->outshare ?>">http://7chance.net/outshare/<?= $f->outshare ?></div>
						<script>
							link = document.querySelector("#out-share .link[data-code='<?= $f->outshare ?>']");

							link.addEventListener("click", (e) => {
								copy = e.target.innerText;
								tempElem = document.createElement('textarea');
								tempElem.value = copy;
								document.body.appendChild(tempElem);
								tempElem.select();
								document.execCommand("copy");
								document.body.removeChild(tempElem);

								alert("외부공유 링크가 복사되었습니다.");
							});
						</script>
					</div>
					<?php } ?>
				<?php } ?>
			</div>
		</div>
	</div>
	<!-- Out Share Section End -->
</body>
</html>