<?

$file = $_GET['file'];

if (!$file)
{
  exit();
}
else
{
  if (file_exists($file))
  {
    // If you're going to leave .htaccess at your root, assets folder or any 
    // other directory that will keep it separeted from the libraries, don't
    // forget to change URL/access to parser.php on .htaccess

    require 'phamlp/sass/SassParser.php';

    $sass = new SassParser();

    header('Content-Type: text/css');
    //header('Last-Modified: '.gmdate('D, d M Y H:i:s', $requested_mod_time).' GMT');
    echo $sass->toCss($file);
  }
  else
    return header("HTTP/1.0 404 Not Found");


}

?>
