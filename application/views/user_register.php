 <div class="row">
    <form class="col s12" id="userregfrm">
    	<div class="user-register">
    		user-register
    	</div>
      <div class="row">
        <div class="input-field col s12 m12">
          <input placeholder="name"  name="name" type="text" class="validate">
        </div>

        <div class="input-field col s12 m12">
          <input placeholder="mobile"  name="mobile" type="text" class="validate">
        </div>

        <div class="input-field col s12 m12">
          <input placeholder="email"  name="email" type="text" class="validate">
        </div>

        <div class="input-field col s12 m12">
          <input placeholder="password"  name="password" type="password" class="validate">
        </div>
    </div>
</form>
</div>

<style type="text/css">
/*==========================model css=====================*/
.modal.modal-fixed-footer {
    padding: 0;
    height: 60% !important;
    width: 35% ;
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
.modal.modal-fixed-footer .modal-content {
    position: absolute;
    height: auto;
    max-height: 100%;
    width: 100%;
    /*overflow-y: auto;*/
}
</style>