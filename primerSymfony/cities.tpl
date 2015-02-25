
	    
			
				<h1 class="center-block">Cities of the world</h1>
					<ul class="list-group">			
						{section name=outer loop=$lista}
							<li class="list-group-item">
								<h3 class="bg-success">
									<a href='city_edit.php?ID={$lista[outer]->id}'>
										 <span class="badge">{$lista[outer]->id}</span>
									</a>{$lista[outer]->name}
								</h3>
							</li>			
						{/section}
					</ul>
			
		
			
