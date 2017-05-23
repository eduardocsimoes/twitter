<?php
namespace Custom;
/**
 * Usage:
 *  $gallery = new Gallery(10, 'images/photo-gallery');
 */
class Gallery
{
  public $increments;
  public $page;
  public $start;
  public $finish;
  public $files;
  public $filesArray;
  public $filePath;
  public $thumbDir = 'img/galeria/thumbnail/';
  public $keywords = 'Images Keywords';
  public $publicPrefix;
  /**
   *
   * ----------------------------------------------
   * Construct
   * ----------------------------------------------
   *
   * Accept the increments INT and filepath to populate the files array.
   * Sort that array depending on which page is being viewed
   *
   * @param int    $increments     - How many to display on each page.
   * @param string $filePath       - location of files in filesystem
   * @param string $publicPrefix   - url prefix for the public images
   */
  public function __construct( $increments = 8, $filePath = 'img/galeria/', $publicPrefix = null )
  {
    $this->filePath   = $filePath;
    $this->increments = $increments;
    $this->publicPrefix = $publicPrefix;
    /**
     * using the $_GET variable 'page', determine the start/finish points of the files array.
     */
    if ( isset( $_GET[ 'page' ] ) ) {
      $this->page   = (int)$_GET[ 'page' ];
      $this->finish = $this->page * $this->increments;
      $this->start  = $this->finish - $this->increments;
    }
    // Get the files array.
    $this->files = glob( $filePath . '*.[jJ][pP][gG]' );
    // Sort the Files first.
    array_multisort( array_map( 'filemtime', $this->files ), SORT_DESC, $this->files );
    // Cache the subset of images for the currect page.
    $this->filesArray = array_slice( $this->files, $this->start, $this->increments );
  }
  /**
   * ----------------------------------------------
   * Display the gallery
   * ----------------------------------------------
   **/
  public function display()
  {
    $o = '';
    if (count($this->filesArray)){
      foreach ( $this->filesArray as $file ) {
        $filename  = basename( $file );
        $thumbPath = $this->publicPrefix . $this->thumbDir . $filename;
        $imgPath = $this->publicPrefix . $filename;
        $o .= sprintf( ( '<li><a href="%s" title="%s">
                          <img src="%s" alt="" /><div id="transbox-img">teste</div>
                        </a></li>' ),
          $imgPath,
          $this->keywords,
          $thumbPath
        );
      }
    } else {
      $o = 'No files to load' . "\n";
      $o .= 'Looking in ' . $this->filePath;
    } 
    return $o;
  }
  /**
   * ----------------------------------------------
   * Build the Pagiation
   * ----------------------------------------------
   **/
  public function pagination()
  {
    $amount = count( $this->files );
    $pages  = ceil( $amount / $this->increments );
    $o = '';
    $o .= ($this->page > 1) ? "<li><a href=\"$_SERVER[PHP_SELF]?page=".($this->page-1)."\" aria-label=\"Previous\">&laquo</a></li> ":"<li class=\"disabled\"><a href=\"#\">&laquo</a></li> ";
    for ( $i = 1; $i <= $pages; $i++ ) {
      $o .= sprintf( ( '<li class="%s"><a href="%s">%s</a></li>' ),
        ( $i == $this->page ) ? 'active' : null,
        $_SERVER[ 'PHP_SELF' ] . '?page=' . $i,        
        'Page ' . $i
      );
    }
    $o .= ($this->page < $pages) ? "<li><a href=\"$_SERVER[PHP_SELF]?page=".($this->page+1)."\" aria-label=\"Next\">&raquo</a> ":"<li class=\"disabled\"><a href=\"#\">&raquo</a></li>\n";
    return $o;
  }
}

