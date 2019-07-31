jQuery.noConflict();(function($){"use strict";$(document).ready(function(){init_navbar();init_shrinkheader();init_timer();init_portfolio();init_featurednews();init_collapse();init_counterup();init_skill();init_map();init_submit();init_donation();});$(window).resize(function(){var windowWidth=$(window).width();if(windowWidth<768){$('.navbar-collapse a').click(function(e){$('.navbar-collapse').collapse('toggle');});}
$('.full-height').innerHeight($(window).height());$('.error404 .klberror').innerHeight($(window).height());}).resize();$(window).load(function(){$("#preloader").fadeOut("slow");});function init_navbar(){$('body').scrollspy({target:".navbar",offset:50});$("#navbar a.internal").on('click',function(event){if(this.hash!==""){event.preventDefault();var hash=this.hash;$('html, body').animate({scrollTop:$(hash).offset().top},1000,function(){window.location.hash=hash;});}});}
function init_shrinkheader(){$(function(){var shrinkHeader=100;$(window).scroll(function(){var scroll=getCurrentScroll();if(scroll>=shrinkHeader){$('.navbar').addClass('shrink');$('.socials-top').addClass('sticky');}
else{$('.navbar').removeClass('shrink');$('.socials-top').removeClass('sticky');}});function getCurrentScroll(){return window.pageYOffset||document.documentElement.scrollTop;}});}
function init_timer(){$('.timer').countTo();}
function init_portfolio(){$('#js-grid-mosaic').cubeportfolio({filters:'#js-filters-mosaic',loadMore:'#js-loadMore-mosaic',loadMoreAction:'click',layoutMode:'mosaic',sortToPreventGaps:true,mediaQueries:[{width:1500,cols:5},{width:1100,cols:4},{width:800,cols:3},{width:480,cols:2},{width:320,cols:1}],defaultFilter:'*',animationType:'quicksand',gapHorizontal:40,gapVertical:40,gridAdjustment:'responsive',caption:'zoom',displayType:'sequentially',displayTypeSpeed:100,lightboxDelegate:'.cbp-lightbox',lightboxGallery:true,lightboxTitleSrc:'data-title',lightboxCounter:'<div class="cbp-popup-lightbox-counter">{{current}} of {{total}}</div>',});}
function init_featurednews(){$('#js-grid-slider-team').cubeportfolio({layoutMode:'slider',drag:true,auto:false,autoTimeout:5000,autoPauseOnHover:true,showNavigation:false,showPagination:true,rewindNav:true,scrollByPage:true,gridAdjustment:'responsive',mediaQueries:[{width:1680,cols:1},{width:1350,cols:1},{width:800,cols:1},{width:480,cols:1},{width:320,cols:1}],gapHorizontal:0,gapVertical:45,caption:'',displayType:'fadeIn',displayTypeSpeed:400,});}
function init_collapse(){var $myGroup=$('*');$myGroup.on('show.bs.collapse','.collapse',function(){$myGroup.find('.collapse.in').collapse('hide');});}
function init_counterup(){$('.counter').counterUp({delay:10,time:2000});}
function init_skill(){$('.skillbar').each(function(){$(this).find('.skillbar-bar').animate({width:jQuery(this).attr('data-percent')},3000);});}
function init_map(){$(".cover-map").click(function(){$(this).toggleClass("map-active");$(this).find(".mm-open").toggle();$(this).find(".mm-close").toggle();});}
function init_submit(){$('.wpcf7-form input[type="submit"]').after('<i class="fa fa-envelope-o"></i>');$('.wpcf7-submit').closest('p').addClass('col-md-12 submit');$('.wpcf7-text').closest('p').addClass('col-md-4');$('.wpcf7-textarea').closest('p').addClass('col-md-12');$('.remodal .wpcf7-text').closest('p').removeClass('col-md-4');$('.remodal .wpcf7-textarea').closest('p').removeClass('col-md-12');$('.remodal .wpcf7-submit').closest('p').removeClass('col-md-12');}
function init_donation(){$('.migla_custom_amount').closest('div.col-sm-5').addClass('col-md-12');$('select#miglaform_campaign').closest('div').addClass('col-md-12');$('h2.mg_DonationInformation').closest('header').addClass('klb-first');$('label#miglad_firstname').closest('section').addClass('klb-donorinfo');$('input#mg_add_to_milist').closest('.form-group').addClass('klb-maillist');$(".page img.alignleft[width='160']").closest("p").addClass("klbclear");}})(jQuery);