'use strict';
// var mainDocument = $(document);

// init foundation
// $(document).foundation();

// Init all plugin when document is ready 
$(document).on('ready', function () {
  // 0. Init console to avoid error
  var method;
  var noop = function () { };
  var methods = [
    'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
    'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
    'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
    'timeStamp', 'trace', 'warn'
  ];
  var length = methods.length;
  var console = (window.console = window.console || {});
  var contextWindow = $(window);
  var $root = $('html, body');
  while (length--) {
    method = methods[length];
    // Only stub undefined methods.
    if (!console[method]) {
      console[method] = noop;
    }
  }

  // 1. Background image as data attribut 
  var list = $('.bg-img');
  for (var i = 0; i < list.length; i++) {
    var src = list[i].getAttribute('data-image-src');
    list[i].style.backgroundImage = "url('" + src + "')";
    list[i].style.backgroundRepeat = "no-repeat";
    list[i].style.backgroundPosition = "center";
    list[i].style.backgroundSize = "cover";
  }
  // Background color as data attribut
  var list = $('.bg-color');
  for (var i = 0; i < list.length; i++) {
    var src = list[i].getAttribute('data-bgcolor');
    list[i].style.backgroundColor = src;
  }

  // 2. Init Coutdown clock
  try {
    // check if clock is initialised
    $('.clock-countdown').downCount({
      date: $('.site-config').attr('data-date'),
      offset: +10
    });
  }
  catch (error) {
    // Clock error : clock is unavailable
    console.log("clock disabled/unavailable");
  }

  // 3. Navigation menu
  // 3.1 Show/hide menu when icon is clicked
  var menuItems = $('.all-menu-wrapper .nav-link');
  var menuIcon = $('.menu-icon, #navMenuIcon');
  var menuBlock = $('.all-menu-wrapper');
  var menuLinks = $(".top-menu-links a, .main-menu a, .all-menu-wrapper a");
  // Menu icon clicked
  menuIcon.on('click', function () {
    console.log('menu clicked')
    menuIcon.toggleClass('menu-visible')
    menuBlock.toggleClass('menu-visible')
    menuItems.toggleClass('menu-visible');
    return false;
  });

  // Hide menu after a menu item clicked
  menuLinks.on('click', function () {
    if (menuItems.hasClass('menu-visible')) {
      menuIcon.removeClass('menu-visible');
      menuBlock.removeClass('menu-visible');
      menuItems.removeClass('menu-visible');
    }
    return true;
  });
  // 3.2 Page navigation
  $('#topBarMenu').onePageNav({
    currentClass: 'active',
    changeHash: false,
    scrollSpeed: 750,
    scrollThreshold: 0.5,
    filter: '',
    easing: 'swing',
    begin: function () {
      //I get fired when the animation is starting
    },
    end: function () {
      //I get fired when the animation is ending
    },
    scrollChange: function ($currentListItem) {
      //I get fired when you enter a section and I pass the list item of the section
    }
  });

  // 4 Carousel Slider

  // 4.c carousel-swiper-hash demo
  new Swiper('.carousel-swiper-hash-demo .swiper-container', {
    pagination: '.carousel-swiper-hash-demo .items-pagination',
    paginationClickable: true,
    paginationBulletRender: function (swiper, index, className) {
      var text = swiper.slides[index + 1].getAttribute('data-hash');
      return '<span class="' + className + ' ">' + text + '</span>';
    },
    loop: true,
    grabCursor: true,
    centeredSlides: true,
    autoplay: 5000,
    autoplayDisableOnInteraction: false,
    slidesPerView: 1,
    spaceBetween: 0,
  });

  // 4.c carousel-swiper-review demo
  new Swiper('.carousel-swiper-review-demo .swiper-container', {
    pagination: '.carousel-swiper-review-demo .items-pagination',
    paginationClickable: true,
    loop: true,
    grabCursor: true,
    centeredSlides: true,
    autoplay: 5000,
    autoplayDisableOnInteraction: false,
    slidesPerView: 1,
    spaceBetween: 0,
  });

  // 4.d carousel-beta demo
  new Swiper('.carousel-swiper-beta-demo .swiper-container', {
    pagination: '.carousel-swiper-beta-demo .items-pagination',
    paginationClickable: '.carousel-beta-alpha-demo .items-pagination',
    loop: true,
    grabCursor: true,
    centeredSlides: true,
    autoplay: 5000,
    autoplayDisableOnInteraction: false,
    slidesPerView: 1,
    spaceBetween: 0,
  });

  // contact form
  var sendEmailForm = $('.send_email_form');
  var sendMessageForm = $('.send_message_form');
  // Default server url
  var newsletterServerUrl = './ajaxserver/serverfile.php';
  var messageServerUrl = './ajaxserver/serverfile.php';

  // Use form define action attribute
  if (sendEmailForm.attr('action') && (sendEmailForm.attr('action')) != '') {
    newsletterServerUrl = sendEmailForm.attr('action');
  }
  if (sendMessageForm.attr('action') && (sendMessageForm.attr('action') != '')) {
    messageServerUrl = sendMessageForm.attr('action');
  }

  sendEmailForm.initForm({
    serverUrl: newsletterServerUrl,
  });
  sendMessageForm.initForm({
    serverUrl: messageServerUrl,
  });

  // 8. Hide some ui on scroll
  var scrollHeight = $(document).height() - contextWindow.height();
  contextWindow.on('scroll', function () {
    var scrollpos = $(this).scrollTop();
    var siteHeaderFooter = $('.page-footer, .page-header');

    // if (scrollpos > 10 && scrollpos < scrollHeight - 100) {
    if (scrollpos > 50) {
      siteHeaderFooter.addClass("scrolled");
    }
    else {
      siteHeaderFooter.removeClass("scrolled");
    }
  });



  // 9. Page Loader : hide loader when all are loaded
  contextWindow.on('load', function () {
    $('#page-loader').addClass('p-hidden');
    $('.section').addClass('anim');
  });

});
// var citation_type = "apa";
// var citation_name = "APA";
var form_data = {};
$(document).ready(function () {

    // change_form($('#citation_source .nav-item.nav-link.active'),'website_form.php');
});

function change_type(e, type, name){
  // citation_type = type;
  // citation_name = name;
      $('#citation_type .navbar-nav .nav-link.active').removeClass('active');


$(e.target).addClass('active');
$('#header').text(name + ' Citation Generation');
$('#citation_type').val(type.toLowerCase());

    $.blockUI({message:'<div class="spinner">Loading...</div>',css: { backgroundColor: 'transparent', color: '#fff', border:'none'}});
    
    setTimeout(function () {
        $.unblockUI();
    }, 1000);
}


function change_form(e,url){

    $.blockUI({message:'<div class="spinner">Loading...</div>',css: { backgroundColor: 'transparent', color: '#fff', border:'none'}});



    if(  $('#citation_source .navbar-nav .nav-link.active').length !=0){
        $('#citation_source .navbar-nav .nav-link.active').removeClass('active');
    }else{
        $('#citation_source .navbar-nav .dropdown-menu .dropdown-item.active').removeClass('active');
    }
    $(e.target).addClass('active');
    $.ajax({
        type: "GET",
        url: url,
        data: {'type':citation_type},
        //timeout:1000,
        error: function(x, t, m) {
        },
        success: function(msg){
            $('#page').html(msg);
            setTimeout(function () {
                $.unblockUI();
            }, 500);
        }
    });

}


function regular_data(){
    var citation_style = {
      "apa":"apa",
      "ama":"american-medical-association",
      "asa":"american-sociological-association",
      "acs":"american-chemical-society",
      "apsa":"american-political-science-association",
      "ieee":"the-institute-of-electronics-information-and-communication-engineers",
      "chicago":"chicagob",
      "bluebook":"bluebook-law-review",
      "harvard":"harvard1",
      "mla":"mla"
    };
    form_data = {};
    var key = '02f50edab166980e3eff51a0effd94ba';
    var source = $('input[name=source]').val();
    var style = $('input[name=style]').val();
    form_data.key = key;
    form_data.source = source;
    form_data.style = citation_style[style];
    form_data.contributors = [];
    var author_list = $('#author').find('.row');
    author_list.each(function (value) {
        var author = {};
        author['first'] = $(this).find('input[name=firstname]').val();
        author['last'] = $(this).find('input[name=lastname]').val();
        author['function'] = "author";
        form_data.contributors.push(author);
    });
    var quote ="";
    if($('input[name=quote]').length !=0){
        quote = $('textarea[name=quote]').val();
        form_data.abstract = quote;
    }

    return source;

}

function book_form(e){
  e.preventDefault();
    var source = regular_data();
    form_data[source] = {};
    form_data.pubtype = {
      "main" : "pubnonperiodical"
    };
    var title =  $('input[name=title]').val();
    var publisher =  $('input[name=publisher]').val();
    var location =  $('input[name=location]').val();

    var city = "";
    var state = "";
    if(location.indexOf(',') > -1){
        var split_location = location.split(',');
         city = split_location[0];
         state = split_location[1];
    }else {
      city = location;
    }

    var year = $('input[name=year]').val();
    form_data[form_data.pubtype.main] = {
        "title":title,
        "publisher":publisher,
        "city":city,
        "year":year,
        "state":state
    };

console.log(JSON.stringify(form_data));
get_cite(form_data);

}
function dissertation_form(e){
  e.preventDefault();
    var source = regular_data();
    var title =  $('input[name=title]').val();
    var university =  $('input[name=university]').val();
    var level =  $('input[name=leven]').val();


    var year = $('input[name=year]').val();
    form_data[source] = {
        "title":title,
        "university":university,
        "yeargiven":year,
        "level":level
    };
    form_data.pubtype = {
        "main" : "pubnonperiodical"
    };
    form_data[form_data.pubtype.main] = {
    };
console.log(JSON.stringify(form_data));
get_cite(form_data);

}
function ebook_form(e){
  e.preventDefault();
    form_data.pubother = {"medium":"electronic"};
    book_form(e);
}
function website_form(e){
  e.preventDefault();
    var source = regular_data();

    form_data.pubtype = {
      "main" : "pubonline"
    };
    var title =  $('input[name=title]').val();
    var publisher =  $('input[name=publisher]').val();
    var url =  $('input[name=url]').val();


    var year = $('input[name=year]').val();
    var day = $('input[name=day]').val();
    var month = $('input[name=month]').val();
    var access_year = $('input[name=access_year]').val();
    var access_day = $('input[name=access_day]').val();
    var access_month = $('input[name=access_month]').val();

    form_data[source] = {
        "title":title
    };
    form_data[form_data.pubtype.main] = {
        // "title":title,
        "url":url,
        "showurl":"yes",
        "day":day,
        "month":month,
        "year":year,
        "dayaccessed":access_day,
        "monthaccessed":access_month,
        "yearaccessed":access_year
    };
console.log(form_data);
    get_cite(form_data);

}
function blog_form(e){
  e.preventDefault();
    var source = regular_data();

    form_data.pubtype = {
      "main" : "pubonline"
    };
    var title =  $('input[name=title]').val();
    var url =  $('input[name=url]').val();


    var year = $('input[name=year]').val();
    var day = $('input[name=day]').val();
    var month = $('input[name=month]').val();
    var access_year = $('input[name=access_year]').val();
    var access_day = $('input[name=access_day]').val();
    var access_month = $('input[name=access_month]').val();

    form_data[source] = {
        "title":title,
        "posttype":"article"
    };
    if(source == "blog"){
        form_data[source].type = "web log";
    }else {
        form_data[source].type = "audio blog";
    }
    form_data[form_data.pubtype.main] = {
        "title":title,
        "url":url,
        "showurl":"yes",
        "day":day,
        "month":month,
        "year":year,
        "dayaccessed":access_day,
        "monthaccessed":access_month,
        "yearaccessed":access_year,
    };
console.log(form_data);
    get_cite(form_data);

}


function journal_form(e){
  e.preventDefault();
    var source = regular_data();

    form_data.pubtype = {
      "main" : "pubjournal"
    };
    var title =  $('input[name=title]').val();
    var journal_name =  $('input[name=journal_name]').val();
    var volume =  $('input[name=volume]').val();
    var issue =  $('input[name=issue]').val();
    var page =  $('input[name=page]').val();


    var year = $('input[name=year]').val();
    var day = $('input[name=day]').val();
    var month = $('input[name=month]').val();
    var firstname = $('input[name=editor_firstname]').val();
    var lastname = $('input[name=editor_lastname]').val();

    form_data[source] = {
        "title":title
    };
    form_data[form_data.pubtype.main] = {
        "title":journal_name,
        "vol":volume,
        "issue":issue,
        "year":year,
        "start":page
    };
    var editor = {};
    editor['first'] = firstname;
    editor['last'] = lastname;
    editor['function'] = "editor";
    form_data.contributors.push(editor);
console.log(form_data);
    get_cite(form_data);

}
function newspaper_form(e){
  e.preventDefault();
    var source = regular_data();

    form_data.pubtype = {
      "main" : "pubnewspaper"
    };
    var title =  $('input[name=title]').val();
    var news_name =  $('input[name=news_title]').val();
    var start =  $('input[name=page_start]').val();
    var end =  $('input[name=page_end]').val();


    var year = $('input[name=year]').val();
    var day = $('input[name=day]').val();
    var month = $('input[name=month]').val();
    var firstname = $('input[name=editor_firstname]').val();
    var lastname = $('input[name=editor_lastname]').val();

    form_data[source] = {
        "title":title
    };
    form_data[form_data.pubtype.main] = {
        "title":news_name,
        "day":day,
        "month":month,
        "year":year,
        "start":start,
        "end":end
    };
    var editor = {};
    editor['first'] = firstname;
    editor['last'] = lastname;
    editor['function'] = "editor";
    form_data.contributors.push(editor);
console.log(form_data);
    get_cite(form_data);

}
function film_form(e){
  e.preventDefault();
    var source = regular_data();

    form_data.pubtype = {
      "main" : "pubfilm"
    };
    var title =  $('input[name=title]').val();
    var publisher =  $('input[name=publisher]').val();
    var format =  $('input[name=format]').val();


    var year = $('input[name=year]').val();

    form_data[source] = {
        "title":title
    };
    form_data[form_data.pubtype.main] = {
        "distributor":publisher,
        "mediatype":format,
        "year":year
    };

    $.each(form_data.contributors, function (i) {
        form_data.contributors[i].function ="director";
    });

console.log(form_data);
    get_cite(form_data);

}
function interview_form(e){
  e.preventDefault();
    var source = regular_data();
    var title =  $('input[name=title]').val();
    var format =  $('input[name=format]').val();
    var location =  $('input[name=location]').val();


    var year = $('input[name=year]').val();
    var day = $('input[name=day]').val();
    var month = $('input[name=month]').val();
    var firstname = $('input[name=editor_firstname]').val();
    var lastname = $('input[name=editor_lastname]').val();



    form_data[source] = {
        "title":title,
        "type":format,
        "day":day,
        "month":month,
        "year":year,
        "how":format
    };
    form_data.pubtype = {
        "main" : "pubnewspaper"
    };
    form_data[form_data.pubtype.main] = {
        "title":title,
        "day":day,
        "month":month,
        "year":year,
        "city":location
    };
    $.each(form_data.contributors, function (i) {
        form_data.contributors[i].function ="interviewee";
    });

    var editor = {};
    editor['first'] = firstname;
    editor['last'] = lastname;
    editor['function'] = "interviewer";
    form_data.contributors.push(editor);
console.log(form_data);
    get_cite(form_data);

}
function email_form(e){
  e.preventDefault();
    var source = regular_data();
    var title =  $('input[name=title]').val();


    var year = $('input[name=year]').val();
    var day = $('input[name=day]').val();
    var month = $('input[name=month]').val();

    form_data.pubtype = {
        "main" : "pubother"
    };
    form_data[form_data.pubtype.main] = {
        "title":title,
        "day":day,
        "month":month,
        "year":year
    };
    $.each(form_data.contributors, function (i) {
        form_data.contributors[i].function ="from";
    });


console.log(form_data);
    get_cite(form_data);

}



function get_cite(cite_data){
  var source = $('input[name=source]').val();
    var style = $('input[name=style]').val();
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    $.blockUI({message:'<div class="spinner">Loading...</div>',css: { backgroundColor: 'transparent', color: '#fff', border:'none'}});

    //setTimeout(function () {
      //  $.unblockUI();
    //}, 2000);
    var cite_info = $('#cite_info');
    cite_info.css('color', 'black');

  var url = '/api/citation';
 // var token = $('meta[name="csrf-token"]').attr('content');
  //cite_data._token = token;
    $.ajax({
        type: "POST",
        url: url,
        data: cite_data,
        dataType: 'json',
        error: function(x, t, m) {
            console.log(m);
          if(x.status==419){//if you get 419 error which meantoken expired
                //refreshToken(function(){
                 //  get_cite(cite_data)//send ajax again
                //});
             }
          var alert = $('#alert');
            alert.text('An error occurred while generating citation data. Please try again!!!')
            alert.show();
            setTimeout(function () {
                $('#alert').fadeOut();
            }, 5000);
              $('html, body').animate({
                  scrollTop: $("body").offset().top
              }, 1000);
          setTimeout(function () {
                $.unblockUI();
            }, 500);
        },
        success: function(msg){
          if(msg.status == "ok"){
              window.location.href = '/result/'+source+'/'+style;
          }else{
            var alert = $('#alert');
            alert.text('An error occurred while generating citation data. Please try again!!!')
            alert.show();
            setTimeout(function () {
                $('#alert').fadeOut();
            }, 5000);
              $('html, body').animate({
                  scrollTop: $("body").offset().top
              }, 1000);

          }
            setTimeout(function () {
                $.unblockUI();
            }, 500);

        }
    });
}

function cite_copy(){
    var cite_textarea = $('#cite_input');var cite_info = $('#cite_info');
    var $tempElement = $("<input>");
    $("body").append($tempElement);
    $tempElement.val(cite_textarea.text()).select();
    document.execCommand("Copy");
    $tempElement.remove();
    cite_info.css('color', 'green');
    cite_info.text('Text coppied!!!');

}

 function refreshToken(callback){
          $.get('refresh-csrf').done(function(data){
             setHeader(data);
              callback(true);
           });
    }
    //Optional: keep token updated every hour
     setInterval(function(){
            refreshToken(function(){
                    console.log("Token refreshed!");
                });

            }, 3600000);