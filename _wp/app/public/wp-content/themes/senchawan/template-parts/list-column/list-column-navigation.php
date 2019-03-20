<nav class="wp-categoryNavigation">
	<ul class="list-categoryNavigation">
		
		<li class="btn-categoryNavigation<?php if(is_page( '2' )): ?> btn-categoryNavigation-current<?php endif; ?>">
			<a href="/archive/">all</a>
		</li>
		
		<li class="btn-categoryNavigation<?php if(is_category( 'culture' )): ?> btn-categoryNavigation-current<?php endif; ?>">
			<a href="/category/culture/">culture</a>
		</li>
		
		<li class="btn-categoryNavigation<?php if(is_category( 'news' )): ?> btn-categoryNavigation-current<?php endif; ?>">
			<a href="/category/news/">news</a>
		</li>
		
		<li class="btn-categoryNavigation<?php if(is_category( 'product' )): ?> btn-categoryNavigation-current<?php endif; ?>">
			<a href="/category/product/">product</a>
		</li>
		
	</ul><!-- /.list-categoryNavigation -->
</nav><!-- /.wp-categoryNavigation -->