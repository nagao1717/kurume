$('.slide-container').slick({
    autoplay: false,//自動的に動き出すか。初期値はfalse。
    infinite: true,//スライドをループさせるかどうか。初期値はtrue。
    slidesToShow: 3,//スライドを画面に3枚見せる
    slidesToScroll: 3,//1回のスクロールで3枚の写真を移動して見せる
    prevArrow: '<div class="slick-prev"></div>',//矢印部分PreviewのHTMLを変更
    nextArrow: '<div class="slick-next"></div>',//矢印部分NextのHTMLを変更
    dots: true,//下部ドットナビゲーションの表示
    responsive: [
        {
        breakpoint: 750,//モニターの横幅が769px以下の見せ方
        settings: {
            slidesToShow: 1,//スライドを画面に2枚見せる
            slidesToScroll: 1,//1回のスクロールで2枚の写真を移動して見せる
        }
    }
]
});
function textTrim($class) {
    // テキストをトリミングする要素
    var selector = document.getElementsByClassName($class);
   
    // 制限する文字数
    var wordCount = 30;
   
    // 文末に追加したい文字
    var clamp = '…';
   
    for (var i = 0; i < selector.length; i++) {
      // 文字数を超えたら
      if (selector[i].innerText.length > wordCount) {
        var str = selector[i].innerText; // 文字数を取得
        str = str.substr(0, (wordCount - 1)); // 1文字削る
        selector[i].innerText = str + clamp; // 文末にテキストを足す
      }
    }
  }
  textTrim("slide-text");