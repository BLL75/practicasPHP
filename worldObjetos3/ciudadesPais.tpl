
			<div class="page-header">
			    {section name=outer loop=$lista}
					<ul class="list-group">
					    <li class="list-group-item"><h3><a href='http://en.wikipedia.org/w/index.php?title={$lista[outer]->name}'>*{$lista[outer]->name}</a>   ({$lista[outer]->population} habitantes)</h3></li>
                    </ul>					
				{/section}
			</div>