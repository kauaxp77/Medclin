<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h5 class="modal-title">
                    <span class="fw-mediumbold">
                    novo</span> 
                    <span class="fw-dark">
                        Paciente
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
                            <label>CPF do paciente</label>
                            <input name="dnipaci" maxlength="8" id="documento" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" required type="text" class="form-control" placeholder="exemplo: 77676576">
 <button type="button" id="buscar" class="btn btn-icon btn-round btn-dark">
                                            <i class="fab fa-discourse"></i>
                                        </button>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group form-group-default">
                            <label>Nome do paciente</label>
                            <input name="nompac" style="color: #fff;" id="nombres"  onkeypress="return soloLetras(event)" required type="text" class="form-control" placeholder="exemplo: juan">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group form-group-default">
                            <label>Sobrenome do paciente</label>
                            <input name="apepac" style="color: #fff;" onkeypress="return soloLetras(event)" id="apellidoPaterno"  required type="text" class="form-control" placeholder="exemplo: perez">
                        </div>
                    </div>
                </div>


<div class="row">
<div class="col-md-6">
    <div class="form-group form-group-default">
        <label>Convênio</label>
            <select class="form-control" name="segpa" required>
                <option value="Si">Sim</option>
                <option value="No">Não</option>  
            </select>
    </div>
</div>

        <div class="col-sm-6">
            <div class="form-group form-group-default">
                <label>Telefone do paciente</label>
                <input name="telpa"  required onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" maxlength="9" type="text" class="form-control" placeholder="exemplo: 999659874">
            </div>
        </div>
</div>

<div class="row">
   <div class="col-md-12">
    <div class="form-group form-group-default">
        <label>Genero do paciente</label>
            <select class="form-control" name="sexpa" required>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Feminino</option>  
            </select>
    </div>
</div> 
</div>
<!-- <div class="row">
<div class="form-group form-group-default">
    <label for="email2">Senha do paciente</label>
    <input type="password" required  name="clave"  class="form-control" placeholder="Insira a senha">
     <small id="emailHelp2" class="form-text text-muted">Nunca compartilharemos seu email com ninguém.</small>      
  </div>   
  </div> -->


            <div class="modal-footer no-bd">
                <button type="submit" name="add_customers" class="btn btn-primary">Adicionar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
        </form>
            </div>
            
        </div>
    </div>
</div>