<?php
class CNavigation {
  public static function GenerateMenu($menu) {
    extract($menu);
    $html = "<nav class='$class'><div class='container-fluid'><ul class='nav navbar-nav'>\n";
    foreach($items as $key => $item) {
      $selected = $callback($item['url']) ? "active" : null;
      $html .= "<li class='{$selected}'><a href='{$item['url']}'>{$item['text']}</a></li>\n";
    }
    $html .= "</ul></div></nav>\n";
    return $html;
  }
};
