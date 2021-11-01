$(function () {
   $.each($('#catalog_filters ul.product-categories ul li'), function (i, v) {
      if ($($(v).first('ul').data("target")).find('li').length > 0) {
         $(v).parent().addClass("has-children");
      }else{
         $(v).parent().find("ul").remove();
         $(v).removeAttr("data-toggle").removeAttr("data-target").removeAttr('aria-expanded');
      }
   });

   $('#catalog_filters ul.product-categories .collapse').on('show.bs.collapse', function () {

      $("#catalog_filters ul.product-categories .collapse.show").not($(this)).not($(this).parents(".collapse")).collapse('hide');

      $("#catalog_filters ul.product-categories > .main-category.active").removeClass("active");

      $(this).parents(".main-category").addClass("active");
   })
   
   $('#catalog_filters ul.product-categories [data-toggle="collapse"]').click(function(){
      if($(this).parent().hasClass("active")){
         $(this).parent().removeClass('active');
      }else{
         $(this).parent().addClass('active');
      }
   });


   // $.each($('#catalog_filters ul.product-categories ul.active li'), function (i, v) {
   //    $(v).click();
   // });

   $('.category-items .card-text').succinct({
      size: 100
   });
   $('.category-items .card-title').succinct({
      size: 50
   });
   $('.category-items .card').matchHeight();
});