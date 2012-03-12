/*! Copyright © 2010 Burin Asavesna (http://helloburin.com)
 * Licensed under the MIT License (LICENSE.txt).
 */
(function($) {
    // boxShadow get hooks
    var div = document.createElement('div'),
        divStyle = div.style,
        support = $.support,
        rWhitespace = /\s/,
        rParenWhitespace = /\)\s/;

    support.boxShadow =
        divStyle.MozBoxShadow     === ''? 'MozBoxShadow'    :
        (divStyle.MsBoxShadow     === ''? 'MsBoxShadow'     :
        (divStyle.WebkitBoxShadow === ''? 'WebkitBoxShadow' :
        (divStyle.OBoxShadow      === ''? 'OBoxShadow'      :
        (divStyle.boxShadow       === ''? 'BoxShadow'       :
        false))));

    div = null;

    // helper function to inject a value into an existing string
    // is there a better way to do this? it seems like a common pattern
    function insert_into(string, value, index) {
        var parts  = string.split(rWhitespace);
        parts[index] = value;
        return parts.join(" ");
    }

    if ( support.boxShadow && support.boxShadow !== "BoxShadow" ) {
        $.cssHooks.boxShadow = {
            get: function( elem, computed, extra ) {
                return $.css(elem, support.boxShadow);
            },
            set: function( elem, value ) {
                elem.style[ support.boxShadow ] = value;
            }
        };

        $.cssHooks.boxShadowColor = {
            get: function ( elem, computed, extra ) {
                return $.css(elem, support.boxShadow).split(rParenWhitespace)[0] + ')';
            },
            set: function( elem, value ) {
                elem.style[ support.boxShadow ] = value + " " + $.css(elem, support.boxShadow).split(rParenWhitespace)[1];
            }
        };

        $.cssHooks.boxShadowBlur = {
            get: function ( elem, computed, extra ) {
                return $.css(elem, support.boxShadow).split(rWhitespace)[5];
            },
            set: function( elem, value ) {
                elem.style[ support.boxShadow ] = insert_into($.css(elem, support.boxShadow), value, 5);
            }
        };

        $.cssHooks.boxShadowSpread = {
            get: function ( elem, computed, extra ) {
                return $.css(elem, support.boxShadow).split(rWhitespace)[6];
            },
            set: function( elem, value ) {
                elem.style[ support.boxShadow ] = insert_into($.css(elem, support.boxShadow), value, 6);
            }
        };

        $.cssHooks.boxShadowX = {
            get: function ( elem, computed, extra ) {
                return $.css(elem, support.boxShadow).split(rWhitespace)[3];
            },
            set: function( elem, value ) {
                elem.style[ support.boxShadow ] = insert_into($.css(elem, support.boxShadow), value, 3);
            }
        };

        $.cssHooks.boxShadowY = {
            get: function ( elem, computed, extra ) {
                return $.css(elem, support.boxShadow).split(rWhitespace)[4];
            },
            set: function( elem, value ) {
                elem.style[ support.boxShadow ] = insert_into($.css(elem, support.boxShadow), value, 4);
            }
        };

        // setup fx hooks
        var fxHooks = "Blur Spread X Y".split(" ");
        $.each(fxHooks, function( i, suffix ) {
            var hook = "boxShadow" + suffix;
            $.fx.step[ hook ] = function( fx ) {
                $.cssHooks[ hook ].set( fx.elem, fx.now + fx.unit );
            };
        });
    }

})(jQuery);

// Set height for Section 3 div as a multiple of the bg image height
$(document).ready(function() {
    $div = $('#section3');
    var remainder = $div.height() % 72;
    var newHeight = $div.height() + (72-remainder);
    $div.css('height', newHeight);
});

// Playing with charts
var chart1; // globally available
$(document).ready(function() {
      chart1 = new Highcharts.Chart({
         chart: {
            renderTo: 'container',
            type: 'area'
         },
         title: {
            text: 'Fruit Consumption'
         },
         xAxis: {
            categories: ['Apples', 'Bananas', 'Oranges']
         },
         yAxis: {
            title: {
               text: 'Fruit eaten'
            }
         },
         series: [{
            name: 'Jane',
            data: [1, 0, 4]
         }, {
            name: 'John',
            data: [5, 7, 3]
         }]
      });
   });
   
   
// Tooltips using qTip2

// Create the tooltips only on document load
$(document).ready(function()
{
   // Make sure to only match links to the Tooltip PHP file with a rel tag
   $('a[href*=./tooltips.php?q=][rel]').each(function()
   {
      // We make use of the .each() loop to gain access to each element via the "this" keyword…
      $(this).qtip(
      {
         content: {
            // Set the text to an image HTML string with the correct src URL to the loading image you want to use
            text: '<img class="throbber" src="/foop/img/loader.gif" alt="Loading…" />',
            ajax: {
               url: $(this).attr('rel') // Use the rel attribute of each element for the url to load
            },
            title: {
               text: ' ', // Give the tooltip a title using each elements text
               button: true
            }
         },
         position: {
            at: 'bottom center', // Position the tooltip above the link
            my: 'top center',
            //viewport: $(window), // Keep the tooltip on-screen at all times
            effect: false // Disable positioning animation
         },
         show: {
            event: 'click',
            solo: true // Only show one tooltip at a time
         },
         hide: 'unfocus',
         style: {
            classes: 'ui-tooltip-wiki ui-tooltip-light ui-tooltip-shadow'
         },
         events: {
         	hide: function(event, api){
         		$(this).children("iframe").api_pause()
         		}
         }
      })
   })
 
   // Make sure it doesn't follow the link when we click it
   .click(function(event) { event.preventDefault(); });
});



// Apple vs. Braun Slideshow
$(document).ready(function() {
    $('.slideshow').cycle({
		fx: 'fade',
		speed: 500
	});
});

// Link's Triforce Drag and Drop
$( init );
 
function init() {
  $('#triforceDrag').draggable({ 
    axis: "x"
  });
  $('#triforceDrop').droppable( {
    drop: handleDropEvent
  });
}
 
function handleDropEvent( event, ui ) {
  var draggable = ui.draggable;
  $('#triforceDrag').hide('fast', function() {
  });
  $('#triforceDrop').css('background-image', 'url("./img/triforceComplete.jpg")');
  $('#triforceDrop').animate({
  	marginRight: '380px',
  	},500);
  function animateTheShadow(){
  $('#triforceDropz').animate({
    'boxShadowBlur': '3000px'
  	},650).animate ({'boxShadowBlur': '200px' }, 650, animateTheShadow );
  };
  animateTheShadow();
}


// Designer Founders slider
jQuery(function( $ ){
	/**
	 * Demo binding and preparation, no need to read this part
	 */
	//borrowed from jQuery easing plugin
	//http://gsgd.co.uk/sandbox/jquery.easing.php
	$.easing.elasout = function(x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
	};
	// back links
	$('a.back').click(function(){
		$(this).parents('div.pane').scrollTo( 0, 800, { queue:true } );
		$(this).parents('div.section').find('span.message').text( this.title );
		return false;
	});
	//just for the example, to stop the click on the links.
	$('ul.links').click(function(e){
		e.preventDefault();
		var link = e.target;
		link.blur();
		if( link.title )
			$(this).parent().find('span.message').text(link.title);
	});
	
	// This one is important, many browsers don't reset scroll on refreshes
	// Reset all scrollable panes to (0,0)
	$('div.pane').scrollTo( 0 );
	// Reset the screen to (0,0)
	$.scrollTo( 0 );
	
	// TOC, shows how to scroll the whole window
	$('#toc a').click(function(){//$.scrollTo works EXACTLY the same way, but scrolls the whole screen
		$.scrollTo( this.hash, 1500, { easing:'elasout' });
		$(this.hash).find('span.message').text( this.title );
		return false;
	});
	
	// Target examples bindings
	// THIS DEMO IS NOT INTENDED TO SHOW HOW TO CODE IT
	// JUST THE MULTIPLE OPTIONS. THIS CODE IS UGLY.
	var $paneTarget = $('#pane-target');
	
	$('#relative-selector').click(function(){
		$paneTarget.stop().scrollTo( 'li:eq(14)', 800 );
	});
	$('#jquery-object').click(function(){
		var $target = $paneTarget.find('li:eq(14)');
		$paneTarget.stop().scrollTo( $target , 800 );
	});
	$('#dom-element').click(function(){
		var target = $paneTarget.find('ul').get(0).childNodes[20];
		$paneTarget.stop().scrollTo( target, 800 );
	});
	$('#absolute-number').click(function(){
		$paneTarget.stop().scrollTo( 150, 800 );
	});
	$('#absolute-number-hash').click(function(){
		$paneTarget.stop().scrollTo( { top:800,left:700} , 800 );
	});
	$('#absolute-position').click(function(){
		$paneTarget.stop().scrollTo( '520px', 800 );
	});
	$('#absolute-position-hash').click(function(){
		$paneTarget.stop().scrollTo( {top:'110px',left:'290px'}, 800 );
	});
	$('#relative-position').click(function(){
		$paneTarget.stop().scrollTo( '+=100', 500 );
	});
	$('#relative-position-hash').click(function(){				
		$paneTarget.stop().scrollTo( {top:'-=100px',left:'+=100'}, 500 );
	});
	
	$('#percentage-position').click(function(){				
		$paneTarget.stop().scrollTo( '50%', 800 );
	});
	
	// Options examples bindings, they will all scroll to the same place, with different options
	function reset_o(){//before each animation, reset to (0,0), skip this.
		$paneOptions.stop(true).attr({scrollLeft:0, scrollTop:0});
	};
	var $paneOptions = $('#pane-options');
	
	$('#options-no').click(function(){
		reset_o(); $paneOptions.scrollTo( 'li:eq(15)', 1000 );
	});
	$('#options-axis').click(function(){// only scroll horizontally
		reset_o(); $paneOptions.scrollTo( 'li:eq(15)', 1000, { axis:'x' } );
	});
	$('#options-duration').click(function(){// it's the same as specifying it in the 2nd argument
		reset_o(); $paneOptions.scrollTo( 'li:eq(15)', { duration: 3000 } );
	});
	$('#options-easing').click(function(){
		reset_o(); $paneOptions.scrollTo( 'li:eq(15)', 2500, { easing:'elasout' } );
	});
	$('#options-margin').click(function(){//scroll to the "outer" position of the element
		reset_o(); $paneOptions.scrollTo( 'li:eq(15)', 1000, { margin:true } );
	});
	$('#options-offset').click(function(){//same as { top:-50, left:-50 }
		reset_o(); $paneOptions.scrollTo( 'li:eq(15)', 1000, { offset:-50 } );
	});
	$('#options-offset-hash').click(function(){
		reset_o(); $paneOptions.scrollTo( 'li:eq(15)', 1000, { offset:{ top:-5,left:-30 } });
	});
	$('#options-over').click(function(){//same as { top:-50, left:-50 }
		reset_o(); $paneOptions.scrollTo( 'li:eq(15)', 1000, { over:0.5 });
	});
	$('#options-over-hash').click(function(){
		reset_o(); $paneOptions.scrollTo( 'li:eq(15)', 1000, { over:{ top:0.2, left:-0.5 } });
	});
	$('#options-queue').click(function(){//in this case, having 'axis' as 'xy' or 'yx' matters.
		reset_o(); $paneOptions.scrollTo( 'li:eq(15)', 2000, { queue:true });
	});
	$('#options-onAfter').click(function(){
		reset_o(); $paneOptions.scrollTo( 'li:eq(15)', 2000, { 
			onAfter:function(){
				$('#options-message').text('Got there!');
			}
		});
	});
	// onAfterFirst exists only when queuing
	$('#options-onAfterFirst').click(function(){
		reset_o(); $paneOptions.scrollTo( 'li:eq(15)', 1600, { 
			queue:true,
			onAfterFirst:function(){
				$('#options-message').text('Got there horizontally!');
			},
			onAfter:function(){
				$('#options-message').text('Got there vertically!');
			}
		});
	});
});