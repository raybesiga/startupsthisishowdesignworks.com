<?php
$q = $_GET['q'];

if($q === "innovative"){ ?>
	<p class="principleContent">The possibilities for innovation are not, by any means, exhausted. Technological development is always offering new opportunities for innovative design. But <b>innovative design always develops in tandem with innovative technology</b>, and can never be an end in itself.</p>
<?php }elseif($q === "useful"){ ?>
	<p class="principleContent">A product is bought to be used. It has to satisfy certain criteria, <b>not only functional, but also psychological and aesthetic</b>. Good design emphasizes the usefulness of a product whilst disregarding anything that could possibly detract from it.</p>
<?php }elseif($q === "aesthetic"){ ?>
	<p class="principleContent">The aesthetic quality of a product is integral to its usefulness because products we use every day affect our person and our well-being. But <b>only well-executed objects can be beautiful</b>.</p>
<?php }elseif($q === "understandable"){ ?>
	<p class="principleContent">It clarifies the product’s structure. Better still, it can make the product talk. At best, it is self-explanatory.</p>
<?php }elseif($q === "unobtrusive"){ ?>
	<p class="principleContent">Products fulfilling a purpose are like tools. They are neither decorative objects nor works of art. Their design should therefore be both neutral and restrained, to leave room for the user’s self-expression.</p>

<?php }elseif($q === "honest"){ ?>
	<p class="principleContent">It does not make a product seem more innovative, powerful or valuable than it really is. It does not attempt to manipulate the consumer with promises that cannot be kept.</p>
<?php }elseif($q === "longlasting"){ ?>
	<p class="principleContent">It avoids being fashionable and therefore never appears antiquated. Unlike fashionable design, it lasts many years – even in today’s throwaway society.</p>
<?php }elseif($q === "thorough"){ ?>
	<p class="principleContent">Nothing must be arbitrary or left to chance. Care and accuracy in the design process show respect towards the consumer.</p>
<?php }elseif($q === "environmental"){ ?>
	<p class="principleContent">Design makes an important contribution to the preservation of the environment. It conserves resources and minimizes physical and visual pollution throughout the lifecycle of the product.</p>
<?php }elseif($q === "littledesign"){ ?>
	<p class="principleContent">Less, but better – because it concentrates on the essential aspects, and the products are not burdened with non-essentials.</p>
	<p class="principleContent">Back to purity, back to simplicity.</p>
<?php }else{ ?>
<div class="content">
	<img src="./img/tool/404.jpg" />
	<h6>Content not found</h6>
	<p class="principleContent">Whoops, it looks like the content for this tooltip is missing. That's really embarrasing, and I'm really sorry.</p>
	<p class="principleContent">Please tweet me <a href="http://twitter.com/wellsriley">@wellsriley</a> and I'll try to fix the problem.</p>
</div>
<?php } ?>