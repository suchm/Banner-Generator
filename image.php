<?php

/**
 * Banner Generator
 */

new Banner_Generator();

class Banner_Generator{

	//Set font type and colurs
	private $font = './font/OpenSans-Semibold.TTF';
	public $colour1 = array( 195, 83, 70 ); //RGB values
	public $colour2 = array( 255, 255, 255 ); //RGB values

	//banner text variables
	private $banner_line1;
	private $banner_line2;

	//banner attribute variables
	private $atts = array();
	private $imgpath;
	private $center;
	private $valign1;
	private $valign2;
	private $smlfont;
	private $lrgfont;


	public function __construct() {

		// set the banners attributes
		$this->set_banner_atts();

		// create the banner
		$this->create_banner();
	}

	/**
	 * Set banner attributes
	 */
	private function set_banner_atts() {

		//Get image variables
		$banner_size = isset($_GET['banner_size']) ? $_GET['banner_size'] : 'image_125x125' ; 
		$this->banner_line1 = isset( $_GET['banner_line1'] ) ? $_GET['banner_line1'] : '' ; 
		$this->banner_line2 = isset( $_GET['banner_line2'] ) ? $_GET['banner_line2'] : '' ; 

		//Select text align parameters depending on banner size//
		switch ($banner_size) {
			case 'image_120x600':
				$atts = array( "imgpath" => "./banners/banner_120x600.jpg",
							   "center"  => 60,
							   "valign1" => 270,
							   "valign2" => 300,
							   "smlfont" => 7,
							   "lrgfont" => 12
							);
				break;
			case 'image_125x125':
				$atts = array( "imgpath" => "./banners/banner_125x125.jpg",
							   "center"  => 64,
							   "valign1" => 70,
							   "valign2" => 93,
							   "smlfont" => 7,
							   "lrgfont" => 12
							);
				break;
			case 'image_234x60':
				$atts = array( "imgpath" => "./banners/banner_234x60.jpg",
							   "center"  => 122,
							   "valign1" => 26,
							   "valign2" => 45,
							   "smlfont" => 8,
							   "lrgfont" => 13
							);
				break;
			case 'image_468x60':
				$atts = array( "imgpath" => "./banners/banner_485x60.jpg",
							   "center"  => 240,
							   "valign1" => 25,
							   "valign2" => 47,
							   "smlfont" => 8,
							   "lrgfont" => 14
							);
				break;
			case 'image_728x90':
				$atts = array( "imgpath" => "./banners/banner_728x90.jpg",
							   "center"  => 340,
							   "valign1" => 38,
							   "valign2" => 67,
							   "smlfont" => 12,
							   "lrgfont" => 16
							);
				break;
			default:
				$atts = array( "imgpath" => "./banners/banner_125x125.jpg",
							   "center"  => 64,
							   "valign1" => 90,
							   "valign2" => 113,
							   "smlfont" => 7,
							   "lrgfont" => 12
							);
				break;
		}

		$this->imgpath = $atts['imgpath'];
		$this->center  = $atts['center'];
		$this->valign1 = $atts['valign1'];
		$this->valign2 = $atts['valign2'];
		$this->smlfont = $atts['smlfont'];
		$this->lrgfont = $atts['lrgfont'];

	}

	/**
	 * Create the banners
	 * @return header
	 */
	private function create_banner() {

		//Load image
		$rImg = ImageCreateFromJPEG( $this->imgpath );

		//Define colours
		$textcolour1 = imagecolorallocate( $rImg, $this->colour1['0'], $this->colour1['1'], $this->colour1['2'] );
		$textcolour2 = imagecolorallocate( $rImg, $this->colour2['0'], $this->colour2['1'], $this->colour2['2'] );

		//Make text uppercase
		$text1 = strtoupper( $this->banner_line1 );
		$text2 = strtoupper( $this->banner_line2 );

		//Get string length
		$count1 = strlen( $text1 );
		$count2 = strlen( $text2 );

		//Select font size depending on string length
		$fsize1 = $this->fontsize( $count1 );
		$fsize2 = $this->fontsize( $count2 );

		//Center align the text
		$xalign1 = $this->aligntext( $count1, $fsize1, $text1 );
		$xalign2 = $this->aligntext( $count2, $fsize2, $text2 );

		// Adds text to image
		imagettftext( $rImg, $fsize1, 0, $xalign1, $this->valign1, $textcolour1, $this->font, $text1 );
		imagettftext( $rImg, $fsize2, 0, $xalign2, $this->valign2, $textcolour2, $this->font, $text2 );

		//Output image
		header('Content-type: image/jpeg');
		imagejpeg( $rImg,NULL,100 );
		imagedestroy( $rImg );

	}

	/**
	 * Set font size depending on string length
	 * @param int    $count number of characters in string
	 * @return int
	 */
	private function fontsize( $count ) {
 
		if( $count > 10 ) {
			return $this->smlfont;

		} else if( $count <= 10 ) {
			return $this->lrgfont;

		}
	}

	/**
	 * Center align the text
	 * @param int    $count number of characters in string
	 * @param int    $size font size
	 * @param string $text the actual text
	 * @return string
	 */
	private function aligntext( $count, $size, $text ) {

		$bbox = imagettfbbox( $size, 0, $this->font, $text );
        $width = $bbox[2] - $bbox[0];
        $align = $this->center - ($width/2);
		return $align;
	}

}

?>
