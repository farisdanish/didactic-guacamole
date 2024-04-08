@extends('layout.master')

@push('plugin-styles')
  {!! Html::style('/assets/plugins/icheck/skins/all.css') !!}
@endpush

@section('content')
<div class="row">
  <div class="col-md-6 d-flex align-items-stretch grid-margin">
    <div class="row flex-grow">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Default form</h4>
            <p class="card-description"> Basic form layout </p>
            <form class="forms-sample">
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"> </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> </div>
              <button type="submit" class="btn btn-success mr-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-12 stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Horizontal Form</h4>
            <p class="card-description"> Horizontal form layout </p>
            <form class="forms-sample">
              <div class="form-group row">
                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                  <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email"> </div>
              </div>
              <div class="form-group row">
                <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-9">
                  <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password"> </div>
              </div>
              <button type="submit" class="btn btn-success mr-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Basic form</h4>
        <p class="card-description"> Basic form elements </p>
        <form class="forms-sample">
          <div class="form-group">
            <label for="exampleInputName1">Name</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name"> </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email"> </div>
          <div class="form-group">
            <label for="exampleInputPassword4">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password"> </div>
          <div class="form-group">
            <label>File upload</label>
            <input type="file" name="img[]" class="file-upload-default">
            <div class="input-group col-xs-12">
              <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
              <span class="input-group-append">
                <button class="file-upload-browse btn btn-info" type="button">Upload</button>
              </span>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputCity1">City</label>
            <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location"> </div>
          <div class="form-group">
            <label for="exampleTextarea1">Textarea</label> <textarea class="form-control" id="exampleTextarea1" rows="2"></textarea> </div>
          <button type="submit" class="btn btn-success mr-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Coloured select box</h4>
        <p class="card-description"> Basic bootstrap select in theme colors </p>
        <div class="form-group">
          <label for="exampleSelectPrimary">Primary</label>
          <select class="form-control border-primary" id="exampleSelectPrimary">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleSelectInfo">Info</label>
          <select class="form-control border-info" id="exampleSelectInfo">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleSelectSuccess">Success</label>
          <select class="form-control border-success" id="exampleSelectSuccess">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleSelectDanger">Danger</label>
          <select class="form-control border-danger" id="exampleSelectDanger">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleSelectWarning">Warning</label>
          <select class="form-control border-warning" id="exampleSelectWarning">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 d-flex align-items-stretch">
    <div class="row flex-grow">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Basic input groups</h4>
            <p class="card-description"> Basic bootstrap input groups </p>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">$</span>
                </div>
                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                <div class="input-group-append">
                  <span class="input-group-text">.00</span>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">$</span>
                </div>
                <div class="input-group-prepend">
                  <span class="input-group-text">0.00</span>
                </div>
                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Colored input groups</h4>
            <p class="card-description"> Input groups with colors </p>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend bg-info">
                  <span class="input-group-text bg-transparent">
                    <i class="mdi mdi-shield-outline text-white"></i>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend bg-primary border-primary">
                  <span class="input-group-text bg-transparent">
                    <i class="mdi mdi mdi-menu text-white"></i>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                <div class="input-group-append bg-primary border-primary">
                  <span class="input-group-text bg-transparent">
                    <i class="mdi mdi-menu text-white"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend bg-primary border-primary">
                  <span class="input-group-text bg-transparent text-white">$</span>
                </div>
                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                <div class="input-group-append bg-primary border-primary">
                  <span class="input-group-text bg-transparent text-white">.00</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-12 grid-margin stretch-card">
    <div class="row w-100">
      <div class="col-md-6 stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Input size</h4>
            <p class="card-description"> This is the default bootstrap form layout </p>
            <div class="form-group">
              <label>Large input</label>
              <input type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username"> </div>
            <div class="form-group">
              <label>Default input</label>
              <input type="text" class="form-control" placeholder="Username" aria-label="Username"> </div>
            <div class="form-group">
              <label>Small input</label>
              <input type="text" class="form-control form-control-sm" placeholder="Username" aria-label="Username"> </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Selectize</h4>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Large select</label>
              <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect2">Default select</label>
              <select class="form-control" id="exampleFormControlSelect2">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect3">Small select</label>
              <select class="form-control form-control-sm" id="exampleFormControlSelect3">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Checkbox Controls</h4>
        <p class="card-description">Checkbox and radio controls</p>
        <form class="forms-sample">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input"> Default </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" checked> Checked </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" disabled> Disabled </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" disabled checked> Disabled checked </label>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <div class="form-radio">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="" checked> Option one </label>
                </div>
                <div class="form-radio">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2"> Option two </label>
                </div>
              </div>
              <div class="form-group">
                <div class="form-radio disabled">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optionsRadios2" id="optionsRadios3" value="option3" disabled> Option three is disabled </label>
                </div>
                <div class="form-radio disabled">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optionsRadio2" id="optionsRadios4" value="option4" disabled checked> Option four is selected and disabled </label>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Checkbox Flat Controls</h4>
        <p class="card-description">Checkbox and radio controls with flat design</p>
        <form class="forms-sample">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <div class="form-check form-check-flat">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input"> Default </label>
                </div>
                <div class="form-check form-check-flat">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" checked> Checked </label>
                </div>
                <div class="form-check form-check-flat">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" disabled> Disabled </label>
                </div>
                <div class="form-check form-check-flat">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" disabled checked> Disabled checked </label>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <div class="form-radio form-radio-flat">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="flatRadios" id="flatRadios1" value="" checked> Option one </label>
                </div>
                <div class="form-radio form-radio-flat">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="flatRadios" id="flatRadios2" value="option2"> Option two </label>
                </div>
              </div>
              <div class="form-group">
                <div class="form-radio form-radio-flat disabled">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="flatRadios2" id="flatRadios3" value="option3" disabled> Option three is disabled </label>
                </div>
                <div class="form-radio form-radio-flat disabled">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="flatRadios2" id="flatRadios4" value="option4" disabled checked> Option four is selected and disabled </label>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Horizontal Two column</h4>
        <form class="form-sample">
          <p class="card-description"> Personal info </p>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">First Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" /> </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Last Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" /> </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Gender</label>
                <div class="col-sm-9">
                  <select class="form-control">
                    <option>Male</option>
                    <option>Female</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Date of Birth</label>
                <div class="col-sm-9">
                  <input class="form-control" placeholder="dd/mm/yyyy" /> </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Category</label>
                <div class="col-sm-9">
                  <select class="form-control">
                    <option>Category1</option>
                    <option>Category2</option>
                    <option>Category3</option>
                    <option>Category4</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Membership</label>
                <div class="col-sm-4">
                  <div class="form-radio">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked> Free </label>
                  </div>
                </div>
                <div class="col-sm-5">
                  <div class="form-radio">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2"> Professional </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <p class="card-description"> Address </p>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Address 1</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" /> </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">State</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" /> </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Address 2</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" /> </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Postcode</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" /> </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">City</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" /> </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Country</label>
                <div class="col-sm-9">
                  <select class="form-control">
                    <option>America</option>
                    <option>Italy</option>
                    <option>Russia</option>
                    <option>Britain</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-12">
    <div class="card">
      <div class="card-body pb-0">
        <h4 class="card-title mb-0">Icheck</h4>
      </div>
      <div class="row">
        <div class="col-lg-6 grid-margin grid-margin-lg-0">
          <div class="card-body">
            <p class="card-description">Minimal skin</p>
            <div class="icheck">
              <input tabindex="5" type="checkbox" id="minimal-checkbox-1">
              <label for="minimal-checkbox-1">Checkbox 1</label>
            </div>
            <div class="icheck">
              <input tabindex="6" type="checkbox" id="minimal-checkbox-2" checked>
              <label for="minimal-checkbox-2">Checkbox 2</label>
            </div>
            <div class="icheck">
              <input type="checkbox" id="minimal-checkbox-disabled" disabled>
              <label for="minimal-checkbox-disabled">Disabled</label>
            </div>
            <div class="icheck">
              <input type="checkbox" id="minimal-checkbox-disabled-checked" checked disabled>
              <label for="minimal-checkbox-disabled-checked">Disabled &amp; checked</label>
            </div>
            <div class="icheck">
              <input tabindex="7" type="radio" id="minimal-radio-1" name="minimal-radio">
              <label for="minimal-radio-1">Radio button 1</label>
            </div>
            <div class="icheck">
              <input tabindex="8" type="radio" id="minimal-radio-2" name="minimal-radio" checked>
              <label for="minimal-radio-2">Radio button 2</label>
            </div>
            <div class="icheck">
              <input type="radio" id="minimal-radio-disabled" disabled>
              <label for="minimal-radio-disabled">Disabled</label>
            </div>
            <div class="icheck">
              <input type="radio" id="minimal-radio-disabled-checked" checked disabled>
              <label for="minimal-radio-disabled-checked">Disabled &amp; checked</label>
            </div>
          </div>
        </div>
        <div class="col-lg-6 grid-margin grid-margin-lg-0">
          <div class="card-body">
            <p class="card-description">Square skin</p>
            <div class="icheck-square">
              <input tabindex="5" type="checkbox" id="square-checkbox-1">
              <label for="square-checkbox-1">Checkbox 1</label>
            </div>
            <div class="icheck-square">
              <input tabindex="6" type="checkbox" id="square-checkbox-2" checked>
              <label for="square-checkbox-2">Checkbox 2</label>
            </div>
            <div class="icheck-square">
              <input type="checkbox" id="square-checkbox-disabled" disabled>
              <label for="square-checkbox-disabled">Disabled</label>
            </div>
            <div class="icheck-square">
              <input type="checkbox" id="square-checkbox-disabled-checked" checked disabled>
              <label for="square-checkbox-disabled-checked">Disabled &amp; checked</label>
            </div>
            <div class="icheck-square">
              <input tabindex="7" type="radio" id="square-radio-1" name="minimal-radio">
              <label for="square-radio-1">Radio button 1</label>
            </div>
            <div class="icheck-square">
              <input tabindex="8" type="radio" id="square-radio-2" name="minimal-radio" checked>
              <label for="square-radio-2">Radio button 2</label>
            </div>
            <div class="icheck-square">
              <input type="radio" id="square-radio-disabled" disabled>
              <label for="square-radio-disabled">Disabled</label>
            </div>
            <div class="icheck-square">
              <input type="radio" id="square-radio-disabled-checked" checked disabled>
              <label for="square-radio-disabled-checked">Disabled &amp; checked</label>
            </div>
          </div>
        </div>
        <div class="col-lg-6 grid-margin grid-margin-lg-0">
          <div class="card-body">
            <p class="card-description">Flat skin</p>
            <div class="icheck-flat">
              <input tabindex="5" type="checkbox" id="flat-checkbox-1">
              <label for="flat-checkbox-1">Checkbox 1</label>
            </div>
            <div class="icheck-flat">
              <input tabindex="6" type="checkbox" id="flat-checkbox-2" checked>
              <label for="flat-checkbox-2">Checkbox 2</label>
            </div>
            <div class="icheck-flat">
              <input type="checkbox" id="flat-checkbox-disabled" disabled>
              <label for="flat-checkbox-disabled">Disabled</label>
            </div>
            <div class="icheck-flat">
              <input type="checkbox" id="flat-checkbox-disabled-checked" checked disabled>
              <label for="flat-checkbox-disabled-checked">Disabled &amp; checked</label>
            </div>
            <div class="icheck-flat">
              <input tabindex="7" type="radio" id="flat-radio-1" name="minimal-radio">
              <label for="flat-radio-1">Radio button 1</label>
            </div>
            <div class="icheck-flat">
              <input tabindex="8" type="radio" id="flat-radio-2" name="minimal-radio" checked>
              <label for="flat-radio-2">Radio button 2</label>
            </div>
            <div class="icheck-flat">
              <input type="radio" id="flat-radio-disabled" disabled>
              <label for="flat-radio-disabled">Disabled</label>
            </div>
            <div class="icheck-flat">
              <input type="radio" id="flat-radio-disabled-checked" checked disabled>
              <label for="flat-radio-disabled-checked">Disabled &amp; checked</label>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card-body">
            <p class="card-description">Line skin</p>
            <div class="icheck-line">
              <input tabindex="5" type="checkbox" id="line-checkbox-1">
              <label for="line-checkbox-1">Checkbox 1</label>
            </div>
            <div class="icheck-line">
              <input tabindex="6" type="checkbox" id="line-checkbox-2" checked>
              <label for="line-checkbox-2">Checkbox 2</label>
            </div>
            <div class="icheck-line">
              <input type="checkbox" id="line-checkbox-disabled" disabled>
              <label for="line-checkbox-disabled">Disabled</label>
            </div>
            <div class="icheck-line">
              <input type="checkbox" id="line-checkbox-disabled-checked" checked disabled>
              <label for="line-checkbox-disabled-checked">Disabled &amp; checked</label>
            </div>
            <div class="icheck-line">
              <input tabindex="7" type="radio" id="line-radio-1" name="minimal-radio">
              <label for="line-radio-1">Radio button 1</label>
            </div>
            <div class="icheck-line">
              <input tabindex="8" type="radio" id="line-radio-2" name="minimal-radio" checked>
              <label for="line-radio-2">Radio button 2</label>
            </div>
            <div class="icheck-line disabled">
              <input type="radio" id="line-radio-disabled" disabled>
              <label for="line-radio-disabled">Disabled</label>
            </div>
            <div class="icheck-line disabled">
              <input type="radio" id="line-radio-disabled-checked" checked disabled>
              <label for="line-radio-disabled-checked">Disabled &amp; checked</label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('plugin-scripts')
  {!! Html::script('/assets/plugins/icheck/icheck.min.js') !!}
@endpush

@push('custom-scripts')
  {!! Html::script('/assets/js/file-upload.js') !!}
  {!! Html::script('/assets/js/iCheck.js') !!}
@endpush