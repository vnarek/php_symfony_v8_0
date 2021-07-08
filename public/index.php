<?php

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

htmlspecialchars("haha", double_encode: false);

echo match (8.0) {
  '8.0' => "Oh no!",
  8.0 => "This is what I expected",
};

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
