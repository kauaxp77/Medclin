<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h5 class="modal-title">
                    <span class="fw-mediumbold">
                    Novo</span> 
                    <span class="fw-dark">
                        Médico
                    </span>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
        <form method="POST" autocomplete="off">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group form-group-default">
                            <label>CRM do médico</label>
                            <input name="dnidoc" maxlength="8" id="documento" onKeypress="if  event.returnValue = false;" required type="text" class="form-control" placeholder="exemplo: 77676576">
 <button type="button" id="buscar" class="btn btn-icon btn-round btn-dark">
                                            <i class="fab fa-discourse"></i>
                                        </button>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group form-group-default">
                            <label>Nome do médico</label>
                            <input name="nomdoc" style="color: #fff;" id="nombres"  onkeypress="return soloLetras(event)" required type="text" class="form-control" placeholder="exemplo: juan">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group form-group-default">
                            <label>Sobrenome do médico</label>
                            <input name="apedoc" style="color: #fff;" onkeypress="return soloLetras(event)" id="apellidoPaterno"  required type="text" class="form-control" placeholder="exemplo: perez">
                        </div>
                    </div>
                </div>


<div class="row">
<div class="col-md-6">
    <div class="form-group form-group-default">
        <label>Especialidade do médico</label>
            <select class="form-control" name="espdo" id="esdoc" required>
                <option value="0" selected>Selecione a especialidade</option>
                
            </select>
    </div>
</div>

        <div class="col-sm-6">
            <div class="form-group form-group-default">
                <label>Telefone do médico</label>
                <input name="teldoc"  required onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" maxlength="9" type="text" class="form-control" placeholder="exemplo: 999659874">
            </div>
        </div>
</div>

<div class="row">
<div class="col-md-6">
    <div class="form-group form-group-default">
        <label>Genero  do médico</label>
            <select class="form-control" name="sexdoc" required>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">feminino</option>  
            </select>
    </div>
</div> 

<div class="col-md-6">
    <div class="form-group form-group-default">
        <label>Nascimento do médico</label>
      <input name="nacme"  required  type="date" class="form-control"  >     
    </div>
</div> 
</div>

<div class="row">
<div class="col-md-6">
    <div class="form-group form-group-default">
        <label>email do médico</label>
      <input name="coomed"  required  type="email" class="form-control">     
    </div>
</div> 

<div class="col-md-6">
    <div class="form-group form-group-default">
        <label>nacionalidade do do médico</label>
<select class="form-control" name="nacionam" required>     
        <option value="Brasileira(o)">Brasileira(o)</option>
        <!-- <option value="Peruana(o)">Peruana(o)</option>
        <option value="Venezolana(o)">Venezolana(o)</option>
        <option value="Argentina(o)">Argentina(o)</option>
        <option value="Ecuatoriana(o)">Ecuatoriana(o)</option>
        <option value="Uruguaya(o)">Uruguaya(o)</option> -->

    </select>    
    </div>
</div> 
</div>


            <div class="modal-footer no-bd">
                <button type="submit" name="add_doct" class="btn btn-primary">Adicionar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
        </form>
            </div>
            
        </div>
    </div>
</div>