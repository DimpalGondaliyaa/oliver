 <div class="row">
    <form class="col s12" id="userregfrm">
    	<div class="user-register">
    		user-login
    	</div>
      <div class="row">
        
        <div class="input-field col s12 m12">
          <input placeholder="email" id="email" name="email" type="text" class="validate">
        </div>

        <div class="input-field col s12 m12">
          <input placeholder="password"  id="password" name="password" type="password" class="validate">
        </div>
    </div>
</form>
</div>

<style type="text/css">
/*==========================model css=====================*/
.modal.modal-fixed-footer {
    padding: 0;
    height: 49% !important;
    width: 26% ;
}
input.validate {
    border: 1px solid #ddd !important;
    padding-left: 10px !important;
}

::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  text-transform: capitalize;
}

.user-register {
    font-size: 30px;
    text-transform: capitalize;
    font-weight: 500;
    color: #666666;
}
</style>