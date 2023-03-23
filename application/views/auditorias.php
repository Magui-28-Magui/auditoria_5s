<?php include 'sidebar.php'; ?>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <h3 class="fw-bold">AUDITORIAS ALMACEN</h3>
        <div class="row my-4">
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="select_area">Selecciona Area</label>
                    <select class="form-control" id="select_area">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="select_plant">Selecciona Planta</label>
                    <select class="form-control" id="select_plant">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="input_date" class="form-label">Mes de auditoria</label>
                    <input type="month" class="form-control" id="input_date">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 d-flex justify-content-center mb-5">
                <div class="w-75 pt-4 bg-white text-center shadow-sm">
                    <img src="<?php echo base_url(); ?>assets/images/waste.png" class="mb-3" width="100" alt="waste" />
                    <div>
                        SEPARAR
                    </div>
                    <div class="bg-danger mt-3">
                    Incompleto
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center mb-5">
                <div class="w-75 pt-4 bg-white text-center shadow-sm">
                    <img src="<?php echo base_url(); ?>assets/images/list.png" class="mb-3" width="100" alt="list" />
                    <div>
                        ORDENAR
                    </div>
                    <div class="bg-danger mt-3">
                    Incompleto
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center mb-5">
                <div class="w-75 pt-4 bg-white text-center shadow-sm">
                    <img src="<?php echo base_url(); ?>assets/images/wipe.png" class="mb-3" width="100" alt="wipe" />
                    <div>
                        LIMPIAR
                    </div>
                    <div class="bg-danger mt-3">
                    Incompleto
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center mb-5">
                <div class="w-75 pt-4 bg-white text-center shadow-sm">
                    <img src="<?php echo base_url(); ?>assets/images/checklist.png" class="mb-3" width="100" alt="checklist" />
                    <div>
                        ESTANDARIZAR
                    </div>
                    <div class="bg-danger mt-3">
                    Incompleto
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center mb-5">
                <div class="w-75 pt-4 bg-white text-center shadow-sm">
                    <img src="<?php echo base_url(); ?>assets/images/repeat.png" class="mb-3" width="100" alt="repeat" />
                    <div>
                        SOSTENER
                    </div>
                    <div class="bg-danger mt-3">
                    Incompleto
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center mb-5">
                <div class="w-75 pt-4 bg-white text-center shadow-sm">
                    <img src="<?php echo base_url(); ?>assets/images/safe.png" class="mb-3" width="100" alt="safe" />
                    <div>
                        SEGURIDAD
                    </div>
                    <div class="bg-danger mt-3">
                    Incompleto
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->