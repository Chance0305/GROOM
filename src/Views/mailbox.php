	<!-- Mail Box Section Start -->
	<div id="file-list">
		<div class="container">
			<div class="section-title">
				<div class="title">메일함</div>
				<div class="sub-title">받고, 보낸 메일들을 열람할 수 있습니다.</div>
			</div>
			<div class="file-group">
				<?php foreach($maillist as $m) { ?>
				<a href="/mailbox/<?= $m->idx ?>" class="file">
					<div class="title"><?= $m->title ?></div>
					<?php if($m->mail_to == user()->id) { ?>
						<div class="date">'<?= $m->mail_from ?>'님으로부터 받은 메일</div>
					<?php } else { ?>
						<div class="date">'<?= $m->mail_to ?>'님에게 보낸 메일</div>
					<?php } ?>
				</a>
				<?php } ?>
			</div>
		</div>
	</div>
	<!-- Mail Box Section End -->
</body>
</html>