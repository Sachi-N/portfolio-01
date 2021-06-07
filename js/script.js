new WOW().init();

var delay = (n) => new Promise( r => setTimeout(r, n*1000));

jQuery(function(){

	// topのアニメーション 
	jQuery(window).on('load', function() {
		const animate_top = async () => {

			await jQuery('#top-word1').removeClass('d-none').addClass('top-animate1');

			await delay(0.8);

			await jQuery('#top-word2').removeClass('d-none').addClass('top-animate2');

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
	