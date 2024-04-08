@extends('layout.master')

@push('plugin-styles')
  {!! Html::style('/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.css') !!}
  {!! Html::style('/assets/plugins/datatables.net-fixedcolumns-bs4/fixedColumns.bootstrap4.min.css') !!}
@endpush

@section('content')
<div class="row">
  <div class="col-md-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Default Responsive Table</h4>
        <div class="table-responsive">
          <table id="order-listing" class="table">
            <thead>
              <tr>
                <th>Order #</th>
                <th>Purchased On</th>
                <th>Customer</th>
                <th>Ship to</th>
                <th>Base Price</th>
                <th>Purchased Price</th>
                <th>Status</th>
                <th>Managed By</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>2012/08/03</td>
                <td>Edinburgh</td>
                <td>New York</td>
                <td>$1500</td>
                <td>$3200</td>
                <td>
                  <label class="badge badge-inverse-info">On hold</label>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img class="img-xs rounded-circle" src="{{ url('assets/images/faces/face2.jpg') }}" alt="profile image">
                    <div class="wrapper pl-2">
                      <p class="mb-0 text-gray">Derrick Morton</p>
                      <small class="mb-0 text-muted">Manager</small>
                    </div>
                  </div>
                </td>
                <td>
                  <button class="btn btn-outline-primary">View</button>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>2015/04/01</td>
                <td>Doe</td>
                <td>Brazil</td>
                <td>$4500</td>
                <td>$7500</td>
                <td>
                  <label class="badge badge-inverse-danger">Pending</label>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="img-xs rounded-circle bg-warning text-white text-avatar">AV</span>
                    <div class="wrapper pl-2">
                      <p class="mb-0 text-gray">Austin Vaughn</p>
                      <small class="mb-0 text-muted">Manager</small>
                    </div>
                  </div>
                </td>
                <td>
                  <button class="btn btn-outline-primary">View</button>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>2010/11/21</td>
                <td>Sam</td>
                <td>Tokyo</td>
                <td>$2100</td>
                <td>$6300</td>
                <td>
                  <label class="badge badge-inverse-success">Closed</label>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img class="img-xs rounded-circle" src="{{ url('assets/images/faces/face4.jpg') }}" alt="profile image">
                    <div class="wrapper pl-2">
                      <p class="mb-0 text-gray">Iva Craig</p>
                      <small class="mb-0 text-muted">Manager</small>
                    </div>
                  </div>
                </td>
                <td>
                  <button class="btn btn-outline-primary">View</button>
                </td>
              </tr>
              <tr>
                <td>4</td>
                <td>2016/01/12</td>
                <td>Sam</td>
                <td>Tokyo</td>
                <td>$2100</td>
                <td>$6300</td>
                <td>
                  <label class="badge badge-inverse-success">Closed</label>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img class="img-xs rounded-circle" src="{{ url('assets/images/faces/face5.jpg') }}" alt="profile image">
                    <div class="wrapper pl-2">
                      <p class="mb-0 text-gray">Della Yates</p>
                      <small class="mb-0 text-muted">Manager</small>
                    </div>
                  </div>
                </td>
                <td>
                  <button class="btn btn-outline-primary">View</button>
                </td>
              </tr>
              <tr>
                <td>5</td>
                <td>2017/12/28</td>
                <td>Sam</td>
                <td>Tokyo</td>
                <td>$2100</td>
                <td>$6300</td>
                <td>
                  <label class="badge badge-inverse-success">Closed</label>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="img-xs rounded-circle bg-primary text-white text-avatar">AW</span>
                    <div class="wrapper pl-2">
                      <p class="mb-0 text-gray">Alexander Wallace</p>
                      <small class="mb-0 text-muted">Manager</small>
                    </div>
                  </div>
                </td>
                <td>
                  <button class="btn btn-outline-primary">View</button>
                </td>
              </tr>
              <tr>
                <td>6</td>
                <td>2000/10/30</td>
                <td>Sam</td>
                <td>Tokyo</td>
                <td>$2100</td>
                <td>$6300</td>
                <td>
                  <label class="badge badge-inverse-info">On-hold</label>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img class="img-xs rounded-circle" src="{{ url('assets/images/faces/face7.jpg') }}" alt="profile image">
                    <div class="wrapper pl-2">
                      <p class="mb-0 text-gray">Helen Holt</p>
                      <small class="mb-0 text-muted">Manager</small>
                    </div>
                  </div>
                </td>
                <td>
                  <button class="btn btn-outline-primary">View</button>
                </td>
              </tr>
              <tr>
                <td>7</td>
                <td>2011/03/11</td>
                <td>Cris</td>
                <td>Tokyo</td>
                <td>$2100</td>
                <td>$6300</td>
                <td>
                  <label class="badge badge-inverse-success">Closed</label>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="img-xs rounded-circle bg-info text-white text-avatar">DR</span>
                    <div class="wrapper pl-2">
                      <p class="mb-0 text-gray">Douglas Reese</p>
                      <small class="mb-0 text-muted">Manager</small>
                    </div>
                  </div>
                </td>
                <td>
                  <button class="btn btn-outline-primary">View</button>
                </td>
              </tr>
              <tr>
                <td>8</td>
                <td>2015/06/25</td>
                <td>Tim</td>
                <td>Italy</td>
                <td>$6300</td>
                <td>$2100</td>
                <td>
                  <label class="badge badge-inverse-info">On-hold</label>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img class="img-xs rounded-circle" src="{{ url('assets/images/faces/face9.jpg') }}" alt="profile image">
                    <div class="wrapper pl-2">
                      <p class="mb-0 text-gray">Jim Jennings</p>
                      <small class="mb-0 text-muted">Manager</small>
                    </div>
                  </div>
                </td>
                <td>
                  <button class="btn btn-outline-primary">View</button>
                </td>
              </tr>
              <tr>
                <td>9</td>
                <td>2016/11/12</td>
                <td>John</td>
                <td>Tokyo</td>
                <td>$2100</td>
                <td>$6300</td>
                <td>
                  <label class="badge badge-inverse-success">Closed</label>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="img-xs rounded-circle bg-primary text-white text-avatar">MH</span>
                    <div class="wrapper pl-2">
                      <p class="mb-0 text-gray">Maude Hawkins</p>
                      <small class="mb-0 text-muted">Manager</small>
                    </div>
                  </div>
                </td>
                <td>
                  <button class="btn btn-outline-primary">View</button>
                </td>
              </tr>
              <tr>
                <td>10</td>
                <td>2003/12/26</td>
                <td>Tom</td>
                <td>Germany</td>
                <td>$1100</td>
                <td>$2300</td>
                <td>
                  <label class="badge badge-inverse-danger">Pending</label>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img class="img-xs rounded-circle" src="{{ url('assets/images/faces/face11.jpg') }}" alt="profile image">
                    <div class="wrapper pl-2">
                      <p class="mb-0 text-gray">Harold Perez</p>
                      <small class="mb-0 text-muted">Manager</small>
                    </div>
                  </div>
                </td>
                <td>
                  <button class="btn btn-outline-primary">View</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Fixed Column Table</h4>
        <div class="table-responsive">
          <table id="fixed-column" class="table">
            <thead>
              <tr>
                <th>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input"><i class="input-helper"></i></label>
                  </div>
                </th>
                <th>Order #</th>
                <th>Purchased On</th>
                <th>Customer</th>
                <th>Ship to</th>
                <th>Base Price</th>
                <th>Purchased Price</th>
                <th>Status</th>
                <th>Managed By</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input"><i class="input-helper"></i></label>
                  </div>
                </td>
                <td>1</td>
                <td>2012/08/03</td>
                <td>Edinburgh</td>
                <td>New York</td>
                <td>$1500</td>
                <td>$3200</td>
                <td>
                  <label class="badge badge-inverse-info">On hold</label>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img class="img-xs rounded-circle" src="{{ url('assets/images/faces/face2.jpg') }}" alt="profile image">
                    <div class="wrapper pl-2">
                      <p class="mb-0 text-gray">Derrick Morton</p>
                      <small class="mb-0 text-muted">Manager</small>
                    </div>
                  </div>
                </td>
                <td>
                  <button class="btn btn-outline-primary">View</button>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input"><i class="input-helper"></i></label>
                  </div>
                </td>
                <td>2</td>
                <td>2015/04/01</td>
                <td>Doe</td>
                <td>Brazil</td>
                <td>$4500</td>
                <td>$7500</td>
                <td>
                  <label class="badge badge-inverse-danger">Pending</label>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="img-xs rounded-circle bg-warning text-white text-avatar">AV</span>
                    <div class="wrapper pl-2">
                      <p class="mb-0 text-gray">Austin Vaughn</p>
                      <small class="mb-0 text-muted">Manager</small>
                    </div>
                  </div>
                </td>
                <td>
                  <button class="btn btn-outline-primary">View</button>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" checked><i class="input-helper"></i></label>
                  </div>
                </td>
                <td>3</td>
                <td>2010/11/21</td>
                <td>Sam</td>
                <td>Tokyo</td>
                <td>$2100</td>
                <td>$6300</td>
                <td>
                  <label class="badge badge-inverse-success">Closed</label>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img class="img-xs rounded-circle" src="{{ url('assets/images/faces/face4.jpg') }}" alt="profile image">
                    <div class="wrapper pl-2">
                      <p class="mb-0 text-gray">Iva Craig</p>
                      <small class="mb-0 text-muted">Manager</small>
                    </div>
                  </div>
                </td>
                <td>
                  <button class="btn btn-outline-primary">View</button>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" checked><i class="input-helper"></i></label>
                  </div>
                </td>
                <td>4</td>
                <td>2016/01/12</td>
                <td>Sam</td>
                <td>Tokyo</td>
                <td>$2100</td>
                <td>$6300</td>
                <td>
                  <label class="badge badge-inverse-success">Closed</label>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img class="img-xs rounded-circle" src="{{ url('assets/images/faces/face5.jpg') }}" alt="profile image">
                    <div class="wrapper pl-2">
                      <p class="mb-0 text-gray">Della Yates</p>
                      <small class="mb-0 text-muted">Manager</small>
                    </div>
                  </div>
                </td>
                <td>
                  <button class="btn btn-outline-primary">View</button>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input"><i class="input-helper"></i></label>
                  </div>
                </td>
                <td>5</td>
                <td>2017/12/28</td>
                <td>Sam</td>
                <td>Tokyo</td>
                <td>$2100</td>
                <td>$6300</td>
                <td>
                  <label class="badge badge-inverse-success">Closed</label>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="img-xs rounded-circle bg-primary text-white text-avatar">AW</span>
                    <div class="wrapper pl-2">
                      <p class="mb-0 text-gray">Alexander Wallace</p>
                      <small class="mb-0 text-muted">Manager</small>
                    </div>
                  </div>
                </td>
                <td>
                  <button class="btn btn-outline-primary">View</button>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input"><i class="input-helper"></i></label>
                  </div>
                </td>
                <td>6</td>
                <td>2000/10/30</td>
                <td>Sam</td>
                <td>Tokyo</td>
                <td>$2100</td>
                <td>$6300</td>
                <td>
                  <label class="badge badge-inverse-info">On-hold</label>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img class="img-xs rounded-circle" src="{{ url('assets/images/faces/face7.jpg') }}" alt="profile image">
                    <div class="wrapper pl-2">
                      <p class="mb-0 text-gray">Helen Holt</p>
                      <small class="mb-0 text-muted">Manager</small>
                    </div>
                  </div>
                </td>
                <td>
                  <button class="btn btn-outline-primary">View</button>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input"><i class="input-helper"></i></label>
                  </div>
                </td>
                <td>7</td>
                <td>2011/03/11</td>
                <td>Cris</td>
                <td>Tokyo</td>
                <td>$2100</td>
                <td>$6300</td>
                <td>
                  <label class="badge badge-inverse-success">Closed</label>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="img-xs rounded-circle bg-info text-white text-avatar">DR</span>
                    <div class="wrapper pl-2">
                      <p class="mb-0 text-gray">Douglas Reese</p>
                      <small class="mb-0 text-muted">Manager</small>
                    </div>
                  </div>
                </td>
                <td>
                  <button class="btn btn-outline-primary">View</button>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input"><i class="input-helper"></i></label>
                  </div>
                </td>
                <td>8</td>
                <td>2015/06/25</td>
                <td>Tim</td>
                <td>Italy</td>
                <td>$6300</td>
                <td>$2100</td>
                <td>
                  <label class="badge badge-inverse-info">On-hold</label>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img class="img-xs rounded-circle" src="{{ url('assets/images/faces/face9.jpg') }}" alt="profile image">
                    <div class="wrapper pl-2">
                      <p class="mb-0 text-gray">Jim Jennings</p>
                      <small class="mb-0 text-muted">Manager</small>
                    </div>
                  </div>
                </td>
                <td>
                  <button class="btn btn-outline-primary">View</button>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input"><i class="input-helper"></i></label>
                  </div>
                </td>
                <td>9</td>
                <td>2016/11/12</td>
                <td>John</td>
                <td>Tokyo</td>
                <td>$2100</td>
                <td>$6300</td>
                <td>
                  <label class="badge badge-inverse-success">Closed</label>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="img-xs rounded-circle bg-primary text-white text-avatar">MH</span>
                    <div class="wrapper pl-2">
                      <p class="mb-0 text-gray">Maude Hawkins</p>
                      <small class="mb-0 text-muted">Manager</small>
                    </div>
                  </div>
                </td>
                <td>
                  <button class="btn btn-outline-primary">View</button>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input"><i class="input-helper"></i></label>
                  </div>
                </td>
                <td>10</td>
                <td>2003/12/26</td>
                <td>Tom</td>
                <td>Germany</td>
                <td>$1100</td>
                <td>$2300</td>
                <td>
                  <label class="badge badge-inverse-danger">Pending</label>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img class="img-xs rounded-circle" src="{{ url('assets/images/faces/face11.jpg') }}" alt="profile image">
                    <div class="wrapper pl-2">
                      <p class="mb-0 text-gray">Harold Perez</p>
                      <small class="mb-0 text-muted">Manager</small>
                    </div>
                  </div>
                </td>
                <td>
                  <button class="btn btn-outline-primary">View</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('plugin-scripts')
  {!! Html::script('/assets/plugins/datatables.net/jquery.dataTables.min.js') !!}
  {!! Html::script('/assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.js') !!}
  {!! Html::script('/assets/plugins/datatables.net-fixedcolumns/dataTables.fixedColumns.min.js') !!}
@endpush

@push('custom-scripts')
  {!! Html::script('/assets/js/data-table.js') !!}
@endpush