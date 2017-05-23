<?php
namespace Custom;
/**
 *
 * Simple way to add a photo-gallery with pagination to a PHP website.
 * [ready to be spruced up with JS]
 *
 * Usage:
 *  $gallery = new Gallery(10, 'images/photo-gallery');
 *
 *  [10] - the number of images per page.
 *  ['images/photo-gallery'] - the relative path to the images.
 *
 * Then, anywhere on the page
 *  <?= $gallery->display() ?>
 *
 * And for Pagination
 *  <?= $gallery->pagination() ?>
 *
 */
class Gallery
{
  /**
   * How many images to display on each page
   *
   * @var int
   */
  public $increments;
  /*
   * The current Page
   * @var int
   */
  public $page;
  /*
   * Starting index in array
   * @var int
   */
  public $start;
  /**
   * Finish index in array
   *
   * @var int
   */
  public $finish;
  /**
   * The full array of filename prior to sorting/slicing
   *
   * @var array
   */
  public $files;
  /**
   * The partial showing only the specified number of images at the corrrect place.
   *
   * @var array
   *
   */
  public $filesArray;
  /**
   * Relative filepath to the images
   *
   * @var string
   */
  public $filePath;
  /**
   * It's assumed that thumbs will be in the sub-folder 'thumbs/'
   *
   * @var string
   */
  public $thumbDir = 'img/galeria';
  /**
   * Keywords to be placed in 'alt' and 'title' artibutes.
   *
   * @var string
   */
  public $keywords = 'Images Keywords';
  /**
   * @var string
   */
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
  public function __construct( $publicPrefix, $increments = 8, $filePath = 'img/galeria/'  )
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
   *
   * ----------------------------------------------
   * Display the gallery
   * ----------------------------------------------
   *
   * @return string
   *
   */
  public function display()
  {
    $o = '';
    if (count($this->filesArray)){
      foreach ( $this->filesArray as $file ) {
        $filename  = basename( $file );
        $thumbPath = $this->publicPrefix . $this->thumbDir . $filename;
        $imgPath = $this->publicPrefix . $filename;
        $o .= sprintf( ( '<a href="%s" title="%s">
                          <img src="%s" alt="" />
                        </a>' ),
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
  //display()
  /**
   *
   * ----------------------------------------------
   * Build the Pagiation
   * ----------------------------------------------
   *
   * Dynamically generate links to all the pages needed.
   *
   * @return string
   *
   */
  public function pagination()
  {
    $amount = count( $this->files );
    $pages  = ceil( $amount / $this->increments );
    $o = '';
    for ( $i = 1; $i <= $pages; $i++ ) {
      $o .= sprintf( ( '<a href="%s" class="btn %s">%s</a>' ),
        $_SERVER[ 'PHP_SELF' ] . '?page=' . $i . '#galeriadefotos',
        ( $i == $this->page ) ? 'btn-active' : null,
        'Page ' . $i
      );
    }
    return $o;
  }
}

