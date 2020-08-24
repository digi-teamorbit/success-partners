
// slicknav-script

  $(function(){
    $('#menu').slicknav();
  });

// slicknav-script

// WOW-script

 new WOW().init();

// WOW-script

// owl-carousel script

  $('.team_slider').slick({
  dots: false,
  arrows:true,
  infinite: false,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        arrows:true,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
// owl-carousel script



//plugin bootstrap minus and plus

$('.btn-number').click(function(e) {
  e.preventDefault();
  fieldName = $(this).attr('data-field');
  type = $(this).attr('data-type');
  var input = $("input[name='" + fieldName + "']");
  var currentVal = parseInt(input.val());
  if (!isNaN(currentVal)) {
    if (type == 'minus') {
      if (currentVal > input.attr('min')) {
        input.val(currentVal - 1).change();
      }
      if (parseInt(input.val()) == input.attr('min')) {
        $(this).attr('disabled', true);
      }
    } else if (type == 'plus') {
      if (currentVal < input.attr('max')) {
        input.val(currentVal + 1).change();
      }
      if (parseInt(input.val()) == input.attr('max')) {
        $(this).attr('disabled', true);
      }
    }
  } else {
    input.val(0);
  }
});
$('.input-number').focusin(function() {
  $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {
  minValue = parseInt($(this).attr('min'));
  maxValue = parseInt($(this).attr('max'));
  valueCurrent = parseInt($(this).val());
  name = $(this).attr('name');
  if (valueCurrent >= minValue) {
    $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
  } else {
    alert('Sorry, the minimum value was reached');
    $(this).val($(this).data('oldValue'));
  }
  if (valueCurrent <= maxValue) {
    $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
  } else {
    alert('Sorry, the maximum value was reached');
    $(this).val($(this).data('oldValue'));
  }
});
var rg1 = new RadioGroup(document.getElementById('rg1'));
rg1.init();
var rg2 = new RadioGroup(document.getElementById('rg2'));
rg2.init();