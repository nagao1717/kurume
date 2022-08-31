<?php 
require_once("./phpQuery-onefile.php");
	class dog {
		// プロパティの宣言
		private $name;
		//インスタンス化するときに引数を受け取れるようにしている
		public function __construct($name){
			$this -> name = $name;
		}
		//メソッドの宣言
		public function get_Name() {
			return $this->name;
		}
	}
	class Scraping {
		//プロパティ
		public $ttl; //たいとるを取得
		
		private $url;
		private $html;//htmlDOM取得
		private $media;//.mediaを取得
		private $media_body; //.media_bodyを取得
		public $ttl_text = array();
		public $ttl_href = array();
		public $blog_text = array();  //本文を取得
		public $blog_img = array();
		//コンストラクタの設定
		public function __construct($url){
			$this->url = $url;
		}
		//メソッドの定義

		//サイトスクレイピング
		public function get_html(){
			
		$url = $this->url;
		$html = file_get_contents($url);
		$html = phpQuery::newDocument($html);
		$media = $html->find(".media");
		$media_body = $media->find(".media-body");
		$this->html = $html;
		$this->media = $media;
		$this->media_body = $media_body;
		}
		public function get_title(){
			for($i = 0;$i<10;$i++){
				$ttl = $this->html->find(".postList")->find(".media:eq(".$i.")")->find(".entry-title");
				$ttl_href = $ttl->find("a")->attr("href");
				$ttl = $ttl->find("a")->text();
				$this->ttl_text[$i] = "<h3 class='slide-ttl'><a target='_blank' href=".$ttl_href.">".$ttl."</a></h3>";
				$this->ttl_href[$i] = $ttl_href;
			}
		}
		public function get_blog(){
			foreach($this->ttl_href as $key){
				$blog_url = file_get_contents($key);
				$blog_html = phpQuery::newDocument($blog_url);
				$blog_ttl = $blog_html->find(".entry-title")->text();
				$blog_text = $blog_html->find(".entry-body")->find("p")->text();
				$blog_img = $blog_html->find(".entry-body")->find("img")->attr("src");
				// echo $blog_ttl;
				// echo $blog_text."\n";
				// echo $blog_img;
				array_push($this->blog_text,$blog_text);
				array_push($this->blog_img,$blog_img);
			}
		}

	}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!-- <link rel="stylesheet" href="index.css"> -->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
	<link rel="stylesheet" href="css\style.css">
</head>
<body>
	<?php 
		// require_once("./phpQuery-onefile.php");
		// $url = "https://marimokai.jp/category/kurume";
		// $html = file_get_contents($url);
		
		// echo phpQuery::newDocument($html)->find(".media");
		$web = new Scraping("https://marimokai.jp/category/kurume");
		$web_html = $web->get_html();
		$web_ttl = $web->get_title();
		$web->get_blog();
		
	?>

	<h2 class="content-ttl">ブログ</h2>
	<ul class="slide-container">
		<li class="slide-item">
			<div class="slide-item-inner">
				<?php echo "<img class='slide-img' src=".$web->blog_img[0].">" ?>
				<div class="slide-text-area">
					<?php echo $web->ttl_text[0] ?>
					<p class="slide-text  poiint-leader"><?php echo $web->blog_text[0] ?></p>
				</div>
			</div>
		</li>
		<li class="slide-item">
			<div class="slide-item-inner">
				<?php echo "<img class='slide-img' src=".$web->blog_img[1].">" ?>
				<div class="slide-text-area">
					<?php echo $web->ttl_text[1] ?>
					<p class="slide-text  poiint-leader"><?php echo $web->blog_text[1] ?></p>
				</div>
			</div>
		</li>
		<li class="slide-item">
			<div class="slide-item-inner">
				<?php echo "<img class='slide-img' src=".$web->blog_img[2].">" ?>
				<div class="slide-text-area">
					<?php echo $web->ttl_text[2] ?>
					<p class="slide-text  poiint-leader"><?php echo $web->blog_text[2] ?></p>
				</div>
			</div>
		</li>
		<li class="slide-item">
			<div class="slide-item-inner">
				<?php echo "<img class='slide-img' src=".$web->blog_img[3].">" ?>
				<div class="slide-text-area">
					<?php echo $web->ttl_text[3] ?>
					<p class="slide-text  poiint-leader"><?php echo $web->blog_text[3] ?></p>
				</div>
			</div>
		</li>
		<li class="slide-item">
			<div class="slide-item-inner">
				<?php echo "<img class='slide-img' src=".$web->blog_img[4].">" ?>
				<div class="slide-text-area">
					<?php echo $web->ttl_text[4] ?>
					<p class="slide-text  poiint-leader"><?php echo $web->blog_text[4] ?></p>
				</div>
			</div>
		</li>
		<li class="slide-item">
			<div class="slide-item-inner">
				<?php echo "<img class='slide-img' src=".$web->blog_img[5].">" ?>
				<div class="slide-text-area">
					<?php echo $web->ttl_text[5] ?>
					<p class="slide-text  poiint-leader"><?php echo $web->blog_text[5] ?></p>
				</div>
			</div>
		</li>
		<li class="slide-item">
			<div class="slide-item-inner">
				<?php echo "<img class='slide-img' src=".$web->blog_img[6].">" ?>
				<div class="slide-text-area">
					<?php echo $web->ttl_text[6] ?>
					<p class="slide-text  poiint-leader"><?php echo $web->blog_text[6] ?></p>
				</div>
			</div>
		</li>
		<li class="slide-item">
			<div class="slide-item-inner">
				<?php echo "<img class='slide-img' src=".$web->blog_img[7].">" ?>
				<div class="slide-text-area">
					<?php echo $web->ttl_text[7] ?>
					<p class="slide-text  poiint-leader"><?php echo $web->blog_text[7] ?></p>
				</div>
			</div>
		</li>
		<li class="slide-item">
			<div class="slide-item-inner">
				<?php echo "<img class='slide-img' src=".$web->blog_img[8].">" ?>
				<div class="slide-text-area">
					<?php echo $web->ttl_text[8] ?>
					<p class="slide-text  poiint-leader"><?php echo $web->blog_text[8] ?></p>
				</div>
			</div>
		</li>
		<li class="slide-item">
			<div class="slide-item-inner">
				<?php echo "<img class='slide-img' src=".$web->blog_img[9].">" ?>
				<div class="slide-text-area">
					<?php echo $web->ttl_text[9] ?>
					<p class="slide-text  poiint-leader"><?php echo $web->blog_text[9] ?></p>
				</div>
			</div>
		</li>


	</ul>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script src="js/index.js"></script>
</body>
</html>
