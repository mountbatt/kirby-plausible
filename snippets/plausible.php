<?php if(option('debug') !== true && !kirby()->user()): ?>
<!-- Privacy-friendly analytics by Plausible -->
<script async src="<?= option('mountbatt.plausible.scriptJsURL'); ?>"></script>
<script>
  window.plausible=window.plausible||function(){(plausible.q=plausible.q||[]).push(arguments)},plausible.init=plausible.init||function(i){plausible.o=i||{}};
  plausible.init()
</script>
<?php endif; ?>
