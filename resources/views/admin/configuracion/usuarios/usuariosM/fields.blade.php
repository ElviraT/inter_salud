<div class="row">
  <div class="col-md-12">
      <nav class="nav-justified ">
        <div class="nav nav-tabs " id="nav-tab" role="tablist">
          <a class="nav-item nav-link active" id="pop1-tab" data-toggle="tab" href="#pop1" role="tab" aria-controls="pop1" aria-selected="true">{{'Datos De Identificación'}}</a>
          @if(isset($medico->id_Medico))
          <a class="nav-item nav-link" id="pop2-tab" data-toggle="tab" href="#pop2" role="tab" aria-controls="pop2" aria-selected="false">{{'Login'}}</a> 
          <a class="nav-item nav-link" id="pop3-tab" data-toggle="tab" href="#pop3" role="tab" aria-controls="pop3" aria-selected="false">{{'Datos SENIAT'}}</a> 
          @endif
        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="pop1" role="tabpanel" aria-labelledby="pop1-tab">
              <div class="pt-3"></div>
              @include('admin.configuracion.usuarios.usuariosM.tab.identificacion')
        </div>
        <div class="tab-pane fade" id="pop2" role="tabpanel" aria-labelledby="pop2-tab">
              <div class="pt-3"></div>
              @include('admin.configuracion.usuarios.usuariosM.tab.login')
        </div>
        <div class="tab-pane fade" id="pop3" role="tabpanel" aria-labelledby="pop3-tab">
             <div class="pt-3"></div>
              @include('admin.configuracion.usuarios.usuariosM.tab.seniat')
            
        </div>       
      </div>
  </div>
</div>       