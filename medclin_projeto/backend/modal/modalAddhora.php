<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h5 class="modal-title">
                    <span class="fw-mediumbold">
                    novo</span> 
                    <span class="fw-dark">
                        horario
                    </span>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
        <form method="POST" autocomplete="off">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group form-group-default">
                            <label>Nome do horario</label>
                            <input name="nameho" onkeypress="return soloLetras(event)" required type="text" class="form-control" placeholder="ejmp: martes">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group form-group-default">
                            <label>Nome do medico</label>
                           <select class="form-control" id="doct" required name="namedoc">
                                
                            </select>
                        </div>
                    </div>
                </div>
            <div class="modal-footer no-bd">
                <button type="submit" name="add_horar" class="btn btn-primary">Adicionar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
        </form>
            </div>
            
        </div>
    </div>
</div>