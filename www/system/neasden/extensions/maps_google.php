<?

n__define_line_class (
  'maps-google',
  'https?\:\/\/(?:(?:maps\.google\.com\/maps))(.*)'
);

n__define_group ('maps_google', '(-maps-google-)(-p-)*');

function n__render_group_maps_google ($group, $myconf) {
  global $_neasden_config, $_neasden_extensions;

  $p = false;

  $result = '<div class="'. $myconf['css-class'] .'">'."\n";
  foreach ($group as $line) {
  
    if ($line['class'] == 'maps-google') {

      $data = $line['class-data'][1];
	  
      $result .= (
        '<iframe width="' . $myconf['width'] . '" height="' . $myconf['height'] . '" ' .
		'src="https://maps.google.com/maps' . $data . '" ' .
		'frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>'.
        "\n"
      );
    } else {
    
      if (!$p) {
        $p = true;
        $result .= '<p>' . $line['content'];
      } else {
        $result .= '<br />' . "\n" . $line['content'];
      }
      
    }
    
  }

  $result .= '</div>'."\n";

  return $result;
  
}


?>