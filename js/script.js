var chart1; // globally available

// Link's Triforce Drag and Drop
$( init );

$(document).ready(function() {
	// Set height for Section 3 div as a multiple of the bg image height
    $div = $('#section3');
    var remainder = $div.height() % 72;
    var newHeight = $div.height() + (72-remainder);
    $div.css('height', newHeight);
    
    
    
    // Table of Contents
    var sectionsHeight = $('.sections').height();
    $('.sections').css({ top: '-' + sectionsHeight + 'px', visibility: 'visible' });
    
    $('#toc').click(function(){
    	if($('.sections').hasClass('closed')){
    		$('.sections').removeClass('closed');
    		$('.sections').animate({ top: '34px' }, 200);
    	}else{
    		$('.sections').addClass('closed');
    		$('.sections').animate({ top: '-' + sectionsHeight + 'px' }, 100);
    	}
    	return false;
    });
    
    $('.subsection').click(function(){
    	$('.subsectionContent').hide(100);
    	$(this).parent().next('.subsectionContent').show(200);
    	return false;
    });
    
    $('#tableOfContents').mouseleave(function(){
    	$('.subsectionContent').hide(100,function(){
    		$('.sections').addClass('closed');
    		$('.sections').animate({ top: '-' + sectionsHeight + 'px' }, 200);
    	});
    });
    
    
    
    /*! Copyright © 2010 Burin Asavesna (http://helloburin.com)
	 * Licensed under the MIT License (LICENSE.txt).
	 */
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
    
    // Playing with charts
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
	
	// Tooltips using qTip2
	// Make sure to only match links to the Tooltip PHP file with a rel tag
   $('a[href*=./tooltips.php?q=][rel]').each(function()
   {
      // We make use of the .each() loop to gain access to each element via the "this" keyword…
     // $(this).qtip("render"),
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
         		//$(this).children("iframe").api('pause')
         		//$(this).html("")
         		}
         }
      })
   })
 
   // Make sure it doesn't follow the link when we click it
   .click(function(event) { event.preventDefault(); });
   
   // Apple vs. Braun Slideshow
    $('.slideshow').cycle({
		fx: 'fade',
		speed: 500
	});
});

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