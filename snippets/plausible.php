<?php if(option('debug') !== true && !kirby()->user() && option('mountbatt.plausible.plausibleURL')): ?>
<script defer data-domain="<?= option('mountbatt.plausible.domain') ?? parse_url($kirby->url('index'))['host'] ?>" src="<?= option('mountbatt.plausible.plausibleURL') ?>"></script>
<?php else: ?>
  <!-- Plausible not loaded cause you are logged in at the panel or there is no option "plausibleURL" -->
<?php endif; ?>
