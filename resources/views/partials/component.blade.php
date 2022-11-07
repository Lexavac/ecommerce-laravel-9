

      <!-- Main Content -->

     @section('content')

      <div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-stats">
                  <div class="card-stats-title">Order Statistics - 
                    <div class="dropdown d-inline">
                      <a class="font-weight-600 dropdown-toggle" data-toggle="dropdown" href="#" id="orders-month">August</a>
                      <ul class="dropdown-menu dropdown-menu-sm">
                        <li class="dropdown-title">Select Month</li>
                        <li><a href="#" class="dropdown-item">January</a></li>
                        <li><a href="#" class="dropdown-item">February</a></li>
                        <li><a href="#" class="dropdown-item">March</a></li>
                        <li><a href="#" class="dropdown-item">April</a></li>
                        <li><a href="#" class="dropdown-item">May</a></li>
                        <li><a href="#" class="dropdown-item">June</a></li>
                        <li><a href="#" class="dropdown-item">July</a></li>
                        <li><a href="#" class="dropdown-item active">August</a></li>
                        <li><a href="#" class="dropdown-item">September</a></li>
                        <li><a href="#" class="dropdown-item">October</a></li>
                        <li><a href="#" class="dropdown-item">November</a></li>
                        <li><a href="#" class="dropdown-item">December</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-stats-items">
                    <div class="card-stats-item">
                      <div class="card-stats-item-count">24</div>
                      <div class="card-stats-item-label">Pending</div>
                    </div>
                    <div class="card-stats-item">
                      <div class="card-stats-item-count">12</div>
                      <div class="card-stats-item-label">Shipping</div>
                    </div>
                    <div class="card-stats-item">
                      <div class="card-stats-item-count">23</div>
                      <div class="card-stats-item-label">Completed</div>
                    </div>
                  </div>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-archive"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Orders</h4>
                  </div>
                  <div class="card-body">
                    59
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-chart">
                  <canvas id="balance-chart" height="80"></canvas>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Balance</h4>
                  </div>
                  <div class="card-body">
                    $187,13
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-chart">
                  <canvas id="sales-chart" height="80"></canvas>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-shopping-bag"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Sales</h4>
                  </div>
                  <div class="card-body">
                    4,732
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endsection

          @section('tables')
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Class</th>
                <th scope="col">Major</th>
                <th scope="col">Gender</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>17</td>
                <td>XI</td>
                <td>PPLG</td>
                <td>Male</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Mark</td>
                <td>17</td>
                <td>XI</td>
                <td>PPLG</td>
                <td>Male</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Mark</td>
                <td>17</td>
                <td>XI</td>
                <td>PPLG</td>
                <td>Male</td>
              </tr>
             
            </tbody>
          </table>
          @endsection

          @section('table')
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Class</th>
                <th scope="col">Major</th>
                <th scope="col">Gender</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row"></th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            
                <th scope="row"></th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            
                <th scope="row"></th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            
             
            </tbody>
          </table>
          @endsection

          @section('tablec')
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Student</th>
                <th scope="col">Class</th>
                <th scope="col">Major</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>Tomura</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>XI</td>
                <td>XII</td>
                <td>X</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Multimedia</td>
                <td>Animation</td>
                <td>PPLG</td>
              </tr>
            </tbody>
          </table>
          @endsection
          
          @section('createc')
          <div class="main-content">
            <section class="section">
              <div class="section-header">
                <h1>Form</h1>
                <div class="section-header-breadcrumb">
                  <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                  <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
                  <div class="breadcrumb-item">Form</div>
                </div>
              </div>
        
              <div class="section-body">
                <h2 class="section-title">Create Class</h2>
                <p class="section-lead">
                  Examples and usage guidelines for form control styles, layout options, and custom components for creating a wide variety of forms.
                </p>
        
                <div class="row">
                  <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                      <div class="card-header">
                        <h4>Create Data Class</h4>
                      </div>
                      <div class="card-body">
                        <div class="alert alert-info">
                          <b>Note!</b> Not all browsers support HTML5 type input.
                        </div>
                        <div class="form-group">
                          <label>Class</label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label>Major</label>
                          <input type="text" class="form-control">
                        </div>
                    
                      <div class="card-footer text-right">
                        <button class="btn btn-primary mr-1" type="submit">Submit</button>
                        <button class="btn btn-secondary" type="reset">Reset</button>
                      </div>
                    </div>
                    @endsection
                    
                    @section('creates')
                    <div class="main-content">
                        <section class="section">
                          <div class="section-header">
                            <h1>Form</h1>
                            <div class="section-header-breadcrumb">
                              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                              <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
                              <div class="breadcrumb-item">Form</div>
                            </div>
                          </div>
                    
                          <div class="section-body">
                            <h2 class="section-title">Create Class</h2>
                            <p class="section-lead">
                              Examples and usage guidelines for form control styles, layout options, and custom components for creating a wide variety of forms.
                            </p>
                    
                            <div class="row">
                              <div class="col-12 col-md-6 col-lg-6">
                                <div class="card">
                                  <div class="card-header">
                                    <h4>Create Data Class</h4>
                                  </div>
                                  <div class="card-body">
                                    <div class="alert alert-info">
                                      <b>Note!</b> Not all browsers support HTML5 type input.
                                    </div>
                                    <div class="form-group">
                                      <label>Name</label>
                                      <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <label>Age</label>
                                      <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <label>Class</label>
                                      <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <label>Major</label>
                                      <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <label>Gender</label>
                                      <input type="text" class="form-control">
                                    </div>
                                
                                  <div class="card-footer text-right">
                                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                                    <button class="btn btn-secondary" type="reset">Reset</button>
                                  </div>
                                </div>
                                @endsection
          
        </section>
      </div>
          
        </div>
      </footer>
    </div>
  </div>

  
<