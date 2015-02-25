            <h1>La id introducida no existe</h1>


            
            <div class="page-header">
			    {foreach from=$lista item=curr_id}
					<ul class="list-group">
						<li class="list-group-item"><h2>La mayor ID existente en BBDD es la :  {$curr_id} </h2></li>
                    </ul>					
				{/foreach}
			</div>