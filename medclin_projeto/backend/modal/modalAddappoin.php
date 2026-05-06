<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h5 class="modal-title">
                    <span class="fw-mediumbold">
                    novo</span> 
                    <span class="fw-dark">
                        consulta
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
                            <label>Data</label>
                            <input name="fecappo" required type="date" class="form-control" placeholder="ejmp: admin2">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group form-group-default">
                            <label>Hora</label>
                            <input name="ourappo"  required type="time" class="form-control" placeholder="ejmp: admin02">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label>Paciente</label>
                                <select class="form-control" id="cust" required name="paciappo">
                                
                
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label>Área</label>
                                <select class="form-control" id="area"  required name="areappo">
                                
                
                                </select>
                            </div>
                        </div>
                </div>

                <div class="row">
                 <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>Médico</label>
                                <select class="form-control" id="docar" required name="mediappo">
                                
                                </select>
                            </div>
                        </div>   
                </div>
            <div class="modal-footer no-bd">
                <button type="submit" name="add_appoi" class="btn btn-primary">Adicionar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
        </form>
            </div>
            
        </div>
    </div>
</div>