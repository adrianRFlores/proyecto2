<div class="form">  
    <ul class="tab-group">
        <li class="tab active"><a href="#signup">Crear Cuenta</a></li>
        <li class="tab"><a href="#login">Iniciar Sesión</a></li>
    </ul>  
      	<div class="tab-content">
        	<div id="signup">   
          		<form action="/" method="post">
          		<div class="top-row">
            		<div class="field-wrap">
              			<label>
                			Nombre<span class="req">*</span>
              			</label>
              			<input type="text" required autocomplete="off" />
            		</div>
            		<div class="field-wrap">
              			<label>
                			Apellido<span class="req">*</span>
              			</label>
              			<input type="text"required autocomplete="off"/>
            		</div>
          		</div>
          		<div class="field-wrap">
            		<label>
              			Usuario<span class="req">*</span>
            		</label>
           	 		<input type="email"required autocomplete="off"/>
          		</div>
          		<div class="field-wrap">
            		<label>
              			Contraseña<span class="req">*</span>
            		</label>
            		<input type="password"required autocomplete="off"/>
          		</div>
          		<button type="submit" class="button button-block"/>Registrar</button>
          	</form>
       	</div>
        <div id="login">   
          	<h1>Bienvenido</h1>
          	<form action="/" method="post">    
	            <div class="field-wrap">
	            	<label>
	              		Usuario<span class="req">*</span>
	            	</label>
	            	<input type="email"required autocomplete="off"/>
	        	</div>
	        	<div class="field-wrap">
	            	<label>
	              		Contraseña<span class="req">*</span>
	            	</label>
	            	<input type="password"required autocomplete="off"/>
	          	</div>          
	          	<button class="button button-block"/>Ingresar</button>
          	</form>
        </div>
    </div><!-- tab-content --> 
</div> <!-- /form -->