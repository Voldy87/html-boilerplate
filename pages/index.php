<?php

require_once 'layout/header.php';

print Thorin::render_blade('welcome', [
  'title' => Thorin::lang('default.metas.title'),
  'description' => Thorin::lang('default.metas.description'),
  'image' => Thorin::asset_path('img/welcome.jpg')
]);

require_once 'layout/footer.php';
