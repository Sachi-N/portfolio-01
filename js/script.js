new WOW().init();

var delay = (n) => new Promise( r => setTimeout(r, n*1000));

jQuery(function(){

	// 最初のアニメーション
	const first_view = async () => {

		prohibit_scroll();

		await delay(2);

		await jQuery('#first-view-comment').fadeIn(1500);
		
		await delay(2);

		await jQuery('#first-view-comment').fadeOut(1500);

		await delay(1.5);

		await jQuery('#first-view').fadeOut(1000);

		await delay(1);

		permit_scroll();

	}

	// 開発用のために、一旦アニメーションを止める
	// first_view();
	jQuery('#first-view').addClass('d-none');


	// topのアニメーション 
	jQuery(window).on('load', function() {
		const animate_top = async () => {


			await jQuery('#top-word1').removeClass('d-none').addClass('top-animate1');

			await delay(0.8);

			await jQuery('#top-word2').removeClass('d-none').addClass('top-animate2');
		
			// await delay(2.5);

			// await jQuery('#top-word1, #top-word2').fadeOut(1000);

			await delay(0.5);

			await jQuery('#top-word3').fadeIn(1500).removeClass('d-none');
		}
		animate_top();
	});
	
	
	
	//ドロワーメニュー
	jQuery('.drawer_icon').on('click',function(e){
		e.preventDefault();//ドロワーを開きたいのにページ遷移が起こったりしないようセットで入れておく
		
		jQuery('.drawer_icon').toggleClass('is_active');
		jQuery('.drawer_content').toggleClass('is_active');
		jQuery('.drawer_background').toggleClass('is_active');
		jQuery('.drawer_icon_bar1').toggleClass('is_active');
		jQuery('.drawer_icon_bar2').toggleClass('is_active');
		jQuery('.drawer_icon_bar3').toggleClass('is_active');
		
		return false;
		
	})
	
	jQuery('.drawer_content_item').on('click',function(e){
		
		jQuery('.drawer_icon').toggleClass('is_active');
		jQuery('.drawer_content').toggleClass('is_active');
		jQuery('.drawer_background').toggleClass('is_active');
		jQuery('.drawer_icon_bar1').toggleClass('is_active');
		jQuery('.drawer_icon_bar2').toggleClass('is_active');
		jQuery('.drawer_icon_bar3').toggleClass('is_active');
		
		
	});
});
	
	
	//   // #から始まるURLがクリックされた時
	// jQuery('a[href^="#"]').click(function() {
		
		
		//     // 移動速度を指定（ミリ秒）
		//     let speed = 300;
//     // ヘッダーの高さ
//     let header = jQuery('.header').innerHeight();
//     // hrefで指定されたidを取得
//     let id = jQuery(this).attr("href");
  
//     // idの値が#のみだったらターゲットをhtmlタグにしてトップへ戻るようにする
//     let target = jQuery("#" == id ? "html" : id);
  
//     // ページのトップを基準にターゲットの位置を取得
//     let position = jQuery(target).offset().top - header;
  
//     // ターゲットの位置までspeedの速度で移動
//     jQuery("html, body").animate(
//       {
//         scrollTop: position
//      },
//       speed
//     );
//     return false;
  
//   });