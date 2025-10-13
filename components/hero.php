<?php
// Reusable Hero Section
// Accepts: $title, $highlight, $subtitle, $extra_class (optional)
?>
<header class="relative overflow-hidden bg-gradient-to-b from-pink-50 via-pink-100 to-pink-200 text-center <?php echo $extra_class ?? ''; ?>">
  <div class="relative z-10 mx-auto max-w-4xl px-4 py-20 sm:max-w-5xl sm:py-28 md:py-32">
    <h1 class="font-Tinos animate-glow text-4xl text-pink-950 sm:text-5xl md:text-7xl">
      <?php echo $title; ?> <span class="text-pink-600"><?php echo $highlight; ?></span>
    </h1>
    <?php if (!empty($subtitle)) : ?>
      <p class="font-Unna-bold mt-4 text-base text-pink-50/80 sm:text-lg md:text-2xl">
        <?php echo $subtitle; ?>
      </p>
    <?php endif; ?>
  </div>
</header>
