/*
 * jQuery Comment plugin 1.0.0
 *
 * Copyright (c) 2016 Dayan Balevski
 */

 (function($) {
	$.fn.commentLikes = function (settings) {
		//default
		var config = {
			type: 'blog',
			token: '',
			uniqueID: '',
		};
		var liked = 0;

		if (settings) {
			$.extend(config, settings);
		}

		$(this).find('.cthumb').click(function()
		{
			if($(this).hasClass('clikes'))
			{
				liked = 1;
				toggleLike($(this), "You Liked this comment", "Like this comment");
				$(this).parent().find('.cdislikes').removeClass('active').attr('title', "Dislike this comment");
			}else if($(this).hasClass('cdislikes'))
			{
				liked = -1;
				toggleLike($(this), "You Disliked this comment", "Dislike this comment");
				$(this).parent().find('.clikes').removeClass('active').attr('title', "Like this comment");
			}
		});

		function toggleLike(like, on, off)
		{
			var commentid = $(like).parents('.comment-card').data('comment');
			var toggle;

			$(like).toggleClass('active');
			if($(like).hasClass('active')){
				$(like).attr('title', on);
			}else{
				$(like).attr('title', off);
				liked = 0;
			}
			$(like).parent().find('.cthumb').not($(like)).removeClass('active');

			$.ajax({
			  method: "POST",
			  url: "/commentLikes",
			  data: { '_token': config.token, 'commentid' : commentid, 'type' : config.type, 'liked' : liked, 'uniqueid' : config.uniqueID },
				success:function(data){
					$(like).parent().find('.clikes').next().html(data.likes);
					$(like).parent().find('.cdislikes').next().html(data.dislikes);
					toggle = data.toggled;
				},
				error:function(data){
					console.log(data);
				}
			})

			return toggle;
		}

		//
		// $(document).off("click", '.morelink');
		//
		// $(document).on({click: function () {
		//
		// 		var $this = $(this);
		// 		if ($this.hasClass('less')) {
		// 			$this.removeClass('less');
		// 			$this.html(config.moreText);
		// 		} else {
		// 			$this.addClass('less');
		// 			$this.html(config.lessText);
		// 		}
		// 		$this.parent().prev().toggle();
		// 		$this.prev().toggle();
		// 		return false;
		// 	}
		// }, '.morelink');
		//
		// return this.each(function () {
		// 	var $this = $(this);
		// 	if($this.hasClass("shortened")) return;
		//
		// 	$this.addClass("shortened");
		// 	var content = $this.html();
		// 	if (content.length > config.showChars) {
		// 		var c = content.substr(0, config.showChars);
		// 		var h = content.substr(config.showChars, content.length - config.showChars);
		// 		var html = c + '<span class="moreellipses">' + config.ellipsesText + ' </span><span class="morecontent"><span>' + h + '</span> <a href="#" class="morelink">' + config.moreText + '</a></span>';
		// 		$this.html(html);
		// 		$(".morecontent span").hide();
		// 	}
		// });

	};

 })(jQuery);
