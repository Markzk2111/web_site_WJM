<?php 

    
    include_once "header.php";
    include_once "database.php";

?>



<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/jquery.tabledit.js"></script>
<div class="container mt-100">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Tabela de produtos</h5>
                    <span>WJM - Tijolos Artesanais</span>
                </div>
                <div class="card-block">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="example-1">
                            <thead>
                                <tr>
                                    <th style="display: none;">#</th>
                                    <th>Cód</th>
                                    <th>Produto</th>
                                    <th>Preço</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" style="display: none;">1</th>
                                    <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">1
                                        </span><input class="tabledit-input form-control input-sm" type="text" name="First Name" value="Mark
" style="display: none;" disabled=""></td>
                                    <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span" style="">Tijolo Canto Curvo
                                        </span><input class="tabledit-input form-control input-sm fill" type="text" name="Last Name" value="Otto
" style="display: none;" disabled=""></td>
                                    <td class="tabledit-view-mode"><span class="tabledit-span">R$1,30</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" style="display: none;">2</th>
                                    <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">2
                                        </span><input class="tabledit-input form-control input-sm" type="text" name="First Name" value="Jacob
" style="display: none;" disabled=""></td>
                                    <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">Tijolo Canto Reto
                                        </span><input class="tabledit-input form-control input-sm" type="text" name="Last Name" value="Thorntonkk
" style="display: none;" disabled=""></td>
                                    <td class="tabledit-view-mode"><span class="tabledit-span">R$1,25</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" style="display: none;">3</th>
                                    <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">3
                                        </span><input class="tabledit-input form-control input-sm" type="text" name="First Name" value="Larry
" style="display: none;" disabled=""></td>
                                    <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">Plaqueta
                                        </span><input class="tabledit-input form-control input-sm" type="text" name="Last Name" value="the Bird
" style="display: none;" disabled=""></td>
                                    <td class="tabledit-view-mode"><span class="tabledit-span">R$1,90</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" style="display: none;">4</th>
                                    <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">4
                                        </span><input class="tabledit-input form-control input-sm" type="text" name="First Name" value="Larry
" style="display: none;" disabled=""></td>
                                    <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">Tijolo Colonial
                                        </span><input class="tabledit-input form-control input-sm" type="text" name="Last Name" value="the Bird
" style="display: none;" disabled=""></td>
                                    <td class="tabledit-view-mode"><span class="tabledit-span">R$2,40</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" style="display: none;">5</th>
                                    <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">5
                                        </span><input class="tabledit-input form-control input-sm" type="text" name="First Name" value="Larry
" style="display: none;" disabled=""></td>
                                    <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">Tijolo Tipo Tramela
                                        </span><input class="tabledit-input form-control input-sm" type="text" name="Last Name" value="the Bird
" style="display: none;" disabled=""></td>
                                    <td class="tabledit-view-mode"><span class="tabledit-span">R$2,00</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" style="display: none;">6</th>
                                    <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">6
                                        </span><input class="tabledit-input form-control input-sm" type="text" name="First Name" value="Larry
" style="display: none;" disabled=""></td>
                                    <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">Tijolo Tipo Demolição
                                        </span><input class="tabledit-input form-control input-sm" type="text" name="Last Name" value="the Bird
" style="display: none;" disabled=""></td>
                                    <td class="tabledit-view-mode"><span class="tabledit-span">R$2,15</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php include_once "footer.php" ?>