<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Detail Ketersediaan Pangan</small></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item"><a href="/laporan">Laporan</a></li>
            <li class="breadcrumb-item active">Detail</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div>
  </div>
  <!-- /.content-header -->

  <section class="content">
    <div class="container">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Detail Tanaman Pangan</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
              <div class="row">
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Estimated budget</span>
                      <span class="info-box-number text-center text-muted mb-0">2300</span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Total amount spent</span>
                      <span class="info-box-number text-center text-muted mb-0">2000</span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Estimated project duration</span>
                      <span class="info-box-number text-center text-muted mb-0">20</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12" id="accordion">
                  <h2>Details</h2>
                  <div class="card card-primary card-outline">
                    <a class="d-block w-100" data-toggle="collapse" href="#collapseOne" aria-expanded="true">
                      <div class="card-header">
                        <h4 class="card-title w-100">
                          1. Lorem ipsum dolor sit amet
                        </h4>
                      </div>
                    </a>
                    <div id="collapseOne" class="collapse show" data-parent="#accordion" style="">
                      <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                      </div>
                    </div>
                  </div>
                  <div class="card card-primary card-outline">
                    <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false">
                      <div class="card-header">
                        <h4 class="card-title w-100">
                          2. Aenean massa
                        </h4>
                      </div>
                    </a>
                    <div id="collapseTwo" class="collapse" data-parent="#accordion" style="">
                      <div class="card-body">
                        Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                      </div>
                    </div>
                  </div>
                  <div class="card card-primary card-outline">
                    <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false">
                      <div class="card-header">
                        <h4 class="card-title w-100">
                          3. Donec quam felis
                        </h4>
                      </div>
                    </a>
                    <div id="collapseThree" class="collapse" data-parent="#accordion" style="">
                      <div class="card-body">
                        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                      </div>
                    </div>
                  </div>
                  <div class="card card-warning card-outline">
                    <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false">
                      <div class="card-header">
                        <h4 class="card-title w-100">
                          4. Donec pede justo
                        </h4>
                      </div>
                    </a>
                    <div id="collapseFour" class="collapse" data-parent="#accordion" style="">
                      <div class="card-body">
                        Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                      </div>
                    </div>
                  </div>
                  <div class="card card-warning card-outline">
                    <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapseFive" aria-expanded="false">
                      <div class="card-header">
                        <h4 class="card-title w-100">
                          5. In enim justo
                        </h4>
                      </div>
                    </a>
                    <div id="collapseFive" class="collapse" data-parent="#accordion" style="">
                      <div class="card-body">
                        In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.
                      </div>
                    </div>
                  </div>
                  <div class="card card-warning card-outline">
                    <a class="d-block w-100" data-toggle="collapse" href="#collapseSix">
                      <div class="card-header">
                        <h4 class="card-title w-100">
                          6. Integer tincidunt
                        </h4>
                      </div>
                    </a>
                    <div id="collapseSix" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                        Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.
                      </div>
                    </div>
                  </div>
                  <div class="card card-danger card-outline">
                    <a class="d-block w-100" data-toggle="collapse" href="#collapseSeven">
                      <div class="card-header">
                        <h4 class="card-title w-100">
                          7. Aenean leo ligula
                        </h4>
                      </div>
                    </a>
                    <div id="collapseSeven" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                        Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                      </div>
                    </div>
                  </div>
                  <div class="card card-danger card-outline">
                    <a class="d-block w-100" data-toggle="collapse" href="#collapseEight">
                      <div class="card-header">
                        <h4 class="card-title w-100">
                          8. Aliquam lorem ante
                        </h4>
                      </div>
                    </a>
                    <div id="collapseEight" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                        Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.
                      </div>
                    </div>
                  </div>
                  <div class="card card-danger card-outline">
                    <a class="d-block w-100" data-toggle="collapse" href="#collapseNine">
                      <div class="card-header">
                        <h4 class="card-title w-100">
                          9. Quisque rutrum
                        </h4>
                      </div>
                    </a>
                    <div id="collapseNine" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                        Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
              <h3 class="text-primary"><i class="fas fa-paint-brush"></i> AdminLTE v3</h3>
              <p class="text-muted">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</p>
              <br>
              <div class="text-muted">
                <p class="text-sm">Client Company
                  <b class="d-block">Deveint Inc</b>
                </p>
                <p class="text-sm">Project Leader
                  <b class="d-block">Tony Chicken</b>
                </p>
              </div>

              <h5 class="mt-5 text-muted">Project files</h5>
              <ul class="list-unstyled">
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Functional-requirements.docx</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i> UAT.pdf</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-envelope"></i> Email-from-flatbal.mln</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-image "></i> Logo.png</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Contract-10_12_2014.docx</a>
                </li>
              </ul>
              <div class="text-center mt-5 mb-3">
                <a href="#" class="btn btn-sm btn-primary">Add files</a>
                <a href="#" class="btn btn-sm btn-warning">Report contact</a>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </section>

</div>

<?= $this->endSection(); ?>