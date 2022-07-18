<!--===================== ADD Approval MODAL =============== -->
<div id="deleteMineralModal" class="modal fade" role="dialog" data-keyboard="false" data-backdrop="static">
  <div class="modal-md modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title">Approve Student</h4>
          </div>
          <div class="modal-body">
              <form id="approveStudentForm" method="post">
                  <input type="hidden" class="student_hidden_id" name="id">
                  <input type="hidden" class="" name="status" value="Active">
                  <div class="row">

                      <div class="col-md-12">
                          <p class="alert alert-success d-none success_msg"></p>
                      </div>
                      <div class=" col-md-12">
                          <div class="form-group">
                              <label for="name">Assign myACE Bucks</label>
                              <input type="number" name="amount" class="form-control" placeholder="Assign myACE Bucks to Student">
                          </div>
                      </div>
                      <div class="col-md-12">
                          <ul class="errors to_be_hidden validation_errors"></ul>
                      </div>


                      <div class=" col-md-12">
                          <div style="float:right">
                              <button type="button" class="btn btn-danger"
                                  onclick="closeModal()">Close</button>
                              <button type="button" id="approveStudentBtn" class="btn btn-primary">Save</button>
                          </div>
                      </div>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>

<!-- ================== Update Price Modal ========= -->
<div id="updatePaymentModal" class="modal fade" role="dialog" data-keyboard="false" data-backdrop="static">
  <div class="modal-md modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title">Update myACE Bucks</h4>
          </div>
          <div class="modal-body">
              <form id="updatePriceForm" method="post">
                  <input type="hidden" class="payment_hidden_id" name="id">
                  <div class="row">

                      <div class="col-md-12">
                          <p class="alert alert-success d-none success_msg"></p>
                      </div>
                      <div class=" col-md-12">
                          <div class="form-group">
                              <label for="name">myACE Bucks</label>
                              <input type="number" name="amount" id="amount" class="form-control" placeholder="Assign myACE Bucks to Student">
                          </div>
                      </div>
                      <div class="col-md-12">
                          <ul class="errors to_be_hidden validation_errors"></ul>
                      </div>


                      <div class=" col-md-12">
                          <div style="float:right">
                              <button type="button" class="btn btn-danger"
                                  onclick="closeUpdatePriceModal()">Close</button>
                              <button type="button" id="updatePricetBtn" class="btn btn-primary">Save</button>
                          </div>
                      </div>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>
