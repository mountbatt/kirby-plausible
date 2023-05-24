<?php if(option('debug') !== true && !kirby()->user()): ?>
<script defer data-domain="<?= option('mountbatt.plausible.domain') ?? parse_url($kirby->url('index'))['host'] ?>" src="<?= option('mountbatt.plausible.plausibleURL') ?>"></script>
<?php endif; ?>
