/*
    Use the command "npm install" in the theme directory to install these packages
    Make sure to use
    npm run dev 
    to start the server
*/

import $ from 'jquery';
import 'bootstrap';

import 'slick-carousel/slick/slick';

window.$ = $;
window.jQuery = $;

// Fade in animations

function aniMate(n) {
  var t = document.querySelectorAll(n);

  window.addEventListener('DOMContentLoaded', function() {
    t.forEach(function(n) {
      n.getBoundingClientRect().top < window.innerHeight / 1.3 && n.classList.add('animate');
    });
  }),
    window.addEventListener('scroll', function() {
      t.forEach(function(n) {
        n.getBoundingClientRect().top < window.innerHeight / 1.3 && n.classList.add('animate');
      });
    });
}

aniMate('.fade-up-stop , .fade-right-stop, .fade-left-stop'),
  aniMate('.fade-in'),
  aniMate('.fade-in-left'),
  aniMate('.fade-in-right'),
  aniMate('.scale-down');

// Scroll to top button
$(document).ready(function() {
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('#scroll').fadeIn();
    } else {
      $('#scroll').fadeOut();
    }
  });
  $('#scroll').click(function() {
    $('html, body').animate({ scrollTop: 0 }, 600);
    return false;
  });
});



// schedule Form
jQuery(document).ready(function($) {
  var formType;

  $('span.treatmentscats').hide();

  $('.ui-rabtn').click(function(e) {
    e.preventDefault();
    $('.ui-rabtn').removeClass('activem');
    $(this).addClass('activem');
    $('section#consuletationform').fadeIn();
    formType = $(this).data('contype');

    $('span.treatments-type').hide();
    $('span.treatments-type[data-type=' + formType + ']').fadeIn();
  });

  $('#schedule').submit(function(e) {
    e.preventDefault();

    var form = $(this);
    var form_results = $('#form-results');

    form_results.html(' ');
    form_results.removeClass('alert');
    form_results.removeClass('alert-error');
    form_results.removeClass('alert-success');

    form.find('.btn').prop('disabled', true);

    var errors = [];

    if (form.find('input[name=firstname]').val() == '') {
      errors.push('The first name field is required');
    }
    if (form.find('input[name=email]').val() == '') {
      errors.push('The email field is required');
    }

    if (errors.length > 0) {
      var error_html = '<ul>';
      form_results.addClass('alert');
      form_results.addClass('alert-info');

      $.each(errors, function(index, value) {
        error_html += '<li>' + value + '</li>';
      });
      error_html += '</ul>';

      form_results.html(error_html);
      form.find('.btn').prop('disabled', false);
      return false;
    }

    var data = {
      action: 'do_ajax',
      fn: 'schedule',
      siteurl: the_theme.url,
      security: the_theme.ajax_nonce,
      data: form.serializeArray(),
      formClicked: formType
    };

    jQuery.post(
      the_theme.url + '/wp-admin/admin-ajax.php',
      data,
      function(response) {
        form.find('.btn').prop('disabled', false);

        $('#form-results').html(response);
        // Use window.location to move user to thank you page, page template
        window.location = the_theme.url + '/thank-you/';
      },
      'json'
    );
  });
});

// Load Images Async switch src attribute with data-lazysrc
function ReLoadImages() {
  $('img[data-lazysrc]').each(function() {
    $(this).attr('src', $(this).attr('data-lazysrc'));
  });
}
document.addEventListener('readystatechange', event => {
  if (event.target.readyState === 'interactive') {
    //or at "complete" if you want it to execute in the most last state of window.
    ReLoadImages();
  }
});

  // $(document).ready(function() {
  //   var activeMenu = false;
  //   $('button.navbar-toggle').click(function() {
  //     console.log('s');
  //      if(activeMenu == false){
  //       $('.navbar-toggle span.menutext').html('Close'),
  //       $('button.navbar-toggle').toggleClass('active-menu'),
  //       $('#navmain').toggleClass('active-menu');
  //       activeMenu = true;
  //      } else {
  //         $('.navbar-toggle span.menutext').html('Menu'),
  //         $('button.navbar-toggle').toggleClass('active-menu'),
  //         $('#navmain').toggleClass('active-menu');
  //         activeMenu = false;
  //       }
  //   }),
  //     $('.hasdropdown').bind('mouseover mouseenter', function(e) {
  //       $('.menuimage').addClass('hoverdropdown');
  //     }),
  //     $('.hasdropdown').bind('mouseleave mouseout', function(e) {
  //       $('.menuimage').removeClass('hoverdropdown');
  //     });
  // });



  // Menu Functionality

$(document).ready(function() {
  let menuopen = false;

  $('span.navbar-toggler-icon').click(function(e) {
    console.log('ss');
    if (menuopen == false) {
      $('.hasdropdown').removeClass('activeitem');

      $(this).addClass('activeitem');
      $('.menu-text').text('Close');
      $('.navbaritems').addClass('activemenu');

      $('.navbar-toggle span.menutext').html('Close'),
      $('button.navbar-toggle').toggleClass('active-menu'),
      $('#navmain').toggleClass('active-menu');
      menuopen = true;
    } else {
      $('.hasdropdown').addClass('activeitem');
      $('.menu-text').text('Menu');
      $(this).removeClass('activeitem');
      $('.navbaritems').removeClass('activemenu');

      $('.navbar-toggle span.menutext').html('Menu'),
      $('button.navbar-toggle').toggleClass('active-menu'),
      $('#navmain').toggleClass('active-menu');
      menuopen = false;
    }
  });

  if ($(window).width() < 992) {
    $('.hasdropdown > a').click(function(e) {
      e.preventDefault();
    });
  }
});