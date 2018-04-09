

</div>

<div class="col-md-12 text-center" id="footer">&copy; Copyright 2013-2015 XYZ Oy</div>

<!-- Details modal  -->

<!--making the animation of the object logo-->
<script>

jQuery(window).scroll(function(){
  var vscroll = jQuery(this).scrollTop();
  jQuery('#logobodytext').css({
    "transform":"translate(0px, "+vscroll/2+"px)"
  });
});

function detailsmodal(id){
  var data = {"id":id};
  jQuery.ajax({
    url:'/tutorial/includes/detailsmodal.php',
    method: "post",
    data: data,
    success: function(data){
      jQuery('body').append(data);
      jQuery('#details-modal').modal('toggle');
    },
    error: function(){
      alert("something went wrong!");
    }
  });
}
</script>
</div>

</body>

</html>
