<?php

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

class Point {
  public function __construct(
    public float $x = 0.0,
    public float $y = 0.0,
    public float $z = 0.0,
  ) {}
}

htmlspecialchars("haha", double_encode: false);

echo match (8.0) {
  '8.0' => "Oh no!",
  8.0 => "This is what I expected",
};

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
