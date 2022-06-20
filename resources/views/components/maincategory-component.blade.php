<div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 float-right-style">
	<div class="categories-menu mrg-xs">
		<div class="category-heading">
			<h3> Browse Categories</h3>
		</div>
		<div class="category-menu-list">
			<ul>
				@foreach ($categories as $category)
					<li><a href="#"><img alt="" src="{{ asset('storage/categoryiconimage') . '/' . $category->icon_image }}"> {{ $category->name }}
							@if ($category->childs == null)
							@else
								<i class="zmdi zmdi-chevron-right"></i>
							@endif
						</a>
						@if ($category->childs)
							@foreach ($category->childs as $key => $subCategory)
								<div class="category-menu-dropdown">
									<div class="category-part-{{ $key + 1 }} category-common mb--30">
										<h4 class="categories-subtitle"> {{ $subCategory->name }}</h4>
										@if ($subCategory->childs)
											<ul>
												@foreach ($subCategory->childs as $childSubCategory)
													<li><a href="#">{{ $childSubCategory->name }}</a></li>
												@endforeach
											</ul>
										@endif
									</div>
								</div>
							@endforeach
						@endif
					</li>
				@endforeach
			</ul>
		</div>
	</div>
</div>
