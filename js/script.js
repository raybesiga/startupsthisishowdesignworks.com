var chart1; // globally available

// Link's Triforce Drag and Drop
$( init );

$(document).ready(function() {
    
    // Table of Contents
    var sectionsHeight = $('.sections').height();
    $('.sections').css({ top: '-' + sectionsHeight + 'px', visibility: 'visible' });
    
    $('#toc').click(function(){
    	if($('.sections').hasClass('closed')){
    		$('.sections').removeClass('closed');
    		$('.sections').animate({ top: '35px' }, 200);
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
    	$('.subsectionContent').hide(100, function(){
    		$('.sections').addClass('closed');
    		$('.sections').animate({ top: '-' + sectionsHeight + 'px' }, 200);
    	});
    });
    
    // ScrollToStuff
    
    jQuery('.subsectionContent a').click(function(){
    	var offset = $(this).attr("data-offset") || 50;
		var tid = jQuery(this).attr('href');
		var target = jQuery(tid);
		var targetOffset = target.offset();
		var targetTop = targetOffset.top
		var targetTopOffset = targetTop - offset;
		
		jQuery('html, body').animate({scrollTop: targetTopOffset}, 500);
		
		$('.subsectionContent').hide(100);
		$('.sections').addClass('closed');
    	$('.sections').animate({ top: '-' + sectionsHeight + 'px' }, 0);
		
		return false;
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
    
    // Chart: What's important to biz / engineering / devs?
	chart_row1_biz = new Highcharts.Chart({
	 chart: {
	    renderTo: 'row1_biz',
	    type: 'pie',
	    backgroundColor: 'transparent',
	    spacingTop: 30,
        spacingLeft:30,
        spacingBottom:30,
        spacingRight:30,
        marginTop:0
	 },
	 title: {
	    text: 'Business, Marketers, and Engineers',
	    margin: 0,
	    style: {
			color: '#ed1c24',
			fontSize: '14px',
			fontFamily: 'Helvetica',
			fontWeight: 'Bold'
		}
	 },
	 plotOptions: {
        pie: {
             allowPointSelect: true,
             cursor: 'pointer',
             dataLabels: {
                 enabled: false
             },
             showInLegend: false
         }
     },
	 credits: {
        enabled: false
     },
	 series: [{
	    name: 'Responses',
	    data: [
	    	['Good design makes a product useful', 46],
	    	['Good design is aesthetic', 46],
	    	['Good design is innovative', 42],
	    	['Good design makes a product understandable', 44],
	    	['Good design is timeless', 22],
	    	['Good design is environmentally friendly', 12]
	    ]
	   }]
	});
	
	// Chart: What's important to designers?
	chart_row1_dez = new Highcharts.Chart({
	 chart: {
	    renderTo: 'row1_dez',
	    type: 'pie',
	    backgroundColor: 'transparent',
	    spacingTop: 30,
        spacingLeft:0,
        spacingBottom:0,
        spacingRight:0,
        marginTop:50,
        height:430
	 },
	 title: {
	    text: 'Designers and Creative Directors',
	    margin: 0,
	    style: {
			color: '#ed1c24',
			fontSize: '14px',
			fontFamily: 'Helvetica',
			fontWeight: 'Bold'
		}
	 },
	 legend: {
	 	layout: 'vertical'
	 },
	 plotOptions: {
        pie: {
             allowPointSelect: true,
             cursor: 'pointer',
             dataLabels: {
                 enabled: false
             },
             showInLegend: true
         }
     },
	 credits: {
        enabled: false
     },
	 series: [{
	    name: 'Responses',
	    data: [
	    	['Makes a product useful', 19],
	    	['Is aesthetic', 22],
	    	['Is innovative', 16],
	    	['Makes a product understandable', 20],
	    	['Is timeless', 11],
	    	['Is environmentally friendly', 7]
	    ]
	   }]
	});
	
	// Chart: What's important to Dieter Rams?
	chart_row1_ramz = new Highcharts.Chart({
	 chart: {
	    renderTo: 'row1_ramz',
	    type: 'pie',
	    backgroundColor: 'transparent',
	    spacingTop: 30,
        spacingLeft:30,
        spacingBottom:30,
        spacingRight:30,
        marginTop:0
	 },
	 title: {
	    text: "Dieter Rams' Principles",
	    margin: 0,
	    style: {
			color: '#ed1c24',
			fontSize: '14px',
			fontFamily: 'Helvetica',
			fontWeight: 'Bold'
		}
	 },
	 plotOptions: {
        pie: {
             allowPointSelect: true,
             cursor: 'pointer',
             dataLabels: {
                 enabled: false
             },
             showInLegend: false
         }
     },
	 credits: {
        enabled: false
     },
	 series: [{
	    name: 'Responses',
	    data: [
	    	['Good design makes a product useful', 1],
	    	['Good design is aesthetic', 1],
	    	['Good design is innovative', 1],
	    	['Good design makes a product understandable', 1],
	    	['Good design is timeless', 1],
	    	['Good design is environmentally friendly', 1]
	    ]
	   }]
	});
	
	
	// Chart: How important is design to biz / engineering / devs / designers?
	chart_row2_biz = new Highcharts.Chart({
	    chart: {
	        renderTo: 'row2_biz',
	        backgroundColor: 'transparent',
	        type: 'column',
	        spacingTop: 30,
       		marginTop:85
	    },
	    title: {
	        text: 'How important is product design to you?',
	    style: {
			color: '#ed1c24',
			fontSize: '14px',
			fontFamily: 'Helvetica',
			fontWeight: 'Bold'
		}
	    },
	    credits: {
       		enabled: false
     	},
	    xAxis: {
	        categories: [
	            '1 (Not important)',
	            '2',
	            '3',
	            '4',
	            '5 (Very important)'
	        ]
	    },
	    yAxis: {
	        min: 0,
	        title: {
	            text: null
	        }
	    },
	    tooltip: {
	        formatter: function() {
	            return ''+
	                this.y +' responses';
	        }
	    },
	    plotOptions: {
	        column: {
	        	stacking: 'normal',
	            pointPadding: 0.2,
	            borderWidth: 0
	        },
	        series: {
            pointWidth: 40
        	}
	    },
	        series: [{
	        	name: 'Designers',
	        	data: [0, 1, 0, 5, 18]
	    	}, {
	        	name: 'Biz, Marketing, Dev',
	        	data: [0, 2, 3, 5, 44]
	    	}]
	});
	
	// Chart: How important do you think product design is to your users?
	chart_row2_users = new Highcharts.Chart({
	    chart: {
	        renderTo: 'row2_users',
	        backgroundColor: 'transparent',
	        type: 'column',
       		spacingTop: 30,
       		marginTop:85
	    },
	    title: {
	        text: 'How important is product design to your users?',
	    style: {
			color: '#ed1c24',
			fontSize: '14px',
			fontFamily: 'Helvetica',
			fontWeight: 'Bold'
		}
	    },
	    credits: {
       		enabled: false
     	},
	    xAxis: {
	        categories: [
	            '1 (Not important)',
	            '2',
	            '3',
	            '4',
	            '5 (Very important)'
	        ]
	    },
	    yAxis: {
	        min: 0,
	        title: {
	            text: null
	        }
	    },
	    tooltip: {
	        formatter: function() {
	            return ''+
	                this.y +' responses';
	        }
	    },
	    plotOptions: {
	        column: {
	        	stacking: 'normal',
	            pointPadding: 0.2,
	            borderWidth: 0
	        },
	        series: {
            pointWidth: 40
        	}
	    },
	        series: [{
	        	name: 'Designers',
	        	data: [0, 1, 6, 7, 10]
	    	}, {
	        	name: 'Biz, Marketing, Dev',
	        	data: [0, 1, 11, 16, 26]
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
	
	
	// Scrollable plugin for Section 4 Designer Founders
	var api = $("#scroll").scrollable({ items: '#founderBios' }).navigator().data("scrollable");

	
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