 <!--Hero start-->
 <?php 
$useragent=$_SERVER['HTTP_USER_AGENT'];
if (stripos( $useragent, 'Chrome') !== false) {
    $section = '
    <section class="hero-1 position-relative align-items-center justify-content-center" id="home">
        <div class="video">
            <video id="video_backgorund" src="images/video-banner.mp4" type="video/mp4" autoplay muted loop></video>
        </div>
    ';
}elseif (stripos( $useragent, 'Safari') !== false) {
    $section = '<section class="hero-1 hero-saf position-relative align-items-center justify-content-center d-flex" id="home" style=\'background-image: url("images/banner-index.JPG");\'>';
} else {
    $section = '
    <section class="hero-1 position-relative align-items-center justify-content-center" id="home">
        <div class="video">
            <video id="video_backgorund" src="images/video-banner.mp4" type="video/mp4" autoplay muted loop></video>
        </div>
    ';
}
echo $section;
?>
        <div class="mouse">
		    <div class="scroll"></div>
	    </div>
    </section>
        <!--Hero end-->