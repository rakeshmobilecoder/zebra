$(document).ready(function() {
  $('[data-toggle="tooltip"]').tooltip();
  $('[data-toggle="popover"]').popover();
  // $('[data-toggle="tab"]').tab();
});
/* smooth scroll starts here */
$(document).ready(function() {
  $('.hashscroll').click(function() {
    if (
      location.pathname.replace(/^\//, '') ==
        this.pathname.replace(/^\//, '') &&
      location.hostname == this.hostname
    ) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate(
          {
            scrollTop: target.offset().top - 0
          },
          1000
        );
        return false;
      }
    }
  });
});

$('.datepicker_input').datepicker({    
    autoclose: true,
    format: 'dd-mm-yyyy',
    todayHighlight: true
});

$(document).ready(function(){
    $('input[type="file"]').change(function(e){
        var fileName = e.target.files[0].name;
        $('.file_name').html(fileName);            
    });
});


function readURL(input,input2) {
  var id = input2;
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#'+id)
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    } else {

    }
}  

// Password text show and hide
$(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});

$('#agreed_check').click(function(){
      var inputValue = $(this).attr("value");
      $("." + inputValue).slideToggle();
  });


jQuery().ready(function() {
    /* Custom select design */
    jQuery('.drop-down').append('<div class="button"></div>');
    jQuery('.drop-down').append('<ul class="select-list list-unstyled"></ul>');
    jQuery('.drop-down select option').each(function() {
        var bg = jQuery(this).css('background-image');
        jQuery('.select-list').append('<li class="clsAnchor"><span value="' + jQuery(this).val() + '" class="' + jQuery(this).attr('class') + '" style=background-image:' + bg + '>' + jQuery(this).text() + '</span></li>');
    });
    jQuery('.drop-down .button').html('<span style=background-image:' + 
      jQuery('.drop-down select').find(':selected').css('background-image') + '>' + 
      jQuery('.drop-down select').find(':selected').text() + '</span>' + 
      '<a href="javascript:void(0);" class="select-list-link"><i class="fa fa-angle-down fz20" aria-hidden="true"></i></a>');
    jQuery('.drop-down ul li').each(function() {
        if (jQuery(this).find('span').text() == jQuery('.drop-down select').find(':selected').text()) {
            jQuery(this).addClass('active');
        }
    });
    jQuery('.drop-down .select-list span').on('click', function() {
        var dd_text = jQuery(this).text();
        var dd_img = jQuery(this).css('background-image');
        var dd_val = jQuery(this).attr('value');
        jQuery('.drop-down .button').html('<span style=background-image:' + dd_img + '>' + dd_text + '</span>' + '<a href="javascript:void(0);" class="select-list-link"><i class="fa fa-angle-down fz20" aria-hidden="true"></i></a>');
        jQuery('.drop-down .select-list span').parent().removeClass('active');
        jQuery(this).parent().addClass('active');
        $('.drop-down select[name=options]').val(dd_val);
        $('.drop-down .select-list li').slideUp();
        jQuery('.drop-down ul').toggleClass('ul-border'); 
    });
    
    jQuery('.drop-down .button').on('click', 'a.select-list-link', function() {
        jQuery('.drop-down ul li').slideToggle();        
        jQuery('.drop-down ul').toggleClass('ul-border');       
    });
    
    //jQuery('.drop-down ul').css({'border':'0'+'px'});
    /* End */
});
/* smooth scroll starts here */