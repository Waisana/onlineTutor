{{-- teachers forms --}}
<div class="modal fade" id="department" tabindex="-1" role="dialog" aria-labelledby="departmentTitle" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="departmentTitle">Teacher Name</h5>
      </div>
      <div class="modal-body">
        
        <div class="ml-4">
          <div class="row ml-2">
            <dl>
              <dt>Department</dt>
              <dd>Science</dd>
              <dt>classes</dt>
              <dd>Senior 4, Semior 2</dd>
              <dt>Subjects</dt>
              <dd>Chemistry, Biology</dd>
            </dl>
          </div>
          <hr class="mt-4">
          <dt>Make Changes</dt>
            <form>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Department:</label>
                    <select class="form-control form-control-sm" id="recipient-name">
                      <option value="chemistry">Chemistry</option>
                      <option value="mathematics">mathematics</option>
                      <option value="english">English</option>
                      <option value="history">History</option>
                    </select>
                </div>
                <div class="form-group">
                  <h6>Assign Class:</h6>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">Senior 1</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">Senior 2</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">Senior 3</label>
                  </div>
                </div>
                <div class="form-group">
                  <h6>Assign Subjects:</h6>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">Mathematics</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">Chemistry</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">Biology</label>
                  </div>
                </div>
            </form>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-cross"></i> Close</button>
        <button type="button" class="btn btn-primary"><i class="fa fa-save"></i> Save changes</button>
      </div>
    </div>
  </div>
</div>

{{-- adding classes --}}
<div class="modal fade" id="class" tabindex="-1" role="dialog" aria-labelledby="classTitle" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="classTitle">Add new Class</h5>
      </div>
      <div class="modal-body">
        <div class="ml-4">
            <form>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">class:</label>
                    <input type="text" class="form-control form-control-sm" placeholder="Class Name" id="recipient-name">
                </div>
                <div class="form-group">
                  <h6>Assign Subjects:</h6>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">Mathematics</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">Chemistry</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">Biology</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">Physics</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">Chemistry</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">Biology</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">Physics</label>
                  </div>
                </div>
            </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-cross"></i> Close</button>
        <button type="button" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
      </div>
    </div>
  </div>
</div>